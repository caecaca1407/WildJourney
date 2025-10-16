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
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard - Taman Safari Indonesia</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body {
    background-color: #f4f7f3;
    font-family: 'Poppins', sans-serif;
}
.navbar {
    background: linear-gradient(to right, #1b5e20, #388e3c);
}
.navbar-brand, .nav-link, .navbar-text {
    color: #fff !important;
}
.nav-link:hover {
    color: #ffeb3b !important;
}
.hero {
    background: url('bg1.jpg') center/cover no-repeat;
    color: white;
    text-align: left;
    padding: 150px 60px;
    position: relative;
}
.hero::after {
    content: '';
    position: absolute;
    top:0; left:0; right:0; bottom:0;
    background: rgba(0,0,0,0.5);
}
.hero-content {
    position: relative;
    z-index: 1;
    max-width: 650px;
}
.hero h2 {
    font-size: 2.8em;
    color: #ffeb3b;
}
.hero p {
    font-size: 1.2em;
    margin: 15px 0;
}
.btn-custom {
    background-color: #43a047;
    color: white;
    border-radius: 30px;
    font-weight: 600;
}
.btn-custom:hover {
    background-color: #66bb6a;
}
.feature img {
    width: 80px;
}
footer {
    background-color: #1b5e20;
    color: white;
    text-align: center;
    padding: 25px 10px;
}
footer a {
    color: #ffeb3b;
    text-decoration: none;
}
footer a:hover {
    color: white;
}
.floating-ticket-btn {
    position: fixed;
    right: 20px;
    bottom: 50%;
    transform: translateY(50%);
    background-color: #ff9800;
    color: white;
    padding: 14px 20px;
    border-radius: 50px 0 0 50px;
    font-weight: bold;
    text-decoration: none;
    box-shadow: 0 4px 10px rgba(0,0,0,0.3);
}
.floating-ticket-btn:hover {
    background-color: #e68900;
}
</style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container-fluid px-4">
    <a class="navbar-brand fw-bold" href="#">🌿 Taman Safari Indonesia</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navLinks">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navLinks">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="dashboard.php">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="TicketForm.php">Pesan Tiket</a></li>
        <li class="nav-item"><a class="nav-link" href="#fitur">Fitur Safari</a></li>
        <li class="nav-item"><a class="nav-link" href="#penginapan">Penginapan</a></li>
      </ul>
      <span class="navbar-text me-3">👤 <?= $_SESSION['user'] ?></span>
      <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="hero-content">
    <h2>🌞 Nikmati Keindahan Safari Siang!</h2>
    <p>Temui berbagai satwa liar, atraksi menarik, dan pengalaman seru di bawah sinar matahari!</p>
    <a href="#safari-siang" class="btn btn-custom">Lihat Aktivitas Safari Siang</a>
  </div>
</section>

<a href="TicketForm.php" class="floating-ticket-btn">🎟️ Pesan Tiket</a>

<!-- FITUR SAFARI -->
<section class="py-5 bg-white" id="fitur">
  <div class="container text-center">
    <h2 class="mb-4 text-success fw-bold">🌴 Aktivitas Seru di Taman Safari</h2>
    <div class="row g-4">
      <div class="col-md-3 feature">
        <img src="https://cdn-icons-png.flaticon.com/512/616/616408.png" alt="">
        <h5 class="mt-3 text-success">Safari Journey</h5>
        <p>Rasakan sensasi berkeliling melihat hewan-hewan liar dari berbagai benua secara langsung!</p>
      </div>
      <div class="col-md-3 feature">
        <img src="https://cdn-icons-png.flaticon.com/512/2762/2762165.png" alt="">
        <h5 class="mt-3 text-success">Animal Show</h5>
        <p>Tonton pertunjukan edukatif dan lucu dari gajah, lumba-lumba, burung, dan lainnya.</p>
      </div>
      <div class="col-md-3 feature">
        <img src="https://cdn-icons-png.flaticon.com/512/1085/1085903.png" alt="">
        <h5 class="mt-3 text-success">EduCamp</h5>
        <p>Belajar tentang konservasi dan kehidupan satwa langsung dari ahlinya.</p>
      </div>
      <div class="col-md-3 feature">
        <img src="https://cdn-icons-png.flaticon.com/512/807/807241.png" alt="">
        <h5 class="mt-3 text-success">Theme Park</h5>
        <p>Nikmati wahana seru seperti roller coaster, bumper car, dan bianglala!</p>
      </div>
    </div>
  </div>
</section>

<!-- SAFARI SIANG -->
<section class="container my-5 p-4 bg-white rounded shadow" id="safari-siang">
  <div class="row align-items-center">
    <div class="col-md-6">
      <img src="https://domestic.tamansafaribogor.com/assets/images/safari-siang.jpg" class="img-fluid rounded" alt="Safari Siang">
    </div>
    <div class="col-md-6">
      <h3 class="text-success">🌿 Safari Siang – Petualangan Alam yang Tak Terlupakan</h3>
      <p>Jelajahi keindahan alam Taman Safari di siang hari! Saksikan hewan-hewan dari lima benua dalam habitat alami mereka.</p>
      <ul>
        <li>Tur berkeliling melihat hewan liar dari dekat</li>
        <li>Pertunjukan edukasi dan interaktif</li>
        <li>Area bermain anak dan restoran tematik</li>
        <li>Spot foto Instagramable di alam terbuka</li>
      </ul>
      <a href="order.php" class="btn btn-success mt-3">🎫 Beli Tiket Sekarang</a>
    </div>
  </div>
</section>

<!-- PENGINAPAN -->
<section class="py-5 bg-light" id="penginapan">
  <div class="container">
    <h2 class="text-center text-success mb-4 fw-bold">🏡 Penginapan di Dalam Safari</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card shadow">
          <img src="https://www.tamansafaribogor.com/wp-content/uploads/2020/01/Royal-Safari-Garden.jpg" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title text-success">Royal Safari Garden</h5>
            <p class="card-text">Resor keluarga dengan taman hijau luas dan suasana alami.</p>
            <a href="royal_safari.php" class="btn btn-success btn-sm">Lihat Detail</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow">
          <img src="https://www.tamansafaribogor.com/wp-content/uploads/2020/01/Safari-Resort.jpg" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title text-success">Safari Resort</h5>
            <p class="card-text">Menginap di tengah hutan tropis dengan pemandangan satwa liar.</p>
            <a href="safari_resort.php" class="btn btn-success btn-sm">Lihat Detail</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow">
          <img src="https://www.tamansafaribogor.com/wp-content/uploads/2020/01/Baobab-Hotel.jpg" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title text-success">Baobab Safari Resort</h5>
            <p class="card-text">Pengalaman menginap unik bergaya Afrika modern dengan view satwa eksotis.</p>
            <a href="baobab_safari_resort.php" class="btn btn-success btn-sm">Lihat Detail</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <p>© <?= date('Y') ?> Taman Safari Indonesia | Dikembangkan oleh <strong><?= $_SESSION['user'] ?></strong></p>
  <div>
    <a href="#">Instagram</a> | 
    <a href="#">Facebook</a> | 
    <a href="#">YouTube</a>
  </div>
</footer>

</body>
</html>
