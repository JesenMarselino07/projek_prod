<?php
session_start();

if(!isset($_SESSION["login"])){

	header("location: login.php");
	exit;
}
require'functions.php';
    $conn = mysqli_connect("localhost", "root","", "db_food" );
    
    
    
    if (isset($_POST["submit"])){

        $nama = $_POST["nama"];
        $pesanan = $_POST["pesanan"];
        $nomor = $_POST["nomor"];
        $email = $_POST["email"];
        $addres = $_POST["addres"];

        $query = "INSERT INTO tb_order VALUES ('', '$nama','$pesanan', '$nomor','$email', '$addres')";
        mysqli_query($conn, $query);


    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f1f1f1;
        padding: 20px;
        background-image: url(./images/bg.jpg);
    }

    h1 {
        text-align: center;
        color: white;

    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

    }

    ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    li {
        margin-bottom: 10px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    button[type="submit"] {
        background-color: black;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }
    </style>
    <title>Order </title>
</head>

<body>
    <h1>Order Makanan</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="pesanan">Pesanan : </label>
                <input type="text" name="pesanan" id="pesanan">
            </li>
            <li>
                <label for="nomor">Nomor Telp: </label>
                <input type="text" name="nomor" id="nomor">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="addres">Alamat : </label>
                <input type="text" name="addres" id="addres">
            </li>
            <li>
                <button type="submit" name="submit">Kirim</button>
            </li>
        </ul>
    </form>
</body>

</html>