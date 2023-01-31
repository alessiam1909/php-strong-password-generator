<?php

include __DIR__. "./functions.php";


session_start();
$_SESSION["numero"] = $_GET["numero"];
if(empty($_SESSION['numero'])){
    header("Location:./index.php");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>La tua password</title>
</head>
<body>
    <div class="container">
        <div class="box-bianco">
            <h3>La tua password è :  <?php echo generaPassword($_GET["numero"]);?></h3>
        </div>
    </div>
</body>
</html>