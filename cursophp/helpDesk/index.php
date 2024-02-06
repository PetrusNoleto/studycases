<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>helpdesk  - login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/reset-import.css" >
</head>
<body>
    <header class="loginHeaderContainer">
        <h1 class="loginHeaderBrand">app help desk</h1>
    </header>
    <main class="pageContent">
        <form id="userLoginForm" method="post" class="userLoginForm" action="./auth/auth.php">
            <div>
            <span class="loginErrorMessage">
                    <?php 
                        if(isset($_GET['auth'])){
                            echo 'por favor tente novamente dados de acesso incorretos';
                        };
                    ?> 
            </span>    
            <h2>login<h2> 
            </div>
            <label class="userLoginFormLabel " for="userEmail">
                <h3 class="userLoginFormLabelTitle">email</h3>
                <input id="userEmail" name="userEmail" type="email" placeholder="digite seu email" class="userLoginFormInput" required>
            </label>
            <label class="userLoginFormLabel" for="userPassword">
                <h3 class="userLoginFormLabelTitle">password</h3>
                <input id="userPassword" name="userPassword" type="password" placeholder="digite sua senha" class="userLoginFormInput" required>
            </label>
            <button type="submit" class="userLoginFormButton" form="userLoginForm">entrar</button>
        </form>
    </main>
</body>
</html>