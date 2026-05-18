<?php

require "../connection.php";
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    if(empty(trim($email)) || empty(trim($pass))) {
        echo "Missing Parameter";
    }

    try {
        $sql = "SELECT id, name, password FROM users WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user){
            if(password_verify($pass, $user['password'])){
                $_SESSION['loggedIn'] = true;
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
                header("location: ../privatePage.php");
            }else{
                header("location: ../login.php?err=1");
            }
        }else {
            header("location: ../login.php?err=2");
        }
        
    }catch(PDOException $exc) {
        echo "Error adding user: " . $exc->getMessage();
    }
}