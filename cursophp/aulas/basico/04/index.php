<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document - variaveis</title>
</head>
<body>
        <?php 
            $TestString ="oi";
            $TestNumber = 8;
            $TestBoolean = false;
            $TestFloat = 8.2;
            $TestList = ["petrus","teste"];

            $TestString ="carlos";
            # variaveis constantes
            define('constVar', 'petrus');

            echo(constVar);
        ?>
        <p><?=$TestString?></p>
        <p><?=$TestNumber?></p>
        <p><?=$TestBoolean?></p>
        <p><?=$TestFloat?></p>
        <p><?=$TestList[0]?></p>
        <p><?=constVar?></p>

        <p><?= 'ola ' . $TestList[0] . " sua idade é " . $TestNumber . "." ?></p>
        <!-- variaveis constantes -->

</body>
</html>

