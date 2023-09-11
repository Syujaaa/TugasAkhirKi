<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Tambah Article</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="icon"
          href="data:image/png;base64,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"
          type="image/x-icon">

</head>

<body class="bg-light">
     <nav class="navbar navbar-expand-lg border alig-items-center mb-3" style="background-color: #e3f2fd;">
          <div class="container">

               <h1 style="font-family:Tahoma" class="navbar-brand display-2"><img
                         src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"
                         alt="Logo" width="34" height="28" class="d-inline-block align-text-top rounded-circle"> <?= $_COOKIE['nama']; ?> (Admin) </h1>
               <h5>Tambah Article</h5>
          </div>
     </nav>
     <?php
     $namaaseli = "Farras Syuja";
     $sandibenar = "061006";
     if (isset($_COOKIE['nama']) && isset($_COOKIE['sandi'])) {
          $Cnama = $_COOKIE['nama'];
          $Csandi = $_COOKIE['sandi'];
          if ($Cnama === $namaaseli && $Csandi === $sandibenar) { ?>
               <div class="card container p-3">
                    <form class="container p-5" action="../system/add-article.php" method="POST">
                         <?php if (@$_GET['error']) { ?>
                              <div class="alert-danger" role="alert">
                                   <?= $_GET['error'] ?>
                              </div>
                         <?php } ?>

                         <a onclick="history.back()" class="btn btn-secondary">Kembali</a>

                         <div class="form-group py-3">
                              <label for="">Judul</label>
                              <input type="text" name="judul" id="judul" class="form-control" required placeholder="Judul">
                         </div><br>

                         <div class="form-group">
                              <label for="">Gambar</label>
                              <input type="url" name="gambar" id="gambar" class="form-control" required placeholder="Gambar">
                         </div>

                         <div class="form-group py-3">
                              <label for="">Isi article</label>
                              <textarea name="article" id="article" cols="30" rows="20" class="form-control" required
                                   placeholder="Article"></textarea>
                         </div>

                         <div>
                              <button type="submit" class="btn btn-primary">Simpan</button>
                         </div>
                    </form>
               </div>
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