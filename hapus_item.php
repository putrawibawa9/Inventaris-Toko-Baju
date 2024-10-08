<?php
require_once 'PengelolaInventaris.php';
$pengelola = new PengelolaInventaris();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $pengelola->hapusItem($id);
    header("Location: index.php");
}
?>
