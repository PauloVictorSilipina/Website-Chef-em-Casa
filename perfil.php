<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/05b9e3a650.js" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer></script>
    <script src="script/index.js" defer></script>

    <link rel="stylesheet" href="css/css_base.css">
    <link rel="stylesheet" href="css/css_perfil.css">
    
    
    <title>Chef em Casa</title>
</head>
<!--criação do corpo-->
<body class="body_home">
    <?php
    include "header.php";
    ?>

    <div class="container perfil">
            <div class="nome-usuario col-lg-12">
                <span>Remy</span>
            </div>
    
            <div class="foto-usuario col-lg-12">
                <img src="img/chef mito.jpg">
            </div>
    
            <div class="titulo-historico offset-lg-3 col-lg-6">
                <span>Histórico de receitas visualizadas</span>
            </div>

        <div class="container">
            <div class="row receitas-visualizadas">
                <div class="col-lg-4 col-12">
                    <img src="receitas/ratatouille.webp">
                    <a href="#"><span>Ratatouille du chef</span></a>
                </div>
                <div class="col-lg-4 col-12">
                    <img src="receitas/bife acebolado.jpg">
                    <a href="#"><span>Bife acebolado</span></a>
                </div>
                <div class="col-lg-4 col-12">
                    <img src="receitas/Bolo padrao.jpg">
                    <a href="#"><span>Bolo de chocolate</span></a>
                </div>
            </div>
            <div class="row receitas-visualizadas">
                <div class="col-lg-4 col-12">
                    <img src="receitas/dadinho.jpeg">
                    <a href="#"><span>Dadinho de Queijo Coalho</span></a>
                </div>
                <div class="col-lg-4 col-12">
                    <img src="receitas/caldo verde.jpg">
                    <a href="#"><span>Caldo verde</span></a>
                </div>
                <div class="col-lg-4 col-12">
                    <img src="receitas/camarao internacional.jpg">
                    <a href="#"><span>Camarão internacional</span></a>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>
</body>
</html>