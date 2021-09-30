<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    
    <!-- ===== STYLE GLOBAL ===== -->
    <link rel="stylesheet" href="/src/style/global.css" />

    <!-- ===== STYLE ALERTAS ===== -->
    <link rel="stylesheet" href="/src/style/alertStyle.css" />

    <!-- ===== STYLE DO FORM ===== -->
    <link rel="stylesheet" href="/src/forms/login/style.css" />

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

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
    include './src/template/navbar-index.phtml';

    if (isset($_SESSION['flash_message'])) :
        echo getFlash();
        destroyFlash();
    endif;
    ?>

    <div class="l-form">
            <div class="shape1"></div>
            <div class="shape2"></div>

            <div class="form">
                <img src="/src/forms/login/img/authentication.svg" alt="" class="form__img">

                <form action="/src/auth/validateLogin.php" method="post" class="form__content">
                    <h1 class="form__title">Bem vindo Dev</h1>

                    <div class="form__div form__div-one">
                        <div class="form__icon">
                            <i class='bx bx-user-circle'></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Nome de Usuário</label>
                            <input type="text" id="userLogin" name="userLogin" autocomplete="off" class="form__input" required>
                        </div>
                    </div>

                    <div class="form__div">
                        <div class="form__icon">
                            <i class='bx bx-lock' ></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Senha</label>
                            <input type="password" id="userPassword" name="userPassword" autocomplete="off" class="form__input" required>
                        </div>
                    </div>
                    <div class="form__items">
                        <a href="/src/forms/createAuth/createAuth.php" class="form__forgot">Criar Conta</a>
                        <a href="#" class="form__forgot">Esqueceu a senha?</a>
                    </div>
                    
                    <input type="submit" name="btnLogin" class="form__button" value="Entrar">
                </form>
            </div>

        </div>
        
        
    <!-- ===== MAIN JS ===== -->
    <script src="/src/forms/login/main.js"></script>

    <script src="./src/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>