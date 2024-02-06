<?php 
    session_start(); #abre sessão
    $_SESSION['userIsAuthenticated'] = "isAuthenticated";
    $userAuthenticated = false;
    echo $_POST['userEmail'];
    echo $_POST['userPassword'];
    
    $users = [
        ['userEmail' => "admin@gmail.com", 'userPassword' => "123"],
        ['userEmail' => "teste@gmail.com", 'userPassword' => "1234"]
    ];
    foreach($users as $user){
        if($_POST['userEmail'] === $user['userEmail'] && $_POST['userPassword'] === $user['userPassword']){
            $userAuthenticated = true;
            $_SESSION['userIsAuthenticated'] = "isAuthenticated";
            header('Location: ../homepage/');  
        }
    }
    if(!$userAuthenticated){
        $_SESSION['userIsAuthenticated'] = "isNotAuthenticated";
        header('Location: ../index.php?auth=false');  
    }
?>