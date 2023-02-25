<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'AcoesVideo.php';
            require_once 'Video.php';
            require_once 'Gafanhoto.php';
            require_once 'Visualizacao.php';;
            
            $v = array();
            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 12 de PHP");
            $v[2] = new Video("Aula 15 de HTML");
            
            $g[0] = new Gafanhoto("Daniel", 21, "M", "danielsilvalima");
            $g[1] = new Gafanhoto("Emelly", 17, "F", "emelly");
            
            $vis[0] = new Visualizacao($g[0], $v[2]);
            $vis[1] = new Visualizacao($g[0], $v[2]);
            $vis[0]->avaliarNota(10);
            $vis[2] = new Visualizacao($g[1], $v[2]);
            $vis[3] = new Visualizacao($g[1], $v[2]);
            $vis[4] = new Visualizacao($g[1], $v[2]);
            print_r($vis);
        ?>
        </pre>
    </body>
</html>
