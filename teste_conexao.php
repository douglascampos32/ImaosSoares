<?php
include 'config.php';

try {
    $stmt = $pdo->query("SELECT version()");
    $version = $stmt->fetch();
    echo "Conectado ao PostgreSQL com sucesso: " . $version[0];
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
