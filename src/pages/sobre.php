<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- ===== STYLE GLOBAL ===== -->
    <link rel="stylesheet" href="../style/global.css" />

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <script src="./assets/libs/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
</head>

<body>
    <?php
    include_once '../template/navbar-index.phtml';

    ?>

    <div class="container h-100 mt-5">
        <div class="row align-items-center h-100 ">
            <div class="col-md-12 text-center mx-auto mt-5">
                <p class="mt-5">Se você chegou até aqui é porque teve o interesse de ver o nosso trabalho mais de perto.
                    <br>Para você que não nos conhece, somos um grupo de 4 pessoas que estão desenvolvendo um site para
                    um trabalho da Faculdade de engenharia de software.
                </p>
            </div>
            <div class="col-md-12 text-center mx-auto">
                <p class="mt-2 fs-5 text-decoration-underline">Oque uma casa/edifício tombada?</p>

                <p class="">A palavra tombamento, tem origem portuguesa e significa fazer um registro do patrimônio de
                    alguém em livros específicos num órgão de Estado que cumpre tal função. Ou seja, utilizamos a palavra
                    no sentido de registrar algo que é de valor para uma comunidade protegendo-o por meio de legislação
                    específica. <br>
                    Atualmente, o tombamento é um ato administrativo realizado pelo poder público (SEEC/CPC) com o objetivo
                    de preservar, através da aplicação da lei, bens de valor histórico, cultural, arquitetônico e ambiental
                    para a população, impedindo que venham a ser destruídos ou descaracterizados.
                </p>
            </div>

        </div>
        <div class="row align-items-center h-100 mt-4">
            <div class="col-md-12 mx-auto">
                <p class="mt-2 fs-5 text-center text-decoration-underline">Tecnologias utilizadas</p>

                <p><i class='bx bxs-chevron-right align-baseline'></i><a class="text-info text-decoration-underline" 
                    href="https://www.php.net/" target="_blank">PHP</a>: Utilizado para autenticação com banco de dados, envio de logins 
                    e forms e toda conexão server-side necessária.
                </p>
                <p><i class='bx bxs-chevron-right align-baseline'></i><a class="text-info text-decoration-underline" 
                    href="https://getbootstrap.com/" target="_blank">Bootstrap</a>: Utilizado para montar toda a estrutura do site.
                </p>
                <p><i class='bx bxs-chevron-right align-baseline'></i><a class="text-info text-decoration-underline" 
                    href="https://boxicons.com/" target="_blank">BOXICONS</a>: Banco dos ícones utilizados na aplicação.</p>
                <p><i class='bx bxs-chevron-right align-baseline'></i><a class="text-info text-decoration-underline" 
                    href="https://boxicons.com/" target="_blank">JavaScript</a>: Utilizado para alguns efeitos.</p>
                <p><i class='bx bxs-chevron-right align-baseline'></i><a class="text-info text-decoration-underline" 
                    href="https://heroku.com/" target="_blank">Heroku</a>: Servidor utilizado para hospedar o site gratuitamente.</p>
                <p><i class='bx bxs-chevron-right align-baseline'></i><a class="text-info text-decoration-underline" 
                    href="https://www.cleardb.com/" target="_blank">ClearDB MySql</a>: Servidor de banco de dados utilizado para 
                    armazenar as informações sobre as casas/edifícios.
                </p>

                <p><i class='bx bxs-chevron-right align-baseline mt-5'></i><a class="text-info text-decoration-underline" 
                    href="https://github.com/Douglas-Strey/casas-tombadas" target="_blank">Github</a>: Utilizado para hospedar o projeto, 
                    gerenciar as branches, realizar o merge e pull request.
                </p>
            </div>
        </div>
    </div>
</body>

</html>