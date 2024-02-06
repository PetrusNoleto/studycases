<?php 
    session_start();
    $showPageContent = false;
    echo $showPageContent;
    if(isset($_SESSION['userIsAuthenticated']) && $_SESSION['userIsAuthenticated'] !== "" && $_SESSION['userIsAuthenticated'] !== "isNotAuthenticated" && $_SESSION['userIsAuthenticated'] !== null){
        $showPageContent = true;

    }else{
        $showPageContent = false;
    };
    

?>
