<?php    
    require_once('../scripts/authUser.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/reset-import.css" >
    <title>Document</title>
</head>
<body>
    <?php    
        if($showPageContent){
            include('../components/header/header.php');
        }
        else{
            header('Location: ../index.php?auth=false');
        }  
    ?>
</body>
</html>