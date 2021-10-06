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

    <!-- ===== STYLE DAS CASAS ===== -->
    <link rel="stylesheet" href="../style/casasView.css" />

    <!-- ===== STYLE DO ALERT ===== -->
    <link rel="stylesheet" href="../style/alertStyle.css" />

    <!-- ===== STYLE DO FORM ===== -->
    <link rel="stylesheet" href="../forms/registerHouse/style.css" />

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <title>Cadastro de Casas Tombadas</title>
</head>

<?php
include '../database/conexao.php';
include_once '../helper/flashMessage/flash.php';
include '../hooks/functions.php';

session_start();
checkLoginData();
?>

<body>
    <?php
    include_once '../template/navbar-index.phtml';

    if (isset($_SESSION['flash_message'])) :
        echo getFlash();
        destroyFlash();
    endif;
    ?>

    <?php
    if (empty($cidade)) {
        // Consulta ao banco
        $sql = "SELECT * FROM casaroes";
        $result = $mysqli->query($sql) or die(' Erro na requisição ');

        if ($result->num_rows > 0) {
            setFlash(["Consulta realizada com sucesso!", "successCustomClass"]);
            echo getFlash();
            destroyFlash();
    ?>
            <!-- form de pesquisa da cidade -->
            <form class="row g-2 mt-3 ms-2 d-flex justify-content-center" method="get" action="casasTombadas.php">
                <div class="col-auto">
                    <label for="cidade" class="visually-hidden">Buscar Cidade</label>
                    <input class="form-control" id="cidade" placeholder="Buscar Cidade" name="cidade" autocomplete="off">
                </div>
                <div class="col-auto">
                    <button id="botao-pesquisa" type="submit" class="btn btn-color text-white mb-3">Buscar</button>
                </div>
            </form>
            <div class="row m-0">
                <?php
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="col-lg-4 mt-3">
                            <div class="card w-100 bg__colors text-center">
                                <div class="card-header border border-light border-4">
                                    <h4 class="mb-0 fs-3 fw-bold"><?= $row['nome'] ?></h4>
                                </div>
                                <div class="card-body">
                                    <div class="card-header justify__text d-flex ">
                                        <div class="form__icon">
                                            <i class='bx bx-text icon__text'></i>
                                        </div>
                                        <span class="fs-5 fw-normal"><?= $row['descricao'] ?></span><br />
                                    </div>

                                    <div class="card-header d-flex justify__textAlign">
                                        <div class="form__icon icon__map">
                                            <i class='bx bxs-city icon__mapView'></i>
                                        </div>
                                        <span class="fs-5 fw-normal text-center"><?= $row['cidade'] ?></span><br />

                                        <div class="form__icon icon__map">
                                            <i class='bx bx-flag icon__mapView'></i>
                                        </div>
                                        <span class="fs-5 fw-normal text-center"><?= $row['estado'] ?></span><br />
                                    </div>

                                    <div class="card-header d-flex justify__textAlign">
                                        <div class="form__icon icon__map">
                                            <i class='bx bx-map icon__mapView'></i>
                                        </div>
                                        <span class="fs-5 fw-normal text-center"><?= $row['endereco'] ?></span><br />

                                        <div class="form__icon icon__map">
                                            <i class='bx bxs-building-house icon__mapView'></i>
                                        </div>
                                        <span class="fs-5 fw-normal text-center"><?= $row['bairro'] ?></span><br />
                                    </div>
                                    <img class="img-fluid mt-4" src="data:image/png;base64,<?= $row['img'] ?>" alt="" style="width:500px"> <br>
                                    <span>
                                        <button class="border-0 btn btn-danger mt-4 buton-delete">
                                            <a class="text-white" href="../database/deleteCasarao.php?casarao_id='<?= $row['id'] ?>'">
                                                Apagar Casarão
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                </svg>
                                            </a>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
            </div>
    <?php
                    }
        } else {
            setFlash(["Nenhum casarão cadastrado :(", "alertCustomClass"]);
            echo getFlash();
            destroyFlash();
        }
    } else {
        $cidade = filter_input(INPUT_GET, 'cidade', FILTER_SANITIZE_STRING);

        $sql2 = "SELECT * from casaroes where locate('$cidade', cidade)  > 0 order by cidade asc";
        $result2 = $mysqli->query($sql2) or die(' Erro na requisição ');

        if ($result2->num_rows > 0) {
    ?>
            <div class="row m-0">
                <?php
                while ($row2 = $result2->fetch_assoc()) {
                ?>
                    <div class="col-lg-4 mt-3">
                        <div class="card w-100 bg__colors text-center">
                            <div class="card-header border border-light border-4">
                                <h4 class="mb-0 fs-3 fw-bold"><?= $row2['nome'] ?></h4>
                            </div>
                            <div class="card-body">
                                <div class="card-header justify__text d-flex ">
                                    <div class="form__icon">
                                        <i class='bx bx-text icon__text'></i>
                                    </div>
                                    <span class="fs-5 fw-normal"><?= $row2['descricao'] ?></span><br />
                                </div>

                                <div class="card-header d-flex justify__textAlign">
                                    <div class="form__icon icon__map">
                                        <i class='bx bxs-city icon__mapView'></i>
                                    </div>
                                    <span class="fs-5 fw-normal text-center"><?= $row2['cidade'] ?></span><br />

                                    <div class="form__icon icon__map">
                                        <i class='bx bx-flag icon__mapView'></i>
                                    </div>
                                    <span class="fs-5 fw-normal text-center"><?= $row2['estado'] ?></span><br />
                                </div>

                                <div class="card-header d-flex justify__textAlign">
                                    <div class="form__icon icon__map">
                                        <i class='bx bx-map icon__mapView'></i>
                                    </div>
                                    <span class="fs-5 fw-normal text-center"><?= $row2['endereco'] ?></span><br />

                                    <div class="form__icon icon__map">
                                        <i class='bx bxs-building-house icon__mapView'></i>
                                    </div>
                                    <span class="fs-5 fw-normal text-center"><?= $row2['bairro'] ?></span><br />
                                </div>
                                <img class="img-fluid mt-4" src="data:image/png;base64,<?= $row2['img'] ?>" alt="" style="width:500px"> <br>
                                <span>
                                    <button class="border-0 btn btn-danger mt-4 buton-delete">
                                        <a class="text-white" href="../database/deleteCasarao.php?casarao_id='<?= $row2['id'] ?>'">
                                            Apagar Casarão
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                            </svg>
                                        </a>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
            </div>
    <?php
                }
        }
    }
        $mysqli->close();
    ?>


<div class="mt-3 ms-3 mb-3">
    <a class="btn btn-color text-white" href="../pages/cadastroCasas.php">Voltar</a>
</div>
<script src="../assets/libs/jquery/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../js/custom.js"></script>
</body>