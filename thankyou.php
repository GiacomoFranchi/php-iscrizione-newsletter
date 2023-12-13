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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PHP Iscrizione Newsletter</title>
</head>
<body>
    <div class="text-center">
        <h1 class="text-success">Registrazione avvenuta con successo</h1>
        <h2>Grazie per aver scelto la nostra newsletter</h2>
        <h3 class="alert alert-success">La tua mail: <?php echo $_SESSION['addMail'] ?> è stata registrata!</h3>
    </div>
</body>
</html>