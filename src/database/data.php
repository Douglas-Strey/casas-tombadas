<?php

include '../database/conexao.php';

$query = "SELECT nome, email FROM usuarios";
$result_usuario = mysqli_query($mysqli, $query);

$row_usuario = mysqli_fetch_assoc($result_usuario);

$nomeCompleto = $row_usuario['nome'];
$emailUsuario = $row_usuario['email'];