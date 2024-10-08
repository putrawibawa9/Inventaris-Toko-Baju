<?php
require_once 'db.php';

class PengelolaInventaris {
    private $pdo;

    public function __construct() {
        $this->pdo = koneksiDatabase();
    }

    public function tambahkanItem($nama, $ukuran, $jumlah, $harga) {
        $sql = "INSERT INTO inventaris (nama, ukuran, jumlah, harga) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nama, $ukuran, $jumlah, $harga]);
    }

    public function hapusItem($id) {
        $sql = "DELETE FROM inventaris WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }

    public function tampilkanInventaris() {
        $sql = "SELECT * FROM inventaris";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
