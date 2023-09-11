<?php
include "connection.php";

$id = $_POST['id'];
$judul = $_POST['judul'];
$gambar = $_POST['gambar'];
$article = $_POST['article'];

$querySql = "UPDATE articles SET judul=:judul, gambar=:gambar, article=:article WHERE id = :id";
$statement = $connection->prepare($querySql);
$update = $statement->execute([
    ':judul' => $judul,
    ':gambar' => $gambar,
    ':article' => $article,
    ':id' => $id,
]);

if ($update) {
    header("Location:../index.php");
} else {
    echo "Gagal memperbarui data.";
}
?>