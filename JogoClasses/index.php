<?php
include "game/Personagem.php";
?>

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
    
    $p = new Personagem("Thor", "Pedro", "Nordic", "god of thunder", 50, "M", 10, 12, 8, 9, 11);

    echo $p->get_hability();
    $p->update_testes();
    echo $p->get_agility();

    ?>

</body>
</html>