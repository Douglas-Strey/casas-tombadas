<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../style/global.css" />

    <link rel="stylesheet" href="../forms/registerHouse/style.css" />

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <script src="../assets/libs/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>

    <title>Cadastro de Casas Tombadas</title>
</head>

<?php
include_once '../helper/flashMessage/flash.php';

session_start();
?>

<body>
    <?php
    include_once '../template/navbar-index.phtml';
    if (isset($_SESSION['flash_message'])) :
        getFlash();
        destroyFlash();
    endif;
    ?>

<div class="l-form">
            <div class="shape1"></div>
            <div class="shape2"></div>

            <div class="form">
                <img src="../forms/registerHouse/img/casa-svg.svg" alt="" class="form__img">

                <form action="../../auth/validateRegister.php" method="post" class="form__content">
                    <h1 class="form__title">Cadastrar Casarão</h1>

                    <div class="form__div">
                        <div class="form__icon">
                            <i class='bx bx-home-circle'></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Nome</label>
                            <input type="text" id="newUserName" class="form__input" name="newUserName" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form__div">
                        <div class="form__icon">
                            <i class='bx bx-camera' ></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Foto</label>
                            <input type="text" id="newUserName" class="form__input" name="newUserName" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form__div">
                        <div class="form__icon">
                            <i class='bx bx-camera' ></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Endereço</label>
                            <input type="text" id="newUserName" class="form__input" name="newUserName" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form__div">
                        <div class="form__icon">
                            <i class='bx bx-text' ></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Descrição</label>
                            <textarea id="newUserName" class="form__input" name="newUserName" autocomplete="off" required></textarea>
                            <!-- <input type="textarea" id="newUserName" class="form__input" name="newUserName" autocomplete="off" required> -->
                        </div>
                    </div>

                    <div class="form__items">
                        <a href="/" class="form__forgot">Visualizar Casas Cadastradas</a>
                    </div>
                    
                    <input type="submit" name="btnRegister" class="form__button" value="Criar Conta">
                </form>
            </div>

        </div>
        
        <!-- ===== MAIN JS ===== -->
        <script src="../forms/registerHouse/main.js"></script>

    <script src="../assets/libs/jquery/jquery.min.js"></script>
    <script src="../assets/libs/sweetAlert/sweetalert2.all.min.js"></script>
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/auth.js"></script>
</body>