<?php

session_start();

include("../database/conexao.php");
include("../hooks/functions.php");

$btnRegisterCasarao = filter_input(INPUT_POST, 'btnRegisterCasarao', FILTER_SANITIZE_STRING);

if ($btnRegisterCasarao) :
    $casarao = $_POST;
    if (!empty($casarao)) :
        $casaraoNome = $casarao['casaraoNome'];
        $casaraoFoto = $_FILES['casaraoFoto']['tmp_name'];
        $casaraoEndereco = $casarao['casaraoEndereco'];
        $casaraoDescricao = $casarao['casaraoDescricao'];

        if ($casaraoFoto) :
            $casaraoBase64 = base64_encode(file_get_contents($casaraoFoto));
        else :
            $casaraoBase64 = null;
        endif;

        $query = "INSERT INTO casaroes (nome, img, endereco, descricao) VALUES (?, ?, ?, ?)";
        $data = $mysqli->prepare($query);
        $data->bind_param("ssss", $casaraoNome, $casaraoBase64, $casaraoEndereco, $casaraoDescricao);
        $data->execute();

        redirectCasaraoCadastro(["Casarão cadastrado com sucesso!", "successCustomClass"]);
    endif;

else :
    redirectAuthPage(["Página não encontrada!", "alertCustomClass"]);
endif;

$mysqli->close();
