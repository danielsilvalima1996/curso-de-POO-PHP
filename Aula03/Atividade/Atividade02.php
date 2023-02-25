<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mouse</title>
    </head>
    <body>
        <?php
            echo "Mouse ";
            require 'Mouse.php';          
            $m1 = new Mouse();            
            $m1->marca = "Multilaser";
            $m1->modelo = "TC 162";
            $m1->conexao = "Sem fio";
            $m1->leitor = "Óptico";            
            $m1->sit = true;            
            $m1->cligar();
            var_dump($m1);
        ?>
    </body>
</html>
