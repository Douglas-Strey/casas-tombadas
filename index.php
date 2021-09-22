<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="/src/style/global.css" />
    <link rel="stylesheet" href="/src/style/custom.css" />


    <script src="./src/assets/libs/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>

    <title>Casas Tombadas</title>
</head>

<?php
include_once './src/helper/flashMessage/flash.php';

session_start();
?>

<body>
    <?php
    include_once './src/template/navbar-index.phtml';
    if (isset($_SESSION['flash_message'])) :
        getFlash();
        destroyFlash();
    endif;
    ?>
    
    <div class="wrapper fadeInDown">
        <div id="formContent">

            <div class="fadeIn first">
                <img src="#" id="icon" alt="Logo" />
            </div>

            <form action="/src/auth/validateLogin.php" method="post">
                <input type="text" id="userLogin" class="fadeIn second" name="userLogin" autocomplete="off" placeholder="Usu&aacute;rio" required>
                <input type="password" id="userPassword" class="fadeIn third" name="userPassword" autocomplete="off" placeholder="Senha" required>
                <input type="submit" name="btnLogin" class="fadeIn fourth signupToast" value="Entrar">
            </form>

            <div id="formFooter">
                <a class="underlineHover" href="#">Esqueceu sua senha?</a>
                <a class="underlineHover" href="/src/action/createAuth.php">Cadastre-se agora mesmo!</a>
            </div>

        </div>
    </div>

    <script src="./src/assets/libs/jquery/jquery.min.js"></script>
    <script src="./src/assets/libs/sweetAlert/sweetalert2.all.min.js"></script>
    <script src="./src/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./src/js/auth.js"></script>
</body>

</html>