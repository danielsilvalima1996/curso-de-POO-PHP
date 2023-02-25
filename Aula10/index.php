<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require_once 'Funcionario.php';
            require_once 'Professor.php';
            
            $p = array();
            $p[0] = new Pessoa("Daniel", 21, "M");
            $p[1] = new Aluno("Bruna", 16, "F", 121952014, true, "Logística");
            $p[2] = new Funcionario("Eduardo", 20, "M", "Tutoria", true);
            $p[3] = new Professor("Sofia", 32, "F", "TI", 3500);
            
            $p[3]->receberAum(800);
            $p[1]->cancelarMatr();
            $p[0]->fazerAniv();
            $p[2]->fazerAniv();
            $p[2]->mudarTrabalho();
            $p[2]->mudarTrabalho();
            
            print_r($p);
        ?>
        </pre>
    </body>
</html>
