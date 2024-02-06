<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array - search</title>
</head>
<body>
        <?php 
            $frutas = ["maça","laranja","carros"];        
            $persons = ["joao", "maria","jose"];
            $allLists = [
                'listadefrutas' => $frutas,
                'listadepessoas' => $persons
            ];


            echo '<pre>';
             print_r($allLists);  
            echo '</pre>';  
           if(in_array('joao',$allLists['listadepessoas'])){
            echo ' exite';
           }else{
            echo 'não exite';
           };
        ?>   
</body>
</html>

