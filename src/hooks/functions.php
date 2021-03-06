<?php
include_once '../helper/flashMessage/flash.php';

function encript($userPassword)
{
    return password_hash($userPassword, PASSWORD_DEFAULT);
}

function redirectAuthPage(array $params)
{
    setFlash([$params[0], $params[1]]);

    header("Location: /");
}

function redirectRegisterPage(array $params)
{
    setFlash([$params[0], $params[1]]);

    header("Location: ../foms/createAuth/createAuth.php");
}

function redirectCasaraoCadastro(array $params)
{
    setFlash([$params[0], $params[1]]);

    header("Location: ../pages/cadastroCasas.php");
}

function redirectCasaraoData(array $params)
{
    setFlash([$params[0], $params[1]]);

    header("Location: ../pages/casasTombadas.php");
}

function checkLogin()
{
    if (!empty($_SESSION['id'])) :
        echo "<div class='alert infoCustomClass'>Olá " . $_SESSION['nome'] . ", bem vindo! 
        <button type='button' class='btn-close align-middle' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    else :
        redirectAuthPage(["Você precisa estar autenticado para acessar esta página!", "dangerCustomClass"]);
    endif;

    return;
}

function checkLoginData()
{
    if (empty($_SESSION['id'])) :
        redirectAuthPage(["Você precisa estar logado para acessar esta página!", "dangerCustomClass"]);
    endif;

    return;
}
