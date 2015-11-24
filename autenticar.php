<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        if (filter_input(INPUT_POST, "login")) {
            $user_form = filter_input(INPUT_POST, "login");
        }

        if (filter_input(INPUT_POST, "senha")) {
            $pass_form = filter_input(INPUT_POST, "senha");
        }

        function Autenticar($user, $pass) {
            $login = $user;
            $senha = $pass;
            $usuario = array("nome" => array(
                    "Carla",
                    "Jurema",
                    "Matias",
                ),
                "senha" => array(
                    "001",
                    "002",
                    "003",
                )
            );

            $cadastro = array($usuario["nome"][0] . $usuario["senha"][0], $usuario["nome"][1] . $usuario["senha"][1], $usuario["nome"][2] . $usuario["senha"][2]);

            if (in_array($login . $senha, $cadastro)) {
                session_start();
                $_SESSION["login"] = $login;
                header("location:index.php?sessao=4");
            } 
            
            else {
                header("location:index.php?sessao=3&erro=1");
            }
        }

        Autenticar($user_form, $pass_form);
        ?>
    </body>
</html>
