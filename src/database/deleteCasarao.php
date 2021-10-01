<?php
include './conexao.php';
include '../hooks/functions.php';

$id = $_GET['casarao_id'];

$query = "DELETE FROM casaroes WHERE id = $id";

$data = $mysqli->query($query) or die("Error executing" . $query);

redirectCasaraoData(["Casarão apagado com sucesso!", "successCustomClass"]);