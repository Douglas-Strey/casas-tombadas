<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="/src/style/global.css" />

    <link rel="stylesheet" href="/src/login/style.css" />
    <!-- <link rel="stylesheet" href="/src/style/custom.css" /> -->

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
    include_once './src/template/navbar-index.phtml';
    if (isset($_SESSION['flash_message'])) :
        getFlash();
        destroyFlash();
    endif;
    ?>
    
    <!-- <div class="wrapper fadeInDown">
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
    </div> -->

    <div class="l-form">
            <div class="shape1"></div>
            <div class="shape2"></div>

            <div class="form">
                <img src="/src/login/img/authentication.svg" alt="" class="form__img">

                <form action="/src/auth/validateLogin.php" method="post" class="form__content">
                    <h1 class="form__title">Welcome</h1>

                    <div class="form__div form__div-one">
                        <div class="form__icon">
                            <i class='bx bx-user-circle'></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Username</label>
                            <input type="text" class="form__input">
                        </div>
                    </div>

                    <div class="form__div">
                        <div class="form__icon">
                            <i class='bx bx-lock' ></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Password</label>
                            <input type="password" class="form__input">
                        </div>
                    </div>
                    <a href="#" class="form__forgot">Forgot Password?</a>

                    <input type="submit" class="form__button" value="Login">

                    <div class="form__social">
                        <span class="form__social-text">Our login with</span>

                        
                    </div>
                </form>
            </div>

        </div>
        
        <!-- ===== MAIN JS ===== -->
        <script src="/src/login/main.js"></script>


    <script src="./src/assets/libs/jquery/jquery.min.js"></script>
    <script src="./src/assets/libs/sweetAlert/sweetalert2.all.min.js"></script>
    <script src="./src/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./src/js/auth.js"></script>
</body>

</html>