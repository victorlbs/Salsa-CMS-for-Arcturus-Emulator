<?php SalsaConta::conectar($conn) ?>
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
            <?php echo nome ?>: Faça amigos, construa quartos & divirta-se!</title>
    </head>

    <body>

        <div id="inicio">
            <div id="caixa-inv"></div>
            <img src="<?php echo logo ?>">
            <div id="quebra"></div>
            <span class="badge badge-light"><img src="https://i.imgur.com/H0RMaEF.png"> Há <?php echo SalsaDado::usuarios_online($conn) ?> usuários online</span>
        </div>

        <nav id="sombra" class="navbar navbar-expand-lg navbar-light bg-light">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="/#">  Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/registro">Criar uma conta</a>
                    </li>

                </ul>
            </div>
        </nav>
        <div id="caixa-inv"></div>
        <div id="caixa-inv"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div id="redondo-cmc" class="card">
                        <div id="redondo" class="p-3 mb-2 bg-dark text-white">Faça login</div>
                        <div class="card-body">

<?php
if (isset($_SESSION['erro'])) {
    echo '<div class="alert alert-danger" role="alert">';
    echo $_SESSION['erro'];
    unset($_SESSION['erro']);
    echo '</div>';
}
?>

                                <form method="post">

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Usuário</span>
                                        </div>
                                        <input required="" type="text" name="usuario_salsa" class="form-control" placeholder="Digite seu usuário..." aria-label="Username" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Senha</span>
                                        </div>
                                        <input required="" type="password" name="senha_salsa" class="form-control" placeholder="Digite sua senha..." aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="btn-group-vertical">
                                        <input type="submit" value="Entrar" name="conectar" class="btn btn-dark">
                                    </div>
                                </form>

                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div id="redondo-cmc" class="card">
                        <div id="redondo" class="p-3 mb-2 bg-dark text-white">Saiba mais sobre
                            <?php echo nome ?>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">O que é <?php echo nome ?>?</a>
                                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Promoções</a>
                                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Eventos</a>

                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            O
                                            <?php echo nome ?> é um Habbo Pirata virtual, você começa com
                                                <?php echo $config['registro.creditos'] ?> moedas para gastar como quiser, dentro do Hotel você pode construir quartos, fazer amigos, participar de eventos oficiais, colecionar itens raros e diversas coisas que você só irá descobrir ao criar uma conta. Crie sua conta agora mesmo e comece hoje sua diversão.
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">Você pode participar de diversas promoções que são feitas pela Equipe do Hotel, caso você ganhe uma poderá ser recompensado e o seu trabalho divulgado na página de notícias.</div>
                                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">Todos os dias no Hotel possuem eventos divertidos que você pode participar sempre que quiser, os eventos possuem recompensas super legais, você não vai ficar de fora né?</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="caixa-inv"></div>
                        <div id="caixa-inv"></div>
                    </div>
                </div>

            </div>

            <div id="caixa-inv"></div>
            <div id="caixa-inv"></div>

            <div class="row">
                <div class="col-sm-4">
                    <div id="redondo-cmc" class="card">
                        <div id="redondo" class="p-3 mb-2 bg-dark text-white">Notícias
                        </div>
                        <div class="card-body">
                            Fique sempre ligado na página de notícias para sempre ficar por dentro das novidades dentro do Hotel. Na página de notícias também rolam promoções super divertidas que são recompensadas, você pode ganhar: moedas, diamantes, raros, emblemas e sempre ganhará um ponto no Hall da Fama. Confira agora mesmo qual a promoção que está rolando na página promoções ativas.
                        </div>
                    </div>

                </div>

                <div class="col-sm">
                    <div id="redondo-cmc" class="card">
                        <div id="redondo" class="p-3 mb-2 bg-dark text-white">Última notícia
                        </div>

                        <?php
$sql = "SELECT * FROM cms_news order by id DESC LIMIT 1";
$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$row = $query->fetch_assoc(); {
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
                            <div id="caixa-inv"></div>
                            <div id="caixa-inv"></div>
                            </div>
                            <?php
} ?>

                    </div>
                </div>

            </div>

            <div id="caixa-inv"></div>
            <div id="caixa-inv"></div>

            <div class="row">
                <div class="col-md-4">
                    <div id="redondo-cmc" class="card">
                        <div id="redondo" class="p-3 mb-2 bg-dark text-white">Promoções
                        </div>
                        <div class="card-body">

                            <?php
