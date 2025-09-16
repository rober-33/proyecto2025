<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    $to = "contacto@jaguadeibirico.com"; // Cambia esto por tu correo
    $subject = "Nuevo mensaje de Jagua Visión 360";
    $body = "Nombre: $nombre\nCorreo: $email\n\nMensaje:\n$mensaje";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "✅ Mensaje enviado correctamente.";
    } else {
        echo "❌ Error al enviar el mensaje. Intenta de nuevo.";
    }
}
?>