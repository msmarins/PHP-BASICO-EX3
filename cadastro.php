<?php
session_start();
if ($_SESSION["login"] == "") {
    header("location:index.php?sessao=3&erro=2");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/main_style.css" />
    </head>
    <body>
        <h1>Seja bem-vindo(a) <?php echo $_SESSION["login"]; ?></h1><br />
        <h3>CLIENTES CADASTRADOS</h3>
        <?php
        if (isset($_COOKIE["cli1"]) ? $_COOKIE["cli1"] : null);
        if (isset($_COOKIE["cli2"]) ? $_COOKIE["cli2"] : null);
        if (isset($_COOKIE["cli3"]) ? $_COOKIE["cli3"] : null);
        $cliente = array($cliente1, $cliente2, $cliente3);
        foreach ($cliente as $listar) {
            echo $listar . "<br />";
        }
        ?>
        <form method="post" action="autenticar.php">
            <fieldset>
                <legend>CADASTRO DE NOVOS CLIENTES</legend>
                <label for="nome">NOME</label>
                <input type="text" value="" name="nome" id="nome" size="30"/><br />
                <label for="email">E-MAIL</label>
                <input type="text" value="" name="email" id="email" size="30"/><br />
                <input type="submit" value="cadastrar"/>
            </fieldset>
        </form>
    </body>
</html>
