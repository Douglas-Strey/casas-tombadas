<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    
    <!-- ===== STYLE GLOBAL ===== -->
    <link rel="stylesheet" href="../style/global.css" />

    <!-- ===== STYLE DO ALERT ===== -->
    <link rel="stylesheet" href="../style/alertStyle.css" />

    <!-- ===== STYLE DO FORM ===== -->
    <link rel="stylesheet" href="../forms/registerHouse/style.css" />

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <script src="../assets/libs/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>

    <title>Cadastro de Casas Tombadas</title>
</head>

<?php
include_once '../helper/flashMessage/flash.php';
include '../hooks/functions.php';

session_start();
?>

<body>
    <?php
    include_once '../template/navbar-index.phtml';
    
    if (isset($_SESSION['flash_message'])) :
        echo getFlash();
        destroyFlash();
    endif;

    checkLogin();
    ?>

<div class="l-form">
            <div class="shape1"></div>
            <div class="shape2"></div>

            <div class="form">
                <img src="../forms/registerHouse/img/casa-svg.svg" alt="" class="form__img">

                <form enctype="multipart/form-data" action="../auth/validateCasarao.php" method="post" class="form__content">
                    <h1 class="form__title">Cadastrar Casarão</h1>

                    <div class="form__div">
                        <div class="form__icon">
                            <i class='bx bx-home-circle'></i>
                        </div>

                        <div class="form__div-input">
                            <label for="casaraoNome" class="form__label">Nome</label>
                            <input type="text" id="casaraoNome" class="form__input" name="casaraoNome" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form__div">
                        <div class="form__icon">
                            <i class='bx bx-camera' ></i>
                        </div>

                        <div class="form__div-input">
                            <input type="file" id="casaraoFoto" class="form__input" name="casaraoFoto" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form__div">
                        <div class="form__icon">
                            <i class='bx bx-map'></i>
                        </div>

                        <div class="form__div-input">
                            <label for="casaraoEndereco" class="form__label">Endereço</label>
                            <input type="text" id="casaraoEndereco" class="form__input" name="casaraoEndereco" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form__div">
                        <div class="form__icon">
                            <i class='bx bx-text' ></i>
                        </div>

                        <div class="form__div-input">
                            <label for="casaraoDescricao" class="form__label">Descrição</label>
                            <textarea id="casaraoDescricao" class="form__input text_area" name="casaraoDescricao" autocomplete="off" required></textarea>
                        </div>
                    </div>

                    <div class="form__items">
                        <a href="./casasTombadas.php" class="form__forgot">Visualizar Casarões Cadastrados</a>
                    </div>
                    
                    <input type="submit" name="btnRegisterCasarao" class="form__button" value="Cadastrar Casarão">
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