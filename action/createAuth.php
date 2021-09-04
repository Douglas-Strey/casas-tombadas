<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="/style/global.css" />
    <link rel="stylesheet" href="/style/custom.css" />


    <script src="./assets/libs/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>

    <title>Casas Tombadas</title>
</head>

<?php
include_once './helper/flashMessage/flash.php';

session_start();
?>

<body>
    <?php
    include '../template/navbar.phtml';
    ?>

    <div class="wrapper fadeInDown">
        <div id="formContent">

            <div class="fadeIn first">
                <img src="#" id="icon" alt="Logo" />
                <span>Cadastro de usuário</span>
            </div>

            <form action="../auth/validateRegister.php" method="POST">
                <input type="text" id="newUserName" class="fadeIn second" name="newUserName" placeholder="Nome Completo" required>
                <input type="text" id="newUserLogin" class="fadeIn second" name="newUserLogin" placeholder="Usu&aacute;rio" required>
                <input type="text" id="newUserEmail" class="fadeIn second" name="newUserEmail" placeholder="E-mail" required>
                <input type="password" id="newPassword" class="fadeIn third" name="newPassword" placeholder="Senha" required>
                <input type="submit" name="btnRegister" class="fadeIn fourth signupToast" value="Cadastrar">
            </form>

            <div id="formFooter">
                <a class="underlineHover" href="/index.php">Já tem um login? entre aqui</a>
            </div>

        </div>
    </div>

    <script src="../assets/libs/jquery/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/auth.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>