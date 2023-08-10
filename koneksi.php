<?php

$koneksi = mysqli_connect("localhost", "root", "", "website_wisata");

if (!$koneksi) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
?>