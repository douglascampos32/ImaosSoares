<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $item = $_POST['item'];
    $peso_bruto = (float) $_POST['pesoBruto'];
    $tara = (float) $_POST['tara'];
    $peso_liquido = $peso_bruto - $tara;

    if (strtolower($item) === 'lata -4%') {
        $peso_liquido *= 0.96; // Desconto de 4% para latas
    }

    $stmt = $pdo->prepare("INSERT INTO produtos (item, peso_bruto, tara, peso_liquido) VALUES (:item, :peso_bruto, :tara, :peso_liquido)");
    $stmt->execute([
        ':item' => $item,
        ':peso_bruto' => $peso_bruto,
        ':tara' => $tara,
        ':peso_liquido' => $peso_liquido,
    ]);

    header('Location: index.php'); // Redirecionar de volta para a página principal
    exit();
}
?>
