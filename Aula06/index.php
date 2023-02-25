<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <h1>Projeto Controle Remoto</h1>
        <?php
            require_once 'ControleRemoto.php';
            $c = new ControleRemoto();
            $c->ligar();
            $c->abrirMenu();
            $c->maisVolume();
            $c->abrirMenu();
            $c->menosVolume();
            $c->menosVolume();
            $c->abrirMenu();
            $c->desligar();
            $c->abrirMenu();
        ?>
        </pre>
    </body>
</html>
