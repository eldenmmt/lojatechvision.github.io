<?php
$to      = Config::EMAIL_USER;
$subject = $_GET['txtinputassunto'];
$message = 'Email de ' . $_GET['txtinputnome'] . "\r\n" . $_GET['txtinputarea'];
$dest = $_GET['txtinputemail'];

$headers = "From: " . $dest;

mail($to, $subject, $message, $headers);
?>


<script>alert('Email enviado com Sucesso!')</script>
<meta http-equiv="refresh" content="0; url=contacto">