<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ' crossorigin='anonymous'>    
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src='https://kit.fontawesome.com/05b9e3a650.js' crossorigin='anonymous'></script>
    
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe' crossorigin='anonymous' defer></script>

    <link rel='stylesheet' href='css/css_contato.css'>
    <link rel='stylesheet' href='css/css_base.css'>
    
    <title>Chef em Casa</title>
</head>

<body class='d-flex flex-column min-vh-100'>
    <?php
    include 'header.php';
    ?>

    <!--container para a imagem à esquerda com o chef-->


    <div class='container-fluid div-container'>
        <div class='row'>
            <div class='col-lg-3 offset-lg-2 div-chef'>
                <img src='img/chef.png'>
            </div>
    
            
            <div class='col-lg-3 offset-lg-2 div-formulario'>
                <form action=''>
                    <h2 class='col-10 offset-1'>Fale conosco</h2>
                    <div class='nome'>
                        <label for='nome' class='col-9 offset-1'>Nome</label>
                        <input type='text' id='nome' placeholder='Digite seu nome' class='col-10 offset-1' maxlength='50' name='nome'>
                    </div>
                    <div class='mensagem'>
                        <label for='message' class='col-9 offset-1'>Mensagem</label>
                        <textarea type='text' id='message' placeholder='Digite sua mensagem' class='col-10 offset-1' name='mensagem'></textarea>
                    </div>
                    <div class=''>
                        <button class='btn-enviar col-10 offset-1' type='submit' name='enviar'>Enviar</button>
                    </div>
                </form>
    
            </div>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>
</html>