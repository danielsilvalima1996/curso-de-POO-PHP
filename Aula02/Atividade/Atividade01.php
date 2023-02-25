<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Planejar Voos</title>
    </head>
    <body>
        <?php
            require 'PlanejarVoos.php';
            echo "Planejar Voos</br>";
            $voo1 = new PlanejarVoos();
            $voo1->base = "GIG";
            $voo1->cia = "Emirates";
            $voo1->nvoo = 248;
            $voo1->destino = "EZE";
            $voo1->inicio = "01/02/17";
            $voo1->fim = "15/02/17";
            print_r($voo1);
            echo '</br>';
            $voo2 = new PlanejarVoos();
            $voo2->base = "NAT";
            $voo2->cia = "TAP";
            $voo2->destino = "LIS";
            $voo2->nvoo = "07/04";
            $voo2->inicio = "01/01";
            $voo2->fim = "15/01";
            print_r($voo2);
        ?>
    </body>
</html>
