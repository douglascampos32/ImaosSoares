<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $para = "email@suaempresa.com.br"; // E-mail que receberá a mensagem
    $assunto = "Nova Mensagem do Site GTA SUCATAS";

    $corpo = "Nome: " . $nome . "\n";
    $corpo .= "Email: " . $email . "\n";
    $corpo .= "Mensagem: " . $mensagem . "\n";

    // Para o e-mail ser enviado no formato HTML, você pode ajustar os headers
    $headers = "From: " . $email;

    if (mail($para, $assunto, $corpo, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Houve um erro ao enviar o e-mail.";
    }
}
?>