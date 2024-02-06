<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>casting variables</title>
</head>
<body>
        <?php 
            $frete = (object) 8;
            $type = getType($frete);
            echo $type;
        ?>   
</body>
</html>

