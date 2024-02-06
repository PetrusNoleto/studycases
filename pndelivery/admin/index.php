<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../assets/logos/_ad5ea154-5574-49a8-83aa-2987489bcde0.jfif">
    <link rel="stylesheet" href="../styles/import.css"/>
    <title>admin</title>
</head>
<body>
    <main>
        <div class="pndeliveryAdminContainer">
            <div class="pndeliveryLoginFormContainer">
                <div class="pndeliveryLoginFormHeaderInfo">
                    <h1 class="pndeliveryLoginFormHeaderInfoTitle">pndelivery</h1>   
                    <p class="pndeliveryLoginFormHeaderInfoSlogan">gerencie seu delivery</p>     
                </div>
                <?php 
                    if(isset($_GET['auth']) && $_GET['auth'] == "false"){
                        echo 'dados de acesso incorretos';
                    };
                ?> 
                <form class="pndeliveryAdminForm"  method="post" action="../scripts/auth/authuser.php">
                    <label class="pndeliveryAdminFormLabel">
                        <input name="userEmail" type="email" placeholder="digite seu email" class="pndeliveryAdminFormInput" autocomplete="autocomplete"/>
                    </label>
                    <label class="pndeliveryAdminFormLabel">
                        <input name="userPassword" type="password" placeholder="digite sua senha" class="pndeliveryAdminFormInput" autocomplete="new-password"/>
                    </label>
                    <label class="pndeliveryAdminFormLabel">
                        <button type="submit" class="loginButton">login</button>
                    </label>
                </form>
                <span class="pndeliveryLoginOr">or</span>
                <div class="pndeliveryLoginWithSocial">
                    <button class="pndeliveryLoginWithSocialItem">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/></svg>
                        login with google
                    </button>
                    <button class="pndeliveryLoginWithSocialItem">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg>
                        login with facebook
                    </button>
                </div>
            </div>
            <div class="pndeliveryAdminBannerContainer">
                <div class="pndeliveryAdminBannerImageBox">
                    <image class="pndeliveryAdminBannerImage" src = "../assets/images/adminBanner.webp" alt ="image for admin banner"/>
                </div>
            </div>
        </div>    
    </main>    
</body>
</html>



