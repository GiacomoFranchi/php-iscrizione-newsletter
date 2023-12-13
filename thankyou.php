<?php

    include __DIR__ . '/functions.php';

    session_start();
    var_dump($_SESSION['addMail'])
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Iscrizione Newsletter</title>
</head>
<body>
    <h1>Registrazione avvenuta con successo</h1>
    <h2>Grazie per aver scelto la nostra newsletter</h2>
    <h3>La tua mail: <?php echo $_SESSION['addMail'] ?> è stata registrata!</h3>
</body>
</html>