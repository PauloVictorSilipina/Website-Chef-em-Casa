<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="css/css_header.css">
<?php
session_start();
?>
<nav class="cabecalho navbar navbar-expand-lg sticky-top">
    <div class="col-lg-12 col-12">
        <div class="row">

            <button class="navbar-toggler col-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <i class="fa-solid fa-bars fa-xl"></i>
            </button>

            <div class="div-logo col-lg-2 col-6">
                <a href="index.php"><span class="offset-lg-2">Chef em Casa</span></a>
            </div> 
            <div class="div-pesquisa col-12 col-lg-6 offset-lg-1 row no-gutters"  id="div-pesquisa">
                <form class="col-lg-12 row no-gutters" action="pesquisa.php" method="post">
                    <input name="input-pesquisa" type="text" placeholder="Digite uma receita" id="input-pesquisa" class="input-pesquisa col-7 offset-1 col-lg-10 offset-lg-0">
                    <button name="btn-pesquisa" type="submit" id="btn-pesquisa" class="btn-pesquisa col-4 col-lg-2"><i class="fa-solid fa-magnifying-glass fa-xl"></i></button>
                </form>
            </div>


            <div class="menu collapse navbar-collapse col-lg-2 offset-lg-1" id="navbarSupportedContent">
                <a href="cadreceita.php"><i class="fa-solid fa-plus fa-xl"></i></a>
                <div class="dropdown">

                <?php
                if (isset($_SESSION['img_path'])) {
                    $img_path = $_SESSION['img_path'];
                    $caminho_pagina = 'perfil.php';
                    // Agora, $img_path contém o caminho da imagem
                } else {
                    $img_path = 'img/icon.png';
                    $caminho_pagina = 'cadastro.php';
                }

                    echo '<button class="dropbtn"><a href="' . $caminho_pagina . '"><img class="header-perfil" src="' . $img_path . '"></img></a></button>';
                    if (isset($_SESSION['user_id'])) {
                        // Se o usuário estiver logado, mostrar o botão de logout
                        echo '<div class="dropdown-content">';
                        echo '<a href="logout.php">Sair</a>';
                        echo '</div>';
                    } else {
                        // Se o usuário não estiver logado, mostrar os links de cadastro e login
                        echo '<div class="dropdown-content">';
                        echo '<a href="cadastro.php">Cadastrar</a>';
                        echo '<a href="login.php">Entrar</a>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="espaco"></div>