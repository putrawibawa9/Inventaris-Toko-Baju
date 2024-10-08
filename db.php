<?php
// Koneksi ke database SQLite
function koneksiDatabase() {
    try {
        $pdo = new PDO('sqlite:inventaris_web.db');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Koneksi gagal: " . $e->getMessage());
    }
}

// Buat tabel inventaris jika belum ada
function buatTabel() {
    $pdo = koneksiDatabase();
    $sql = "CREATE TABLE IF NOT EXISTS inventaris (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        nama TEXT,
        ukuran TEXT,
        jumlah INTEGER,
        harga REAL
    )";
    $pdo->exec($sql);
}
buatTabel();
?>