$sql3 = "SELECT * FROM users order by pontos_promocao DESC LIMIT 6";
$query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
while ($row2 = $query1->fetch_assoc()) {
?>

                                <div class="list-group-item feed-item" style="padding-bottom: 0px">
                                    <div class="feed-item-image" style="height: 60px; background-image: url(<?php echo $config['site.avatar'] ?><?php echo $row2['look'] ?>&size=m&amp;head_direction=2&amp;gesture=sml)"></div>
                                    <div class="feed-item-body">
                                        <div class="feed-item-title">
                                            <a href="/perfil?=<?php echo $row2['username'] ?>">
                                                <b><?php echo $row2['username'] ?></b>
                                            </a>
                                        </div>
                                        <?php
    if ($row2['pontos_promocao'] == 1) {
?>
                                            Ganhou <b><?php echo $row2['pontos_promocao'] ?></b> promoção.

                                            <?php
    } elseif ($row2['pontos_promocao'] > 1) {
?>
                                                Ganhou <b><?php echo $row2['pontos_promocao'] ?></b> promoções.
                                                <?php
    } ?>
                                    </div>
                                </div>

                                <?php
} ?>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div id="redondo-cmc" class="card">
                        <div id="redondo" class="p-3 mb-2 bg-dark text-white">Eventos
                        </div>
                        <div class="card-body">

                            <?php
$sql3 = "SELECT * FROM users order by pontos_evento DESC LIMIT 6";
$query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
while ($row2 = $query1->fetch_assoc()) {
?>

                                <div class="list-group-item feed-item" style="padding-bottom: 0px">
                                    <div class="feed-item-image" style="height: 60px; background-image: url(<?php echo $config['site.avatar'] ?><?php echo $row2['look'] ?>&size=m&amp;head_direction=2&amp;gesture=sml)"></div>
                                    <div class="feed-item-body">
                                        <div class="feed-item-title">
                                            <a href="/perfil?=<?php echo $row2['username'] ?>">
                                                <b><?php echo $row2['username'] ?></b>
                                            </a>
                                        </div>
                                        <?php
    if ($row2['pontos_evento'] == 1) {
?>
                                            Ganhou <b><?php echo $row2['pontos_evento'] ?></b> evento.

                                            <?php
    } elseif ($row2['pontos_evento'] > 1) {
?>
                                                Ganhou <b><?php echo $row2['pontos_evento'] ?></b> eventos.
                                                <?php
    } ?>

                                    </div>
                                </div>

                                <?php
} ?>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div id="redondo-cmc" class="card">
                        <div id="redondo" class="p-3 mb-2 bg-dark text-white">Créditos
                        </div>
                        <div class="card-body">

                            <?php
$sql3 = "SELECT * FROM users order by credits DESC LIMIT 6";
$query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
while ($row2 = $query1->fetch_assoc()) {
?>

                                <div class="list-group-item feed-item" style="padding-bottom: 0px">
                                    <div class="feed-item-image" style="height: 60px; background-image: url(<?php echo $config['site.avatar'] ?><?php echo $row2['look'] ?>&size=m&amp;head_direction=2&amp;gesture=sml)"></div>
                                    <div class="feed-item-body">
                                        <div class="feed-item-title">
                                            <a href="/perfil?=<?php echo $row2['username'] ?>">
                                                <b><?php echo $row2['username'] ?></b>
                                            </a>
                                        </div>
                                        <?php
    if ($row2['credits'] == 1) {
?>
                                            Possui <b><?php echo $row2['credits'] ?></b> crédito.

                                            <?php
    } elseif ($row2['credits'] > 1) {
?>
                                                Possui <b><?php echo $row2['credits'] ?></b> créditos.
                                                <?php
    } ?>
                                    </div>
                                </div>

                                <?php
} ?>
                        </div>
                    </div>
                </div>

            </div>


            <div id="caixa-inv"></div>
            <div id="caixa-inv"></div>
            <div id="caixa-inv"></div>
            <div id="caixa-inv"></div>
            <hr>

            <center>
              <a href="/">Início</a> | <a href="/registro">Criar uma conta</a> | <a href="/noticia?=1">Notícias</a> |
              <a href="<?php echo $config['tema.facebook'] ?>">Facebook</a> | <a href="<?php echo $config['tema.discord'] ?>">Discord</a> | <a href="<?php echo $config['tema.twitter'] ?>">Twitter</a> <br>


              ©  <?php echo nome . ' ' . ano ?> - Todos os direitos reservados. <b>Powered by <a href="https://github.com/victorlbs/Salsa-CMS-for-Arcturus-Emulator"> Salsa CMS</a></b></center>

            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

    </html>