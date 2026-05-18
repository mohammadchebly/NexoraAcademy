<?php
require "../connection.php";
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    if(empty(trim($name)) || empty(trim($email)) || empty(trim($pass))) {
        echo "Missing Parameter";
    }

    try {
            $hashed_password = password_hash($pass, PASSWORD_BCRYPT);
        $sql = "INSERT INTO users (name, email, password) VALUES ( :name, :email, :pass)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':pass', $hashed_password);
        $stmt->execute();
        header("Location: ../login.php");
    }catch(PDOException $exc) {
        echo "Error adding user: " . $exc->getMessage();
    }
}