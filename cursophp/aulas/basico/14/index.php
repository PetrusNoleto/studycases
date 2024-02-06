<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loops</title>
</head>
<body>
        <?php 
            // $frutas = ["maça","laranja","carros"];        
            // $persons = array("temis","joao", "maria","jose");
            // $allLists = [
            //     'listadefrutas' => $frutas,
            //     'listadepessoas' => $persons,
            //     "amanda" => ["nome"]
            // ];
            // $indice = 0;
            // $listLenght = count($persons);
            // while ($indice < $listLenght){
            //     echo"<hr>";
            //     print_r($persons[$indice]);  
            //     $indice++;
            // };
            // do{
            //     echo"<hr>";
            //     print_r($persons[$indice]);  
            //     $indice++;
            // }while($indice < $listLenght);
            // for($indice; $indice < $listLenght; $indice++){
            //     echo"<hr>";
            //     print_r($persons[$indice]);   
            // }; 
            #foreach 
            // foreach($persons as $person){
            //     echo"<hr>";
            //     echo $person;

            //     if($person == "joao"){
            //         echo "você é maluco";
            //     };
            // };
            #foreach em arrays associativos
            $funcionarios = array("fernana", "joana","marcela","limda");
            
            foreach($funcionarios as $idx => $funcionario){
                echo ' id: ' . $idx . ' funcionario: ' . $funcionario;
            };
        ?>   


</body>
</html>

