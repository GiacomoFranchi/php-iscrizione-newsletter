<?php 

    include __DIR__ . '/functions.php';



    if(isset($_GET['mail'])) {
        session_start();
        $_SESSION['addMail'] = $_GET['mail'];
        $user_mail = $_GET['mail'];
        $check_mail = checkMail($user_mail);
        $alert_msg = alertMsg($check_mail);

        }else{
            $check_mail = "";
            $alert_msg = "";
        };

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
    <section class="text-center">
        <h1>Iscrizione Newsletter</h1>
        <form action="index.php" method="GET" class="d-flex flex-column justify-content-center">
            <div class="d-flex flex-column justify-content-center">
                <label for="mail">Inserisci la tua mail per registrarti</label>
                <input class="w-25 m-auto my-2" name="mail" type="text" placeholder="esempio@es.es">
            </div>
            <div>
                <button type="submit">Invia</button>
            </div>
        </form>
    </section>
    <section>
        <h2 class="<?php echo $alert_msg ?> w-75 m-auto my-2 text-center"> <?php echo $check_mail ?> </h2>
    </section>
</body>
</html>