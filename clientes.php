<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/main_style.css" />
    </head>
    <body>
        <h1>NOSSOS CLIENTES</h1>
        <?php
        if (isset($_COOKIE["cli1"])? $_COOKIE["cli1"]:null);
        if (isset($_COOKIE["cli2"])? $_COOKIE["cli2"]:null);
        if (isset($_COOKIE["cli3"])? $_COOKIE["cli3"]:null);
        $cliente = array($cliente1, $cliente2, $cliente3);
        foreach ($cliente as $listar) {
            echo $listar . "<br />";
        }
        ?>
    </body>
</html>
