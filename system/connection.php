<?php

$serverName = "localhost";
$username = "root";
$password = "";
$databaseName = "tugasakhir";
$connection = null;


try {
    $connection = new PDO(
        "mysql:host=$serverName;dbname=$databaseName",
        $username,
        $password
    );
} catch (PDOException $error) {
    echo "Koneksi gagal " . $error->getMessage();
}