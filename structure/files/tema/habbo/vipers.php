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
        <?php echo nome ?>: Usuários VIP</title>
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
                <div class="col-sm-8">
                    <div id="redondo-cmc" class="card">
                        <div id="redondo" class="p-3 mb-2 bg-dark text-white">
                            Usuários VIP's
                        </div>
                        <div class="card-body">
                            <?php
                                $sql3 = "SELECT * FROM users WHERE rank='3'";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>

                            <div class="card">
                                <a href="/perfil?=<?php echo $row2['username'] ?>">
                                <h5><?php echo $row2['username'] ?></h5>
                            </a>
                                <hr>
  <div class="card-body">
   <ul class="list-group list-group-horizontal-md">
  <li class="list-group-item">
      <img src="<?php echo $config['site.avatar'] ?><?php echo $row2['look'] ?>">
  </li>
  <li class="list-group-item"><b>Missão:</b> <?php echo fs($row2['motto']) ?></li>
  <li class="list-group-item"><b>Discord:</b> <?php echo fs($row2['discord']) ?></li>
</ul>
  </div>
</div>
<div id="caixa-inv"></div>
                    <div id="caixa-inv"></div>
<?php } ?>

                        </div>
                    </div>
                </div>

            
                    <!-- /// -->

                    <div id="caixa-inv"></div>
                    <div id="caixa-inv"></div>


                    

                <div id="caixa-inv"></div>
                <div class="col-sm-4">
                    <div id="redondo-cmc" class="card">
                        <div id="redondo" class="p-3 mb-2 bg-dark text-white">VIP's
                        </div>
                        <div class="card-body">
                           Usuários VIP's são membros que pagaram para ter um benefício dentro e/ou fora do Hotel. Você pode ver os planos VIP na nossa página de produtos. <br>

                        </div>
                    </div>

                    <div id="caixa-inv"></div>
                    <div id="caixa-inv"></div>

                    <div id="redondo-cmc" class="card">
                        <div id="redondo" class="p-3 mb-2 bg-dark text-white">Siga nós no Facebook
                        </div>
                        <div class="card-body">
                            <div id="fb-root"></div>
                            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v6.0"></script>
                            <div class="fb-page" data-href="<?php echo $config['tema.facebook'] ?>" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                <blockquote cite="<?php echo $config['tema.facebook'] ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo $config['tema.facebook'] ?>">Facebook</a></blockquote>
                            </div>
                        </div>
                    </div>

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