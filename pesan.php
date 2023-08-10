<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            background-color: rgb(200, 197, 197);
        }
        h1{
            padding-top: 25px;
            padding-left: 25px;
            color: orange;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            text-shadow: 2px 2px white;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Pesan Tiket</h1><br>
    <form action="" method="post">
        <label for="nama">Nama Pembeli</label><br>
        <input type="text" name="nama" id="nama" placeholder="Nama Anda..."><br><br>
        <label for="nama">Jumlah Pemesan</label><br>
        <input type="number" id="angka" name="angka" placeholder="berapa" min="1" max="100"><br><br>
        <label for="nama">Jenis Tiket</label><br>
        <select name="beli" id="beli">
            <option value="">Tiket Wisata</option>
            <option value="">Tiket Transportasi</option>
            <option value="">Tiket Penginapan</option>
        </select>
        <label for="pembayaran">Jenis Pembayaran</label>
        <option value="">M-Banking
            <option value="">BCA</option>
            <option value="">BRI</option>
            <option value="">BNI</option>
        </option>
            <select name="" id=""></select>
            <option value="">Kartu Kredit</option>
            <option value="">Direct Debit</option>
            <option value=""></option>
        </select>
    </form>
    </div>
</body>
</html>