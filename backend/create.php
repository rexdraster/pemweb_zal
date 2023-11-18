<?php

require './../config/db.php';

// jika sudah klik simpan maka ambil data dari DB
if(isset($_POST['submit'])) {
    global $db_connect;

    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $tempImage = $_FILES['image']['tmp_name'];

    $randomFilename = time().'-'.md5(rand()).'-'.$image;
    // directory path 
    $uploadPath ='upload/'.$randomFilename;

    $upload = move_uploaded_file($tempImage, '../'.$uploadPath);

    if($upload) {
        mysqli_query($db_connect,"INSERT INTO products (name, price,image)
                    VALUES ('$name','$price','/upload/$randomFilename')");
        // jika berhasil upload maka redirect ke halaman show.php
        header('Location:../show.php');
    } else {
        echo "gagal upload";
    }

}