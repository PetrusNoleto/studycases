<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>false - null and empty</title>
</head>
<body>
        <?php 
          $data1 = null;
          $data2 = "";
            if(is_null($data1)){
                echo "null ";
            }else{
                echo "não é null";
            };
            echo "<br>";
            if(empty($data2)){
                echo "esta vaia ";
            }else{
                echo "não esta vazia";
            };
        ?>   
</body>
</html>

