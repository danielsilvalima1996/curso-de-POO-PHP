<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Caneta.php';
            
            $c1 = new Caneta("BIC", "PRETA",0.7);
            $c2 = new Caneta("Compactor", "Azul", 1.0);
            
            print ("Daniel é " . $c2->getModelo());
        ?>
        </pre>
    </body>
</html>
