<?php
session_start();

if ($_SESSION['role'] !='user') {
    session_destroy();
    header('Location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat datang <?= $_SESSION['name'];?></h1>
    <a href="show.php">Lihat Produk</a><br>
    <a href='./backend/logout.php'>Logout</a>
</body>
</html>