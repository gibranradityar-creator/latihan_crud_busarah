<?php
define('HOST_NAME', 'localhost');
define('USER_NAME', 'root');
define('PASSWORD', '');
define('DB_NAME', 'latihan_root'); // Menyesuaikan nama database kamu

$koneksi = mysqli_connect(HOST_NAME, USER_NAME, PASSWORD, DB_NAME);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>