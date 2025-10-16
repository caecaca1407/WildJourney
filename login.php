<?php
session_start();
require_once "../config/Database.php";
require_once "../classes/User.php";
$db = new Database();
$conn = $db->connect();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = new User($conn);
    $user->username = $_POST['username'];
    $user->password = $_POST['password'];
    $login = $user->login();
    if ($login) {
        $_SESSION['user'] = $login['username'];
        header("Location: dashboard.php");
        exit;
    } else {
        echo "<script>alert('Login gagal! Username atau password salah.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Pemesanan Tiket Taman Safari</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 400px;">
        <div class="card-body text-center">
            <h3 class="mb-4">Login</h3>
            <form method="POST">
                <input type="text" class="form-control mb-3" name="username" placeholder="Username" required>
                <input type="password" class="form-control mb-3" name="password" placeholder="Password" required>
                <button class="btn btn-success w-100" type="submit">Login</button>
            </form>
            <p class="mt-3">Belum punya akun? <a href="register.php">Daftar</a></p>
        </div>
    </div>
</div>
</body>
</html>
