<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../style/global.css" />
    
    <link rel="stylesheet" href="./style.css" />

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <script src="../../assets/libs/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>

    <title>Casas Tombadas</title>
</head>

<?php
include_once '../../helper/flashMessage/flash.php';

session_start();
?>

<body>
    <?php
    include '../../template/navbar.phtml';
    ?>

    <div class="l-form">
            <div class="shape1"></div>
            <div class="shape2"></div>

            <div class="form">
                <img src="./img/authentication-two.svg" alt="" class="form__img">

                <form action="../../auth/validateRegister.php" method="post" class="form__content">
                    <h1 class="form__title">Criar Conta</h1>

                    <div class="form__div">
                        <div class="form__icon">
                            <i class='bx bx-user'></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Nome Completo</label>
                            <input type="text" id="newUserName" class="form__input" name="newUserName" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form__div">
                        <div class="form__icon">
                            <i class='bx bx-user-circle'></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Nome de Usuário</label>
                            <input type="text" id="newUserLogin" class="form__input" name="newUserLogin" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form__div">
                        <div class="form__icon">
                            <i class='bx bx-mail-send' ></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">E-mail</label>
                            <input type="text" id="newUserEmail" class="form__input" name="newUserEmail" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form__div">
                        <div class="form__icon">
                            <i class='bx bx-lock' ></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Password</label>
                            <input type="password" id="newPassword" class="form__input" name="newPassword" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form__items">
                        <a href="/" class="form__forgot">Já possui login? Clique aqui!</a>
                    </div>
                    
                    <input type="submit" name="btnRegister" class="form__button" value="Criar Conta">
                </form>
            </div>

        </div>
        
        <!-- ===== MAIN JS ===== -->
        <script src="./main.js"></script>

    <script src="../../assets/libs/jquery/jquery.min.js"></script>
    <script src="../../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>