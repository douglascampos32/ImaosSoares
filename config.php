<?php
$host = "deliciously-intrigued-bull.data-1.use1.tembo.io";
$dbname = "postgres";
$user = "postgres";
$pass = "yRlb1qmxkTgMYBVg";

try {
    $pdo = new PDO("pgsql:host=$host;port=5432;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
    die();
}
?>
