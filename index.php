<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>XPTO</title>
        <link rel="stylesheet" href="css/main_style.css" />
    </head>
    <body>
        <?php
        $cliente1 = "Marcio Marins";
        $cliente2 = "Kelly Fernanda";
        $cliente3 = "Carlos André";
        //setcookie("cli1", $cliente1);
        // setcookie("cli2", $cliente2);
        //ssetcookie("cli3", $cliente3);
        ?>
        <div class="container clearfix">
            <?php include "header.php"; ?>
            <section class="content" >
                <span class="aviso">
                    <?php
                    if (filter_input(INPUT_GET, "erro")) {
                        $e = filter_input(INPUT_GET, "erro");

                        if ($e == "1") {
                            echo "Login ou senha incorretos!";
                        }
                        if ($e == "2") {
                            echo "Você precisa estar logado para acessar esta área";
                        }
                    }
                    ?>
                </span>
                <?php
                if (filter_input(INPUT_GET, "sessao")):
                    $pg = filter_input(INPUT_GET, "sessao");
                    switch ($pg) {
                        case "1":
                            include "home.php";
                            break;
                        case "2":
                            include "clientes.php";
                            break;

                        case "3":
                            include "admin.php";
                            break;
                        case "4":
                            include "cadastro.php";
                            break;
                        /* case "5":
                          include "fale.php";
                          break; */
                    }
                else:
                    include 'home.php';
                    $pg = "";
                endif;
                ?>
            </section>
            <?php include "footer.php"; ?>
        </div>
    </body>
</html>