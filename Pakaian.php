<?php
abstract class Pakaian {
    protected $nama;
    protected $ukuran;
    protected $jumlah;
    protected $harga;

    public function __construct($nama, $ukuran, $jumlah, $harga) {
        $this->nama = $nama;
        $this->ukuran = $ukuran;
        $this->jumlah = $jumlah;
        $this->harga = $harga;
    }

    public function tampilkanItem() {
        echo "<tr><td>$this->nama</td><td>$this->ukuran</td><td>$this->jumlah</td><td>Rp$this->harga</td></tr>";
    }

    public abstract function tambahkanDiskon($diskon);
}

class Kemeja extends Pakaian {
    public function tambahkanDiskon($diskon) {
        $this->harga -= $diskon;
    }
}

class Celana extends Pakaian {
    public function tambahkanDiskon($diskon) {
        $this->harga -= $diskon;
    }
}
?>
