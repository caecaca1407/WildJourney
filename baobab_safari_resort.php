<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Baobab Safari Resort - Taman Safari Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand fw-bold" href="dashboard.php">Taman Safari Indonesia</a>
    <div class="d-flex">
      <a href="logout.php" class="btn btn-light">Logout</a>
    </div>
  </div>
</nav>

<!-- KONTEN -->
<div class="container mt-5 mb-5">
  <div class="text-center mb-5">
    <h2 class="fw-bold">🏨 Baobab Safari Resort</h2>
    <p class="text-muted">Taman Safari Prigen, Pasuruan, Jawa Timur</p>
  </div>

  <div class="row mb-4">
    <div class="col-md-6 mb-3">
      <img src="https://www.tamansafariprigen.com/wp-content/uploads/2021/03/Baobab-Safari-Resort-1.jpg" class="img-fluid rounded shadow-sm" alt="Baobab Safari Resort">
    </div>
    <div class="col-md-6 mb-3">
      <img src="https://www.tamansafariprigen.com/wp-content/uploads/2021/03/Baobab-Safari-Resort-2.jpg" class="img-fluid rounded shadow-sm" alt="Baobab View">
    </div>
  </div>

  <div class="card shadow-sm border-0 p-4 mb-4">
    <h4 class="text-success">🌿 Deskripsi Umum</h4>
    <p class="mt-3">
      Baobab Safari Resort adalah hotel bernuansa Afrika modern yang terletak di kawasan Taman Safari Prigen, Pasuruan, Jawa Timur. 
      Dikelola langsung oleh Taman Safari Indonesia Group, resort ini menghadirkan pengalaman menginap mewah di tengah alam liar 
      dengan pemandangan satwa seperti jerapah, zebra, dan rusa yang bisa dilihat langsung dari balkon kamar.
    </p>
    <p>
      Mengusung konsep <em>“Experience Africa in Java”</em>, Baobab Safari Resort menjadi salah satu destinasi unik di Indonesia 
      yang menggabungkan kenyamanan hotel berbintang dengan sensasi safari Afrika.
    </p>
  </div>

  <div class="card shadow-sm border-0 p-4 mb-4">
    <h4 class="text-success">🏡 Fasilitas Utama</h4>
    <ul class="mt-3">
      <li>🦒 <b>Pemandangan langsung satwa liar Afrika</b></li>
      <li>🏊‍♀️ <b>Infinity Pool</b> dengan panorama gunung dan satwa</li>
      <li>🍽️ <b>Baobab Restaurant</b> – Menyajikan kuliner khas Nusantara dan internasional</li>
      <li>☕ <b>Outdoor Lounge & Bar</b></li>
      <li>🏕️ <b>Feeding Giraffe & Night Safari Experience</b></li>
      <li>🎠 <b>Kids Playground & Mini Zoo</b></li>
      <li>💆‍♀️ <b>Spa & Wellness Center</b></li>
      <li>🏞️ <b>Dek observasi</b> untuk melihat satwa di alam terbuka</li>
    </ul>
  </div>

  <div class="card shadow-sm border-0 p-4 mb-5">
    <h4 class="text-success">🛏️ Tipe Kamar</h4>
    <ul class="mt-3">
      <li><b>Superior Room</b> – Cocok untuk 2 orang, pemandangan taman.</li>
      <li><b>Deluxe Room</b> – Dilengkapi balkon menghadap satwa.</li>
      <li><b>Junior Suite</b> – Kamar luas dengan ruang tamu dan view terbaik.</li>
      <li><b>Family Room</b> – Ideal untuk keluarga, kapasitas hingga 4 orang.</li>
    </ul>
    <p class="mt-3">
      Semua kamar dilengkapi dengan TV layar datar, AC, balkon pribadi, kamar mandi modern dengan air panas, dan akses Wi-Fi gratis.
    </p>
  </div>

  <div class="text-center">
    <a href="dashboard.php" class="btn btn-success px-4">⬅️ Kembali ke Dashboard</a>
  </div>
</div>

<!-- FOOTER -->
<footer class="bg-success text-white text-center py-3 mt-5">
  <p class="mb-0">© 2025 Taman Safari Indonesia | Baobab Safari Resort</p>
</footer>

</body>
</html>
