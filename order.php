<?php
require'functions.php';
session_start();
if(!isset($_SESSION["login"])){
    header("location: login.php");
    exit;

}
$ngulik = query("SELECT * FROM tb_order");


?>

<!DOCTYPE html>
<link rel="stylesheet" href="css/order.css">

<head>
    <title>Halaman Jesen</title>
</head>

<body>

    <h1>BIODATA GW NIH</h1>

    <a href="order.html">Pesan Lagi</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">

        <th>No.</th>
        <th>Nama order</th>
        <th>Pesanan</th>
        <th>Nomor Telp</th>
        <th>Email</th>
        <th>Addres</th>

        <?php $i = 1; ?>
        <?php foreach( $ngulik as $row  )   : ?>

        <tr>
            <td><?=  $i; ?></td>
            <td>
                <a href="ubah"></a> |
                <a href="hapus"></a>
            </td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["pesanan"]; ?></td>
            <td><?= $row["nomor"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["addres"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

        <a class="geseran" href="order.html">kembali</a>
</body>

</html>