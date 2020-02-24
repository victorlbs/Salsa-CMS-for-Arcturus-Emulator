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
        <?php echo usuario ?>: Principal</title>
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
                <div class="col-sm-4">
                    <div id="redondo-cmc" class="card">
                        <div id="redondo" class="p-3 mb-2 bg-dark text-white">
                            <?php echo usuario ?>
                        </div>
                        <div class="card-body">

                            <img id="mv" alt="Este é você!" src="<?php echo $config['site.avatar'] ?><?php echo $rpns ?>">
                            <form method="post" action="/client">
                            <button id="redondo-cmc" type="submit" class="btn btn-success">Entrar no <?php echo nome ?></button>
                            </form>

                            </form>
                            <div id="caixa-inv"></div>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">Missão:</span>
                                </div>
                                <input type="text" disabled="" class="form-control" placeholder="<?php echo fs($user_missao) ?>" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>

                            <div id="caixa-inv"></div>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">Créditos:</span>
                                </div>
                                <input type="text" disabled="" class="form-control" placeholder="<?php echo $user_creditos ?>" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>

                            <div id="caixa-inv"></div>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">Último login:</span>
                                </div>
                                <input type="text" disabled="" class="form-control" placeholder=" <?php echo date('d/m/Y', $user_login) ?>" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>

                            <div id="caixa-inv"></div>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">Eventos ganhos:</span>
                                </div>
                                <input type="text" disabled="" class="form-control" placeholder=" <?php echo $user_eventos ?>" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>

                            <div id="caixa-inv"></div>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">Promoções ganhas:</span>
                                </div>
                                <input type="text" disabled="" class="form-control" placeholder=" <?php echo $user_eventos ?>" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>

                        </div>

                    </div>

                     <div id="caixa-inv"></div>
                      <div id="caixa-inv"></div>

                     <div class="col-sm">

                     <div id="redondo-cmc" class="card">
                        <div id="redondo" class="p-3 mb-2 bg-dark text-white">Última notícias
                        </div>

                        <?php
      $sql = "SELECT * FROM cms_news order by id DESC LIMIT 1";
      $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
      $row = $query->fetch_assoc();
      {
        ?>

                            <a href="/noticia?=<?php echo $row['id'] ?>" target="_blank">

                                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>

                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="<?php echo $row['image'] ?>" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5><?php echo $row['title'] ?></h5>
                                                <p>
                                                    <?php echo $row['shortstory'] ?>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                            </a>
                             <?php
                            $sqlss = "SELECT * FROM cms_news order by id DESC LIMIT 6";
      $query_ss = mysqli_query($conn, $sqlss) or die(mysqli_error($conn));
      while($rowss = $query_ss->fetch_assoc())
      {
        ?>

        <ul class="list-group">
            <a href="/noticia?=<?php echo $rowss['id'] ?>">
  <li class="list-group-item"><?php echo $rowss['title'] ?></li>
</a>
</ul>


    <?php } ?>
                            <div id="caixa-inv"></div>
                            <div id="caixa-inv"></div>
                            </div>
                            <?php } ?>
                  
                </div></a></div>


                     </div>



               

                <div id="caixa-inv"></div>
                <div class="col-sm">
                   <div id="redondo-cmc" class="card">
                        <div id="redondo" class="p-3 mb-2 bg-dark text-white">Receba recompensas 
                        </div>
                        <div class="card-body">
                            Convide seus amigos para o <?php echo nome ?> e receba recompensas por isso! É isso mesmo que você acabou de ler, você pode receber recompensas por chamar seus amigos para jogar <?php echo nome ?>, você pode ganhar: Diamantes, raros, emblemas exclusivos, roupas exclusivas, e destaque no Hall da fama. Quanto mais referidos você tiver, mais prêmios você pode coletar. Para participar é simples: Divulgue o link abaixo em suas redes sociais, seus amigos irão se registrar por ele, assim contabilizando um ponto por pessoa. Você pode trocar seus pontos na página Recompensas. Comece agora!
                            <br>

                            <label>Seu link de referidos:</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">Copie:</span>
                                </div>
                                <input type="text" disabled="" class="form-control" placeholder="<?php echo url ?>/convite?=<?php echo usuario ?>" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
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
<div class="fb-page" data-href="<?php echo $config['tema.facebook'] ?>" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="<?php echo $config['tema.facebook'] ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo $config['tema.facebook'] ?>">Facebook</a></blockquote></div>
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