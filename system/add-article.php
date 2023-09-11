<?php

include "./connection.php";

$judul = $_POST['judul'];
$gambar = $_POST['gambar'];
$article = $_POST['article'];
if ($connection) {
     $querySql = "INSERT INTO articles (judul,gambar,article)
          VALUES ('$judul','$gambar','$article')";
     $save = $connection->exec($querySql);
     if (!$save) {
          header("Location:../index.php?error=gagal menyimpam");
     }
     header("Location:../index.php");
}