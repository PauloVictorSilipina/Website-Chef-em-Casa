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
<body>
    <?php
    include "header.php";
    include_once 'initialize.php';
    $post = new Post($db);
    $banana = $post;
    $banana = $post -> receitasCriadas($_SESSION['user_id']);
    ?>

    <div class="container perfil">
        <div class="editar col-lg-2 offset-lg-10">
            <a href='editarperfil.php'><i class="fa-solid fa-pen-to-square fa-2xl"></i></a>
        </div>
        <div class="nome-usuario col-lg-12">
            <?php
            $usuario = $_SESSION['usuario'];
            echo '<span>'.$usuario.'</span>';
            ?>
        </div>
    
        <div class="foto-usuario col-lg-12">
            <?php
            if (isset($_SESSION['img_path'])) {
                $img_path = $_SESSION['img_path'];
                // Agora, $img_path contém o caminho da imagem
            } else {
                $img_path = 'img/icon.png';
            }
            echo '<img src="'. $img_path .'">';
            ?>
        </div>
    
        <div class="titulo-historico offset-lg-3 col-lg-6">
            <span>Receitas do Usuário</span>
        </div>

        <div class="container">
            <div class="row receitas-visualizadas">
                <?php
                    foreach ($banana as $value) {
                        echo "<div class='col-lg-4 col-12>";
                        echo "<a href='receita.php?id=".$value["CodRec"]."'><img src='".$value["FotoRec"]."'></a>";
                        echo "<a href='receita.php?id=".$value["CodRec"]."'><span>".$value["NomeRec"]."</span></a>";
                        echo "</div>";
                    }
                ?>
            </div>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>
</body>
</html>