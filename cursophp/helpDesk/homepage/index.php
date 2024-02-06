<?php    
    require_once('../scripts/authUser.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/reset-import.css" >
    <title>homepage</title>
</head>
<body>
    <?php    
        if($showPageContent){
            include('../components/header/header.php');
            include('../components/homepage/cards.php');
        }
        else{
            header('Location: ../index.php?auth=false');
        }  
    ?>
</body>
</html>