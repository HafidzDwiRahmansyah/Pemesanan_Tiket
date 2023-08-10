<?php

include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$data = mysqli_query($koneksi, "SELECT * FROM akun WHERE email = '$email' AND password = '$password'");
$cek = mysqli_num_rows($data);

if ($cek){
    echo "<script>alert('Login berhasil')</script>";
    echo "<script>window.location.href = 'home.html' </script>";
}else{
    echo "<script>alert('Login gagal Silahkan Cek Kembali')</script>";
    echo "<script>window.location.href = 'login.html' </script>";
}
?>