<!doctype html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Edit Article</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="icon"
          href="https://w7.pngwing.com/pngs/635/360/png-transparent-computer-icons-article-editing-writing-icon-miscellaneous-angle-logo-thumbnail.png"
          type="image/x-icon">
</head>
<?php
include '../system/connection.php';
$id = @$_GET['id'];
if ($connection && $id) {
     $querySql = "SELECT * FROM articles WHERE id = :id";
     $statement = $connection->prepare($querySql);
     $statement->bindParam(':id', $id, PDO::PARAM_INT);
     $statement->execute();
     $article = $statement->fetch(PDO::FETCH_ASSOC);
     if (!$article) {
          echo "Artikel dengan ID $id tidak ditemukan.";
     }
}
?>

<body class="bg-light">
     <nav class="navbar navbar-expand-lg border alig-items-center mb-3" style="background-color: #e3f2fd;">
          <div class="container">

               <h1 style="font-family:Tahoma" class="navbar-brand display-2"><img
                         src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"
                         alt="Logo" width="34" height="28" class="d-inline-block align-text-top rounded-circle"> <?= $_COOKIE['nama']; ?> (Admin) </h1>
               <h5>Edit Article</h5>
          </div>
     </nav>
     <?php
     $namaaseli = "Farras Syuja";
     $sandibenar = "061006";
     if (isset($_COOKIE['nama']) && isset($_COOKIE['sandi'])) {
          $Cnama = $_COOKIE['nama'];
          $Csandi = $_COOKIE['sandi'];
          if ($Cnama === $namaaseli && $Csandi === $sandibenar) { ?>
               <form class="container p-5 card" action="../system/editArticle.php" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $article['id'] ?>">
                    <?php if (@$_GET['error']) { ?>
                         <div class="alert alert-danger" role="alert">
                              <?= $_GET['error'] ?>
                         </div>
                    <?php } ?>

                    <div class="d-flex justify-content-between py-3">
                         <a onclick="history.back()" class="btn btn-secondary">Kembali</a><br>
                    </div>

                    <div class="mt-3">
                         <div class="form-group py-2">
                              <label for="">Judul</label>
                              <input type="text" name="judul" id="judul" class="form-control" required placeholder="Judul"
                                   value="<?= $article['judul']; ?>">
                         </div>
                         <div class="form-group py-2">
                              <label for="">Gambar</label>
                              <input type="url" name="gambar" id="gambar" class="form-control" required placeholder="Gambar"
                                   value="<?= $article['gambar']; ?>">
                         </div>
                         <div class="form-group py-2">
                              <label for="">Article</label>
                              <textarea name="article" id="article" cols="30" rows="20" class="form-control" placeholder="Article"
                                   required><?= $article['article']; ?></textarea>
                         </div>
                         <div class="py-4"> <button type="submit" name="kirim" class="btn btn-primary"
                                   value="simpan">Simpan</button>
                         </div>
                    </div>
               </form>
          <?php } else {
               header("Location:../index.php");
          }
     } else {
          header("Location:../index.php");
     } ?>
     <footer class="text-white text-center py-2" style="background-color: #5ba6f1;">
          <div class="container">
               <div class="row">
                    <div class="col">
                         &copy; 2023 Farras Syuja
                    </div>
               </div>
          </div>
     </footer>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>