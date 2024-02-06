<?php 
     session_start();
     $_SESSION['userIsAuthenticated'] = "isAuthenticated";
     $userAuthenticated = false;
        echo $_POST['userEmail']; 
        echo $_POST['userPassword']; 
    function authCurrentUser(){
        $usersList = [
            ["userID"=>"0","userName"=>"admin","userEmail"=>"admin@gmail.com","userPassword"=>"1234","userRole"=>"admin","userRestaurant"=>"0000"],
            ["userID"=>"1","userName"=>"teste","userEmail"=>"teste12@gmail.com","userPassword"=>"123","userRole"=>"user","userRestaurant"=>"1111"]
        ];
        foreach($usersList as $user){
            if($_POST['userEmail'] === $user['userEmail'] && $_POST['userPassword'] === $user['userPassword']){
                $userRestaurant = $user['userRestaurant'];
                $userAuthenticated = true;
                $_SESSION['userIsAuthenticated'] = "isAuthenticated";
                // setcookie ("pnDeliveryUserAuthenticated", $usersList, time () - 3600);
                setcookie ("pnDeliveryUserAuthenticatedRestaurant", $userRestaurant, time () - 3600);
                header("Location: ../../admin/restaurant/");
            } 
        };
    
        if(!$userAuthenticated){
                $_SESSION['userIsAuthenticated'] = "isNotAuthenticated";
                echo("não authenticado");
                header('Location: ../../admin/?auth=false');
        };
    }
    authCurrentUser()
?>