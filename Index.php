<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Marketing</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Bienvenue sur notre site marketing!</h1>
    <h2>Contactez-nous</h2>
    <form action="contact.php" method="post">
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
