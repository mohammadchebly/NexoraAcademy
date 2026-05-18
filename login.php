<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Nexora Academy | Login</title>

    <style>
        *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family:Arial, Helvetica, sans-serif;
        }

        body{
        height:100vh;
        display:flex;
        justify-content:center;
        align-items:center;
        background:#0f172a;
        }

        .login-box{
        width:350px;
        background:white;
        padding:30px;
        border-radius:20px;
        box-shadow:0 10px 25px rgba(0,0,0,0.2);
        display:flex;
        flex-direction:column;
        gap:15px;
        animation:float 3s ease-in-out infinite;
        }

        @keyframes float{
        0%{
            transform:translateY(0px);
        }
        50%{
            transform:translateY(-10px);
        }
        100%{
            transform:translateY(0px);
        }
        }

        h2, p{
        text-align:center;
        color:#0f172a;
        }

        input{
        padding:12px;
        margin: 5px;
        width: 300px;
        border:1px solid #ccc;
        border-radius:10px;
        font-size:16px;
        outline:none;
        }

        #login, #home{
        padding:12px;
        width: 300px;
        border:none;
        text-decoration: none;
        text-align: center;
        border-radius:10px;
        background:#2563eb;
        color:white;
        font-size:16px;
        cursor:pointer;
        transition:0.3s;
        }

        #login, #home{
        background:#1d4ed8;
        }

    </style>

</head>
<body>
    <div class="login-box">

    <!-- try: jhon@example.com
              jhon@123 -->
              
    <h2>Login</h2>
    <p>Don't have an account? <a href='register.php'> Register now </a></p> 
    <form action="actions/login_action.php" method="POST">
        <input type="email" required name="email">
        <input type="password" required name="pass"><br>
        <input type="submit" value="Login" id="login">
    </form>

    <a href="index.php" id="home">Return to home Page</a>

    <?php

    if(isset($_GET['err'])){
        if($_GET['err'] == 1){
            echo "<p style='color:red'>Wrong Password</p>";
        }else if($_GET['err'] == 2){
            echo "<p style='color:red'>Wrong Email</p>";
        }
    }
    ?>
    </div>

</body>
</html>