<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Ici, vous pouvez ajouter le code pour envoyer un e-mail ou enregistrer le message dans une base de données.
    echo "Merci, $name! Votre message a été reçu.";
}
?>
