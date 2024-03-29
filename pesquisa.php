<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src='https://kit.fontawesome.com/05b9e3a650.js' crossorigin='anonymous'></script>
    <script src='script/limitdesc.js' defer></script>

    <link rel="stylesheet" href="css/css_base.css">
    <link rel="stylesheet" href="css/css_pesquisa.css">
</head>
<body>
    <div class="resultados container" id="resultado-pesquisa">
    <?php
    include_once "header.php";
    include_once 'initialize.php';
    if(isset($_POST['btn-pesquisa'])):
        include_once './initialize.php';
        $post = new Post($db);
        $banana = $post -> pesquisaReceita($_POST['input-pesquisa']);
        
        foreach ($banana as $value) {
            echo'<div class="recdiv">';
                echo '<div class="row receita offset-lg-2 col-lg-8 offset-1 col-10">';

                    echo '<div class="col-lg-2 col-4 row g-0">';
                        echo "<a href='receita.php?id=".$value["CodRec"]."'><img class='imgRec' src='". $value['FotoRec']."'></a>";
                    echo '</div>';

                    echo '<div class="offset-lg-1 col-lg-9 offset-1 col-5">';
                        echo "<a href='receita.php?id=".$value["CodRec"]."'><h3 class='titulorec'>".$value['NomeRec']."</h3></a>";
                        echo '<span id="descrec" class="descrec">'.$value['descricao'].'</span>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
          }
        endif;
    ?>
    </div>
    <?php
    include_once "footer.php";
    ?>
</body>

</html>