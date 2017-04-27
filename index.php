<?php

    $titulos   = ["Mestre", "Mgnífico", "Senhor"];
    $qualidade = ["lindo", "o melhor", "maravilhoso"];
    $nome      = "Jacó";

?>

<html>

    <head>

    </head>

    <body>

        <h2 <?php echo "$titulos[rand(0,2)]." $nome, ".$qualidade[rand(0,2)]"; ?> </h2>

    </body>


</html>