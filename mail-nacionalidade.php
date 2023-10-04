<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Get form data
    $email = $_POST["email"];
    $name = $_POST["name"]; // Replace "name" with the actual input name attribute for "Nome"
    $phone = $_POST["telefone"]; // Replace "phone" with the actual input name attribute for "Telefone" // Replace "faturamento" with the actual input name attribute for "Faturamento Mensal"
    $ascendente = $_POST["ascendente"]; // Replace "phone" with the actual input name attribute for "Telefone" // Replace "faturamento" with the actual input name attribute for "Faturamento Mensal"
    $message = $_POST["message"]; // Replace "message" with the actual input name attribute for the textarea

    // Email parameters
    $to = "administrativo@bga-adv.com"; // Replace with the recipient's email address
    $subject = "Contato do Formulário";
    $headers = "From: $email";

    // Compose the email message
    $email_message = "Nome: $name\n";
    $email_message .= "E-mail: $email\n";
    $email_message .= "Telefone: $phone\n";
    $email_message .= "Segmento da Empresa: $ascendente\n";
    $email_message .= "Mensagem:\n$message";

    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        
       header("location: obrigado.html");

    } else {
        echo "Ocorreu um erro ao enviar o e-mail.";
    }
}

?>
