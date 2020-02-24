<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css/Bootstrap.css" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css/Geral.css?<?php echo time() ?>" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/fontawesome.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/fontawesome.min.css" />

    <title>
        404 - Página não encontrada</title>
</head>

<body>

    <div id="inicio">
        <div id="caixa-inv"></div>
        <img src="<?php echo logo ?>">
        <div id="quebra"></div>
        <span class="badge badge-light"><img src="https://i.imgur.com/H0RMaEF.png"> Há <?php echo SalsaDado::usuarios_online($conn) ?> usuários online</span>
    </div>

    <?php include 'menu.php' ?>
        <div id="caixa-inv"></div>
        <div id="caixa-inv"></div>
        <div class="container">
            <div class="row">
               <div style="width: 40px; height: 40px; float: left; margin-right: 10px">
            <img src="https://3.bp.blogspot.com/-BJqpey89j-8/WUoLYCvCkwI/AAAAAAAA5MM/-sfTRmp4V0MgJFj7agE7fY6UZ3TF15U8gCKgBGAs/s1600/BR656.gif" style="float:left">
        </div>
        <div style="width: calc(100% - 50px); float: right">
            <h5 style="color:#1e262c;font-weight: bold;margin-top:0px; margin-bottom: 0px">404...</h5>
            <div style="color: #8f9396;font-weight: normal; font-size: 15px; margin-bottom: 10px">Não foi possível encontrar a página que você solicitou, por gentileza verifique se inseriu o URL correto e tente novamente.
                <br>
                <a href="/">Voltar</a></div>
        </div>
               </div>

            <div id="caixa-inv"></div>
            <div id="caixa-inv"></div>
            </div>
            <div id="caixa-inv"></div>
            <div id="caixa-inv"></div>
            <hr>

            <center>
                <a href="/">Início</a> | <a href="/registro">Criar uma conta</a> | <a href="/noticia?=1">Notícias</a> |
                <a href="<?php echo $config['tema.facebook'] ?>">Facebook</a> | <a href="<?php echo $config['tema.discord'] ?>">Discord</a> | <a href="<?php echo $config['tema.twitter'] ?>">Twitter</a>
                <br> ©
                <?php echo nome . ' ' . ano ?> - Todos os direitos reservados. <b>Powered by <a href="https://github.com/victorlbs/Salsa-CMS-for-Arcturus-Emulator"> Salsa CMS</a></b></center>

            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>