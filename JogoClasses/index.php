<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de classes</title>
</head>
<body>
    
    <?php
        require "Heroi.php";
        require "Vilao.php";
        use Heroi\Heroi;
        use Vilao\Vilao;

        $heroi = new Heroi("Peter", 20);
        $vilao = new Vilao("Smaugo", 50);
        $round = 0;

        while ($round == 0){
            $ataque_heroi = $heroi->atacar(12);
            $defesa_vilao = $vilao->defender(7);
            $pdv_vilao = $vilao->atualizar_pdv($ataque_heroi, $defesa_vilao);
            print "<h3>O heroi {$heroi->getName()} atacou e deu {$ataque_heroi} de dano</h3>";
            print "<h3>O vilao {$vilao->getName()} defendeu e deu {$defesa_vilao} de defesa</h3>";
            print "<h3>O vilao esta com {$vilao->getPdv()} de vida</h3><br>";

            $ataque_vilao = $vilao->atacar(10);
            $defesa_heroi = $heroi->defender(5);
            $pdv_heroi = $heroi->atualizar_pdv($ataque_vilao, $defesa_heroi);
            print "<h3>O vilao {$vilao->getName()} atacou e deu {$ataque_vilao} de dano</h3>";
            print "<h3>O heroi {$heroi->getName()} defendeu e deu {$defesa_heroi} de defesa</h3>";
            print "<h3>O heroi esta com {$heroi->getPdv()} de vida</h3><br>";

            if ($heroi->getPdv() <= 0 || $vilao->getPdv() <= 0){
                $round = 1;
            }
        }
    ?>

</body>
</html>