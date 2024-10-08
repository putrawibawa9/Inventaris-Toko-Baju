<?php
require_once 'PengelolaInventaris.php';
$pengelola = new PengelolaInventaris();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $ukuran = $_POST['ukuran'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $pengelola->tambahkanItem($nama, $ukuran, $jumlah, $harga);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Item Inventaris</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Tambah Item Inventaris</h1>
    <form method="POST">
        <label for="nama">Nama Pakaian:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="ukuran">Ukuran:</label>
        <input type="text" id="ukuran" name="ukuran" required>

        <label for="jumlah">Jumlah:</label>
        <input type="number" id="jumlah" name="jumlah" required>

        <label for="harga">Harga:</label>
        <input type="number" step="0.01" id="harga" name="harga" required>

        <button type="submit" class="button">Tambah</button>
    </form>
    <a href="index.php" class="button">Kembali</a>
</body>
</html>
