<?php
    session_start();
    unset($_SESSION['userIsAuthenticated']);
    header('Location: ../index.php');
?> 
