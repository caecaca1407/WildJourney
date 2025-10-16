<?php
class Ticket {
    private $conn;
    private $table = "tickets";

    public $id;
    public $nama_pengunjung;
    public $tanggal_kunjungan;
    public $jumlah_tiket;
    public $harga_per_tiket = 80000; // harga tiket
    public $total_harga;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function orderTicket() {
        $this->total_harga = $this->jumlah_tiket * $this->harga_per_tiket;
        $query = "INSERT INTO " . $this->table . " 
            (nama_pengunjung, tanggal_kunjungan, jumlah_tiket, total_harga)
            VALUES (:nama_pengunjung, :tanggal_kunjungan, :jumlah_tiket, :total_harga)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nama_pengunjung", $this->nama_pengunjung);
        $stmt->bindParam(":tanggal_kunjungan", $this->tanggal_kunjungan);
        $stmt->bindParam(":jumlah_tiket", $this->jumlah_tiket);
        $stmt->bindParam(":total_harga", $this->total_harga);
        return $stmt->execute();
    }
}
?>
