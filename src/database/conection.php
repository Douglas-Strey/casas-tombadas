<?php

$user = "root";
$password = "root";
$database = "faculdade";
$hostname = "localhost";

$mysqli = new mysqli($hostname, $user, $password, $database) or die(' Erro na conexão ');

if ($mysqli->connect_errno) {
    exit("Falha ao conectar ao MySQL: " . $mysqli->connect_error);
}