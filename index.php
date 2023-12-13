<?php 

    include __DIR__ . '/functions.php';

    
    if(isset($_GET['mail'])) {
        $user_mail = $_GET['mail'];
        echo $checkMail = checkMail($user_mail);
        }else{
            echo 'inserisci mail';
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Iscrizione Newsletter</title>
</head>

<body>
    <section>
        <h1>Iscrizione Newsletter</h1>
        <form action="index.php" method="GET">
            <div>
                <label for="mail">Inserisci la tua mail per registrarti</label>
                <input name="mail" type="text" placeholder="esempio@es.es">
            </div>
            <div>
                <button type="submit">Invia</button>
            </div>
        </form>
    </section>    
</body>
</html>