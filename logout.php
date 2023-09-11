<?php
setcookie('nama', $nama, time() - 3600, '/');
setcookie('sandi', $sandi, time() - 3600, '/');

header('Location: index.php');
?>