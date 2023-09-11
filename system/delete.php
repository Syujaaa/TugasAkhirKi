<?php

include "./connection.php";

if ($connection) {

     $id = $_POST['id'];
     if (!$id) {
          header("Location:../isi.php");
     }

     try {

          $querySql = "DELETE FROM articles WHERE id = :id";
          $statement = $connection->prepare($querySql);
          $statement->execute([
               'id' => $id
          ]);

          header("Location:../index.php");

     } catch (\Exception $e) {
          header("Location:../index.php?error=Proses delete gagal");
     }
}