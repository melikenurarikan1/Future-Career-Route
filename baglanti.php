<?php
$servername = "localhost"; // Sunucu adı
$username = "root";        // Veritabanı kullanıcı adı
$password = "";            // Veritabanı şifresi (Boşsa "")
$dbname = "yazilim_analizi"; // Veritabanı adı

// Bağlantıyı oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
?>
