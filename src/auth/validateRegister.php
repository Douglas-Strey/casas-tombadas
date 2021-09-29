<?php

session_start();

include("../database/conexao.php");
include("../hooks/functions.php");

$btnRegister = filter_input(INPUT_POST, 'btnRegister', FILTER_SANITIZE_STRING);

if ($btnRegister) :
    $userName = filter_input(INPUT_POST, 'newUserName', FILTER_SANITIZE_STRING);
    $userNameLogin = filter_input(INPUT_POST, 'newUserLogin', FILTER_SANITIZE_STRING);
    $userEmail = filter_input(INPUT_POST, 'newUserEmail', FILTER_SANITIZE_STRING);
    $userPassword = filter_input(INPUT_POST, 'newPassword', FILTER_SANITIZE_STRING);

    $hash = encript($userPassword);
    $query = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES (?, ?, ?, ?)";
    $data = $mysqli->prepare($query);
    $data->bind_param("ssss", $userName, $userEmail, $userNameLogin, $hash);
    $data->execute();

    header("Location: /index.php");

else :
    redirectRegisterPage(["Página não encontrada!", "alertCustomClass"]);
endif;

$mysqli->close();