<?php
require'functions.php';

if( isset($_POST["register"])){

    if( registrasi($_POST) > 0 ){
    echo "<script>
            alert('userbaru berhasil ditambahkan');
        </script>";
        header("location: login.php");
    }else{
        echo mysqli_error($conn);
    }
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
        color: black;
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
        color: #1f81c6;
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

<body>
    <h1>REGISTRASI</h1>

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
                <label for="password2">Konfirmasi Password : </label>
                <input type="Password" name="password2" id="password2">
            </li>
            <li>
                <button type="submit" name="register">PENCET</button>
            </li>
        </ul>
    </form>
</body>

</html>