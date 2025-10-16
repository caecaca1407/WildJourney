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
    <title>Royal Safari Garden - Taman Safari Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand fw-bold" href="dashboard.php">Taman Safari Indonesia</a>
    <div class="d-flex">
      <a href="logout.php" class="btn btn-light">Logout</a>
    </div>
  </div>
</nav>

<div class="container mt-5 mb-5">
  <div class="text-center mb-5">
    <h2 class="fw-bold">🏨 Royal Safari Garden</h2>
    <p class="text-muted">Kawasan Cisarua, Puncak, Bogor</p>
  </div>

  <div class="row mb-4">
    <div class="col-md-6 mb-3">
      <img src="https://www.tamansafaribogor.com/wp-content/uploads/2020/01/Royal-Safari-Garden.jpg" class="img-fluid rounded shadow-sm" alt="Royal Safari Garden">
    </div>
    <div class="col-md-6 mb-3">
      <img src="https://www.royalsafarigarden.com/images/homepage/royal1.jpg" class="img-fluid rounded shadow-sm" alt="Royal Safari Garden 2">
    </div>
  </div>

  <div class="card shadow-sm border-0 p-4 mb-4">
    <h4 class="text-success">🌿 Deskripsi Umum</h4>
    <p class="mt-3">
      Royal Safari Garden adalah salah satu resort keluarga terbaik yang berada di kawasan Cisarua, Puncak, Bogor,
      dikelola langsung oleh Taman Safari Indonesia. Tempat ini memadukan keindahan alam pegunungan, suasana tropis
      yang sejuk, dan nuansa satwa liar yang edukatif — menjadikannya destinasi ideal untuk liburan bersama keluarga.
    </p>
  </div>

  <div class="card shadow-sm border-0 p-4 mb-4">
    <h4 class="text-success">🏡 Fasilitas Utama</h4>
    <ul class="mt-3">
      <li>🐘 <b>Elephant Ride Area</b> – Pengunjung bisa berinteraksi langsung dengan gajah.</li>
      <li>🦜 <b>Bird Park & Rabbit Garden</b> – Tempat edukatif dengan berbagai satwa jinak.</li>
      <li>🏊‍♀️ <b>Kolam renang dengan seluncuran air</b></li>
      <li>🎠 <b>Fun Zone & Playground anak-anak</b></li>
      <li>🚴‍♀️ <b>Bike & ATV Rental</b></li>
      <li>🍽️ <b>Restoran dan kafe bernuansa alam</b></li>
      <li>🏕️ <b>Gazebo dan taman tematik</b> untuk bersantai</li>
    </ul>
  </div>

  <div class="card shadow-sm border-0 p-4 mb-5">
    <h4 class="text-success">🏠 Tipe Kamar</h4>
    <p class="mt-3">
      Royal Safari Garden menawarkan berbagai tipe kamar dan villa dengan tema satwa:
    </p>
    <ul>
      <li>🦒 Giraffe Suite</li>
      <li>🐧 Penguin Room</li>
      <li>🐘 Elephant Room</li>
      <li>🦎 Komodo Room</li>
      <li>💑 Couple Room</li>
      <li>👨‍👩‍👧 Family Room</li>
    </ul>
    <p>Semua kamar dilengkapi dengan TV, AC, balkon pribadi, dan akses Wi-Fi gratis.</p>
  </div>

  <div class="text-center">
    <a href="dashboard.php" class="btn btn-success px-4">⬅️ Kembali ke Dashboard</a>
  </div>
</div>

<footer class="bg-success text-white text-center py-3 mt-5">
  <p class="mb-0">© 2025 Taman Safari Indonesia | Royal Safari Garden</p>
</footer>

</body>
</html>