<?php
session_start();
echo "<h2>Terima kasih, " . $_SESSION['user'] . "!</h2>";
echo "<p>Pemesanan Anda sedang diproses.</p>";
?>
<a href='order.php'>Kembali</a>
