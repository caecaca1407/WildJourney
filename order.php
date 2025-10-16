<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

require_once "../config/Database.php";
require_once "../classes/Ticket.php";

$db = new Database();
$conn = $db->connect();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ticket = new Ticket($conn);
    $ticket->nama_pengunjung = $_SESSION['user'];
    $ticket->tanggal_kunjungan = $_POST['tanggal'];
    $ticket->jumlah_tiket = $_POST['jumlah'];

    if ($ticket->orderTicket()) {
        echo "<script>alert('Pemesanan berhasil!'); window.location='invoice.php';</script>";
    } else {
        echo "<script>alert('Gagal memesan tiket!');</script>";
    }
}
?>

<h2>Pesan Tiket Taman Safari</h2>
<form method="POST">
    <label>Tanggal Kunjungan:</label><br>
    <input type="date" name="tanggal" required><br>
    <label>Jumlah Tiket:</label><br>
    <input type="number" name="jumlah" min="1" required><br>
    <button type="submit">Pesan Sekarang</button>
</form>

<a href="logout.php">Logout</a>
