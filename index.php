<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="css.css">
</head>
<body>

    <?php

    if(!isset($_SESSION['login'])){

        if(isset($_POST['send'])){
            echo 'formulario enviado'
        }


        include('login.php');
    }
    else{
        include('home.php');
    }


    ?>

</body>
</html>