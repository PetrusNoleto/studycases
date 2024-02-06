<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funçoes / funcões nativas</title>
</head>
<body>
        <?php 
            function text(){
                echo "text";
            };
            function sum($num1, $num2){
                echo $num1+$num2;
            };
           $test = "ola mundo <br>";
           echo str_replace("o","3",$test);
           echo strtoupper($test);
           $number = 8.2;
            // echo ceil($number);
            // echo floor($number);
            // echo round($number);
            // echo rand($number,8);
            // echo sqrt($number);

            function getRealDate(){
                date_default_timezone_set('America/Sao_Paulo');
                date_default_timezone_get();
                $date = date('H/i/s d/m/y');
                $initialDate = '02-05-2020';
                $finalDate = '02-08-2020';
                $date = strtotime($initialDate);
                echo $date;

            };
            
            getRealDate()
            




        ?>   
</body>
</html>

