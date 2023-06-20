<?php
session_start();

if(isset($_SESSION["login"])){
    header("location: index.html");
    exit;
}


require 'functions.php';


if (isset ( $_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE 
        username = '$username'");

    //cek username
    if( mysqli_num_rows($result)=== 1 ) {

        //cek passwoard 
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"])){
            $_SESSION["login"] = true;
            header("location: index.html");
            exit;
        }
    }

    $error = true;
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        background-image: url(./images/bg.jpg);
        color: black;
        padding: 150px;
    }

    h1 {
        text-align: center;
        color: black;
    }

    form {
        width: 300px;
        margin: 0 auto;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 5px;
        margin-bottom: 10px;
    }

    button[type="submit"] {
        background-color: #1f81c6;
        color: white;
        padding: 8px 12px;
        border: none;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #1f81c6;
    }

    h5 {
        text-align: center;
        margin-top: 20px;
        color: black;
    }

    a {
        display: block;
        text-align: center;
        color: black;
        text-decoration: none;
    }

    p {
        color: white;
        font-style: italic;
    }

    label {
        display: block;
        color: white;

    }

    body {
        color: aliceblue;
    }
    </style>
</head>

<body background="hehe.png">
    <h1>LOGIN</h1>

    <?php if (isset($error) ) :?>
    <p style="color:white; font-style: italic;">username/password salah</p>
    <?php endif; ?>






    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="Password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">PENCET</button>
            </li>
        </ul>
    </form>
    <h5>belum punya akun?</h5>
    <a href="registrasi.php">REGISTRASI</a></div>
</body>

</html>