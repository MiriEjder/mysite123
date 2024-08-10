<?php
// Veritabanı bağlantı bilgileri
$host = 'aws-0-eu-central-1.pooler.supabase.com';
$dbname = 'postgres';
$user = 'postgres.kukdmrswdjzdxxqktzli';
$pass = '*5vMCmnt6bCaz8p';
$port = 6543;

try {
    // PDO ile PostgreSQL veritabanına bağlanma
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $pdo = new PDO($dsn, $user, $pass);

    // Hata modunu ayarla
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Veritabanına başarıyla bağlanıldı!";
} catch (PDOException $e) {
    // Hata mesajını göster
    echo "Bağlantı hatası: " . $e->getMessage();
}
?>
