<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST["email"];
    $name = $_POST["name"]; // Replace "name" with the actual input name attribute for "Nome"
    $phone = $_POST["phone"]; // Replace "phone" with the actual input name attribute for "Telefone"
    $segmento = $_POST["segmento"]; // Replace "segmento" with the actual input name attribute for "Segmento da Empresa"
    $faturamento = $_POST["faturamento"]; // Replace "faturamento" with the actual input name attribute for "Faturamento Mensal"
    $message = $_POST["message"]; // Replace "message" with the actual input name attribute for the textarea

    // Email parameters
    $to = "recipient@example.com"; // Replace with the recipient's email address
    $subject = "Contato do Formulário";
    $headers = "From: $email";

    // Compose the email message
    $email_message = "Nome: $name\n";
    $email_message .= "E-mail: $email\n";
    $email_message .= "Telefone: $phone\n";
    $email_message .= "Segmento da Empresa: $segmento\n";
    $email_message .= "Faturamento Mensal: $faturamento\n";
    $email_message .= "Mensagem:\n$message";

    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        
       header("location: obrigado.html");

    } else {
        echo "Ocorreu um erro ao enviar o e-mail.";
    }
}

?>
