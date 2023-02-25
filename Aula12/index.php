<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Mamifero.php';
            require_once 'Reptil.php';
            require_once 'Peixe.php';
            require_once 'Ave.php';
            require_once 'Canguru.php';
            require_once 'Cachorro.php';
            require_once 'Cobra.php';
            require_once 'Tartaruga.php';
            require_once 'GoldFish.php';
            require_once 'Arara.php';
            
            $m = new Mamifero();
            $m->setPeso(15.6);
            $m->setIdade(5);
            $m->setMembros(4);
            $m->setCorPelo("Marrom");
            //$m->locomover();
            //print_r($m);
            
            $r = new Reptil();
            $r->setPeso(1);
            $r->setIdade(3);
            $r->setMembros(4);
            $r->setCorEscama("Cinza");
            //$r->alimentar();
            //print_r($r);
            
            $p = new Peixe();
            $p->setPeso(0.2);
            $p->setIdade(0.5);
            $p->setMembros(0);
            $p->setCorEscama("Prata");
            //$p->emitirSom();
            //print_r($p);
            
            $a = new Ave();
            $a->setPeso(1.3);
            $a->setIdade(1);
            $a->setMembros(4);
            $a->setCor("Azul e Amarelo");
            //$a->fazerNinho();
            //print_r($a);
            
            $guru = new Canguru();
            $guru->setPeso(87);
            $guru->setIdade(8);
            $guru->setMembros(4);
            $guru->setCorPelo("Bege");
            //$guru->locomover();
            //print_r($guru);
            
            $dog = new Cachorro();
            $dog->setPeso(24.6);
            $dog->setIdade(5);
            $dog->setMembros(4);
            $dog->setCorPelo("Branco e Marrom");
            //$dog->emitirSom();
            //$dog->abanarRabo();
            //print_r($dog);
            
            $c = new Cobra();
            $c->setPeso(23.4);
            $c->setIdade(12);
            $c->setMembros(0);
            $c->setCorEscama("Dourada e branca");
            //print_r($c);
            
            $t = new Tartaruga();
            $t->setPeso(150);
            $t->setIdade(89);
            $t->setMembros(4);
            $t->setCorEscama("Verde Musgo");
            //$t->locomover();
            //print_r($t);
            
            $gd = new GoldFish();
            $gd->setIdade(3);
            $gd->setMembros(0);
            $gd->setPeso(0,1);
            //$gd->setCorEscama("Dourado");
            //print_r($gd);
            
            $ar = new Arara();
            $ar->setCor("Azul e Dourada");
            $ar->setIdade(4);
            $ar->setMembros(2);
            $ar->setPeso(0.25);
            //print_r($ar);

        ?>
        </pre>
    </body>
</html>
