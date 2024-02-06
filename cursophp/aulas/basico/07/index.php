<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
</head>
<body>
        <?php 
            $frete = true;
            switch($frete){
                case true:
                    echo "tem frete";
                    break;
                
                case false:
                    echo "não tem frete";
                    break;

                default:
                    echo 0;
                    break;    
            };
        ?>   
</body>
</html>

