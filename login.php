<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon"
        href="https://w7.pngwing.com/pngs/407/879/png-transparent-computer-icons-user-login-others-miscellaneous-monochrome-chemistry.png"
        type="image/x-icon">

</head>
<?php
include 'system/connection.php';
?>

<body class="bg-light py-6">
    <br><br><br><br>
    <div class="row justify-content-center align-items-center py-6">
        <div class="col-md-4 mt-4 card p-5">
            <h1 class="bold py-2">Login</h1>
            <form action="pastikan.php" method="POST">
                <div class="form-group">
                    Nama: <input type="text" name="nama" class="form-control" required placeholder="Nama"> <br>
                    Password: <input type="password" name="sandi" class="form-control" placeholder="Password"
                        required><br>
                    <a onclick="history.back()" class="btn">Kembali</a><input type="submit" value="Kirim" name="sudah"
                        class="btn btn-primary">

                </div>
        </div>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>