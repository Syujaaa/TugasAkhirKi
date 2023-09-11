<!doctype html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Artikel</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="icon"
          href="https://w7.pngwing.com/pngs/191/49/png-transparent-notes-office-pages-papers-print-report-documents-article-news-journalism.png"
          type="image/x-icon">
</head>
<?php

include 'system/connection.php';
$id = @$_GET['id'];
if ($connection && $id) {
     $querySql = "SELECT * from articles where id=:id";
     $statement = $connection->prepare($querySql);
     $statement->execute([
          'id' => $id
     ]);
     $article = $statement->fetch(PDO::FETCH_ASSOC);
} else {
     header("Location:index.php");
}

?>

<body class="bg-light">
     <nav class="navbar navbar-expand-lg border alig-items-center mb-3" style="background-color: #e3f2fd;">
          <div class="container">

               <h1 style="font-family:Tahoma" class="navbar-brand display-2"><img
                         src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"
                         alt="Logo" width="34" height="28" class="d-inline-block align-text-top rounded-circle"><?php if (isset($_COOKIE['nama']) && isset($_COOKIE['sandi'])) {
                              echo $_COOKIE['nama'];
                         } else { ?> <a class="btn btn-primary btn-sm" href="login.php">Login</a>
                    <?php } ?>
               </h1>
          </div>
     </nav>
     <div class="container p-4 card">
          <div class="d-flex justify-content-between py-3">
               <a onclick="history.back()" class="btn btn-secondary">Kembali</a><br>
          </div>
          <h1 class="py-4 text-center">
               <?= $article['judul'] ?>
          </h1>
          <img src="<?= $article['gambar'] ?>" style="width: 100%;" class="py-2" />
          <pre class="mt-3 lh-bas"
               style="white-space: break-spaces;font-family: Arial;font-size: 17px;"><?= $article['article'] ?></pre>
     </div>
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