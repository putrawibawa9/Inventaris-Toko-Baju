<?php
require_once 'PengelolaInventaris.php';
$pengelola = new PengelolaInventaris();
$inventaris = $pengelola->tampilkanInventaris();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventaris Toko Baju</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Inventaris Toko Baju</h1>
    <a href="tambah_item.php" class="button">Tambah Item</a>
    <table>
        <tr>
            <th>Nama</th>
            <th>Ukuran</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($inventaris as $item) { ?>
            <tr>
                <td><?php echo $item['nama']; ?></td>
                <td><?php echo $item['ukuran']; ?></td>
                <td><?php echo $item['jumlah']; ?></td>
                <td>Rp<?php echo $item['harga']; ?></td>
                <td>
                    <a href="hapus_item.php?id=<?php echo $item['id']; ?>" class="button">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
