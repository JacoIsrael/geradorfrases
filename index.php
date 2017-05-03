<?php
    session_start();
    $_SESSION['atividades'][] = $_GET['atividade'];

?>

<html>

    <head>
        <style>
            h3{
                color: #29ffbc;
            }
            ol{
                color: midnightblue;
            }
        </style>

    </head>

    <body>

        <form method="get" >
            <input type="text" name="atividade" placeholder="Ex.: Levar o bob passear" >
            <input type="submit" value="adicionar">

        </form>

        <h3>Exibir atividades: </h3>

        <ol>
            <?php foreach ($_SESSION['atividades'] as $ativ); ?>

                <li><?= $ativ; ?></li>

             <?php endforeach; ?>
        </ol>

    </body>


</html>