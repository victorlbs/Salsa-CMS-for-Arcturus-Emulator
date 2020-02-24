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
        <?php echo nome ?>: Produtos</title>
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
                            Produtos disponíveis
                        </div>
                        <div class="card-body">
                           

                            <?php SalsaConta::comprarpontos($conn) ?>
                    <ul class="list-group" style="margin-bottom: 20px">
                        <li class="list-group-item" style="height: 100px; background: url(https://images.habbo.com/web_images/habbo-web-articles/lpromo_gen15_79.png) center no-repeat">
                                                    </li>
                        <li class="list-group-item" style="font-size: 18px">
                            <b>1.000 placar de conquistas</b> <span style="color: #6c757d; float: right; font-size: 15px">500.000 créditos</span>
                        </li>
                        <li class="list-group-item" style="color: #6c757d; font-size: 13px; text-align: center">
                            Aumentará o seu placar de conquista agregando mil pontos                     </li>
                        <li class="list-group-item">
                                                        <a style="color: white;" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-block">Comprar</a>
                                                    </li>
                    </ul>

                        </div>
                    </div>
                </div>

            
                    <!-- /// -->

                    <div id="caixa-inv"></div>
                    <div id="caixa-inv"></div>


                    

                <div id="caixa-inv"></div>
                <div class="col-sm-4">
                    <div id="redondo-cmc" class="card">
                        <div id="redondo" class="p-3 mb-2 bg-dark text-white">Produtos
                        </div>
                        <div class="card-body">
                           Você pode comprar produtos por créditos, referidos, duckets ou diamantes nesta página. Os produtos ficam disponíveis por tempo limitado. <br>

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

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deseja continuar a operação?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Você está prestes a comprar: <b>1.000 pontos de placar de conquistas</b> que custará 500.000 moedas, deseja continuar?
      </div>
      <div class="modal-footer">
        <form method="POST">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" name="comprar" class="btn btn-primary">Continuar</button>
    </form>
      </div>
    </div>
  </div>
</div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>