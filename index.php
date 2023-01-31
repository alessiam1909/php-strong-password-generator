<?php 

function generaPassword($numero){
    $caratteri = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;':\"<>,.?/\\";
    $password= "";
    for($i = 0; $i < $numero; $i++){
        $password .= $caratteri[rand(0, strlen($caratteri) - 1 )];

    }

    return $password;
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Password Generator</title>
</head>
<body>
    <div class="container">
        <h1>Strong Password Generator </h1>
        <h2>Genera una password sicura</h2>
        <div class="box-blu">

        </div>
        <div class="box-bianco">
            <form action="./index.php" method="GET">
                <p>Lunghezza password: <input type="number" placeholder="Inserisci la lunghezza della password" name="numero"></p>
                <button type="submit" class="invia">Invia</button>
                <button type="submit" class="annulla">Annulla</button>
            </form>
            <h3>La tua password è : <?php echo generaPassword($_GET["numero"]) ?></h3>
        </div>
    </div>
</body>
</html>