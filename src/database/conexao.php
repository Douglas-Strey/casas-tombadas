<?php

$user = "b9b91b640af65f";
$password = "beda72be";
$database = "heroku_d78033e68ed6a27";
$hostname = "us-cdbr-east-04.cleardb.com";

$mysqli = new mysqli($hostname, $user, $password, $database) or die(' Erro na conexão ');

if ($mysqli->connect_errno) :
    exit("Falha ao conectar ao MySQL: " . $mysqli->connect_error);
endif;
mysql://:/?reconnect=true