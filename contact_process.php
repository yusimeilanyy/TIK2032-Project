<?php
// Koneksi ke database
$host = 'localhost';
$dbname = 'portofolio';
$user = 'root'; // sesuaikan
$pass = '';     // sesuaikan

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

// Ambil data dari form
$name = $_POST['name'] ?? '';
$message = $_POST['message'] ?? '';

// Validasi sederhana
if (!empty($name) && !empty($message)) {
    $sql = "INSERT INTO contact (name, message) VALUES (:name, :message)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name, 'message' => $message]);

    // Simpan nama ke session agar bisa ditampilkan di sent.php (opsional)
    session_start();
    $_SESSION['name'] = $name;

    header("Location: sent.php");
    exit;
} else {
    echo "Nama dan pesan tidak boleh kosong!";
}