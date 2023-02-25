<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>        
        <?php           
            require_once 'Visitante.php';
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Bolsista.php';
            require 'Tecnico.php';
            
            $v = array();
            $v[0] = new Aluno("Emelly", 17, "F", "Gestão Empresarial", 214562016);
            //$v[0]->pagarMensalidade();
            $v[1] = new Bolsista("Maria", 39, "F", "Linguas", 42692016, 50);
            $v[2] = new Tecnico("Pedro", 22, "M", "Redes de Computador", 69242017, true);
            //$v[2]->praticar();
            $v[3] = new Bolsista("Daniel", 21, "M", "Logística", 121952014, 50);
            //$v[3]->renovarBolsa();
            //$v[3]->pagarMensalidade();
            $v[4] = new Professor("Alexandrone", 53, "M", "Matemática", 2500);
            //$v[4]->receberSalario();
            $v[5] = new Tecnico("Robertinho", 52, "M", "Eletricista", 56322017, true);
            $v[5]->praticar();
            
            print_r($v);
        ?>
        </pre>
    </body>
</html>
