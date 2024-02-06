<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funcoes nativas array</title>
</head>
<body>
        <?php 
            $frutas = ["maça","laranja","carros"];        
            $persons = ["temis","joao", "maria","jose"];
            $allLists = [
                'listadefrutas' => $frutas,
                'listadepessoas' => $persons,
                "amanda" => ["nome"]
            ];
            function verifyIsArray($content){
                $verifyContent = is_array($content);
                if($verifyContent){
                    echo "sim é um array";
                }else{
                   $type = getType($content);
                    echo "não é um array isto é um ou uma " . $type;
                };
            }
            verifyIsArray($allLists);
            echo "<br>";
            echo "<pre>";
                echo "keys";
                print_r(array_keys($allLists)) ;
            echo "</pre>";
            echo "<hr>";
            echo "<pre>";
                echo "sort";
                echo "<br>";
                sort($allLists['listadepessoas']);
                print_r($allLists['listadepessoas']);
            echo "</pre>";
            echo "<pre>";
                echo "asort";
                echo "<br>";
                asort($allLists);
                print_r($allLists);   
            echo "</pre>";

            echo "<pre>";
            echo "asort";
            echo "<br>";
            $mewArray = array_merge($persons,$frutas );
            print_r($mewArray);   
            echo "</pre>";

            

        ?>   
</body>
</html>

