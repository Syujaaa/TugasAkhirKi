<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon"
          href="https://w7.pngwing.com/pngs/961/816/png-transparent-paper-article-information-industry-project-1000-miscellaneous-rectangle-material-thumbnail.png"
          type="image/x-icon">
</head>
<?php

include 'system/connection.php';
if ($connection) {
  $querySql = "SELECT * from articles";
  $statement = $connection->prepare($querySql);
  $statement->execute();
  $listArticle = $statement->fetchAll(PDO::FETCH_ASSOC);
} ?>

<body class="bg-light">
  <nav class="navbar navbar-expand-lg border alig-items-center mb-3" style="background-color: #e3f2fd;">
    <div class="container">
      <h1 style="font-family:Tahoma" class="navbar-brand display-2"><img
          src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="Logo"
          width="34" height="28" class="d-inline-block align-text-top rounded-circle">

        <?php
        $namaaseli = "Farras Syuja";
        $sandibenar = "061006";

        if (isset($_COOKIE['nama']) && isset($_COOKIE['sandi'])) {
          $Cnama = $_COOKIE['nama'];
          $Csandi = $_COOKIE['sandi'];
          echo $_COOKIE['nama'];
        } else {
          ?> <a class="btn btn-primary btn-sm" href="login.php">Login</a>
        <?php } ?>
      </h1>

      <?php
      if (isset($_COOKIE['nama']) && isset($_COOKIE['sandi'])) {
        if ($Cnama === $namaaseli && $Csandi === $sandibenar) {
          ?>
          <li class="nav-item dropdown list-unstyled">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Admin
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="admin/add.php">Tambah Article</a></li>
            </ul>
          </li>
        <?php }
        ?> <a href="logout.php" class="btn btn-danger">Logout</a>
      <?php } ?>
    </div>
  </nav>
  </div>
  </nav>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-9 card p-5">
        <h3>Article</h3>
        <div class="row">
          <?php foreach ($listArticle as $article) { ?>
            <div class="col-sm-4 mb-4">
              <div class="card p-2">
                <a href="article.php?id=<?= $article['id'] ?>">
                  <img src="<?= $article['gambar'] ?>" style="height: 150px; width: 218px"></a>
                <b>
                  <p class="text-center p-2">
                    <?= $article['judul'] ?>
                  </p>
                </b>

                <?php
                if (isset($_COOKIE['nama']) && isset($_COOKIE['sandi'])) {
                  if (isset($Cnama) && isset($Csandi) && ($Cnama === $namaaseli && $Csandi === $sandibenar)) { ?>
                    <form action="system/delete.php" method="POST"
                      onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?');">
                      <input type="hidden" name="id" value="<?= $article['id'] ?>">
                      <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                      <a href="admin/edit.php?id=<?= $article['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    </form>
                    <?php
                  }
                }
                ?>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>