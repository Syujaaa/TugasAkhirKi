<?php
if (isset($_POST['nama']) && isset($_POST['sandi'])) {
     $nama = $_POST['nama'];
     $sandi = $_POST['sandi'];
     setcookie('nama', $nama, time() + 3600, '/');
     setcookie('sandi', $sandi, time() + 3600, '/');
}

header('Location: index.php');
?>