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
    <title>Safari Resort - Taman Safari Indonesia</title>
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
    <h2 class="fw-bold">🏨 Safari Resort</h2>
    <p class="text-muted">Kawasan Taman Safari Indonesia, Cisarua – Bogor</p>
  </div>

  <div class="row mb-4">
    <div class="col-md-6 mb-3">
      <img src="https://www.tamansafaribogor.com/wp-content/uploads/2020/01/Safari-Resort-1.jpg" class="img-fluid rounded shadow-sm" alt="Safari Resort">
    </div>
    <div class="col-md-6 mb-3">
      <img src="https://www.tamansafaribogor.com/wp-content/uploads/2020/01/Safari-Resort-2.jpg" class="img-fluid rounded shadow-sm" alt="Safari Resort Area">
    </div>
  </div>

  <div class="card shadow-sm border-0 p-4 mb-4">
    <h4 class="text-success">🌿 Deskripsi Umum</h4>
    <p class="mt-3">
      Safari Resort adalah penginapan eksklusif yang berada di dalam kawasan Taman Safari Indonesia, Cisarua – Bogor. 
      Dikelola langsung oleh pihak Taman Safari, resort ini menawarkan pengalaman menginap di tengah hutan dengan pemandangan 
      satwa liar yang hanya dipisahkan oleh kaca atau pagar alami.
    </p>
    <p>
      Resort ini sangat populer karena memberikan nuansa alami, tenang, dan edukatif, cocok bagi keluarga, pasangan, maupun 
      wisatawan yang ingin menikmati sensasi menginap dekat satwa.
    </p>
  </div>

  <div class="card shadow-sm border-0 p-4 mb-4">
    <h4 class="text-success">🏡 Fasilitas Utama</h4>
    <ul class="mt-3">
      <li>🦓 <b>Pemandangan langsung ke habitat satwa liar</b></li>
      <li>🏡 <b>Beragam tipe kamar dan bungalow</b> dengan desain alami</li>
      <li>🍽️ <b>Restoran Nyaman</b> (Nyemil Café & Caravan Restaurant)</li>
      <li>🏕️ <b>Camping Ground & Caravan Area</b></li>
      <li>🏊‍♀️ <b>Kolam renang dan area bermain anak-anak</b></li>
      <li>🐘 <b>Interaksi satwa</b> seperti feeding dan elephant riding</li>
      <li>🎁 <b>Toko suvenir khas Taman Safari</b></li>
    </ul>
  </div>

  <div class="card shadow-sm border-0 p-4 mb-5">
    <h4 class="text-success">🛏️ Tipe Akomodasi</h4>
    <ul class="mt-3">
      <li>🌲 <b>Tree House (Rumah Pohon)</b> – Pengalaman menginap di atas pohon dengan pemandangan hutan.</li>
      <li>🏡 <b>Bungalow</b> – Kamar luas untuk keluarga, dikelilingi pepohonan rindang.</li>
      <li>🚐⛺ <b>Caravan & Camp Area</b> – Konsep glamping untuk yang ingin lebih dekat dengan alam.</li>
      <li>🏨 <b>Lodge Room</b> – Kamar hotel modern dengan balkon menghadap satwa.</li>
    </ul>
    <p>Semua tipe kamar dilengkapi dengan TV, AC, air panas, dan balkon pribadi.</p>
  </div>

  <div class="text-center">
    <a href="dashboard.php" class="btn btn-success px-4">⬅️ Kembali ke Dashboard</a>
  </div>
</div>

<footer class="bg-success text-white text-center py-3 mt-5">
  <p class="mb-0">© 2025 Taman Safari Indonesia | Safari Resort</p>
</footer>

</body>
</html>
