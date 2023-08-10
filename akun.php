<?php
include 'koneksi.php' ;

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$cek_user = mysqli_query($koneksi, "SELECT * FROM akun WHERE email = '$email'");
if ($cek_user->num_rows > 0) {
    echo "<script>alert('email sudah digunakan')</script>";
    echo "<script>window.location.href='buat.html'</script>";
} else {
    $tambah = mysqli_query($koneksi, "INSERT INTO akun (username, email, password) VALUES('$username','$email','$password')");

    echo "<script>alert('Data berhasil kami simpan')</script>";
    echo "<script>window.location.href='login.html'</script>";
}
