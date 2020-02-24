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
        <?php echo nome ?>: Hall da Fama</title>
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
        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-4">

                    <div class="card-body">

                        <div id="redondo-cmc" class="card">
                            <div id="redondo" class="p-3 mb-2 bg-dark text-white">Referidos</div>
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
    if ($row2['referidos'] == 1) {
?>
                                                Possui <b><?php echo $row2['referidos'] ?></b> crédito.

                                                <?php
    } elseif ($row2['referidos'] > 1) {
?>
                                                    Possui <b><?php echo $row2['referidos'] ?></b> créditos.
                                                    <?php
    } else {
        echo 'Não possui nenhum valor.';
    }
?>
                                        </div>
                                    </div>

                                    <?php
} ?>
                            </div>
                        </div>

                    </div>

                </div>





                <div class="col-sm-4">

                    <div class="card-body">

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
    } else {
        echo 'Não possui nenhum valor.';
    }
?>
                                        </div>
                                    </div>

                                    <?php
} ?>
                            </div>
                        </div>

                    </div>

                </div>



                <div class="col-sm-4">

                    <div class="card-body">

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
    } else {
        echo 'Não possui nenhum valor.';
    }
?>
                                        </div>
                                    </div>

                                    <?php
} ?>
                            </div>
                        </div>

                    </div>

                </div>





                <div class="col-sm-4">

                    <div class="card-body">

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
    } else {
        echo 'Não possui nenhum valor.';
    }
?>
                                        </div>
                                    </div>

                                    <?php
} ?>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="card-body">

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
    } else {
        echo 'Não possui nenhum valor.';
    }
?>
                                        </div>
                                    </div>

                                    <?php
} ?>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-sm-4">

                    <div class="card-body">

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
                                                Ganhou uma promoção.

                                                <?php
    } elseif ($row2['pontos_promocao'] > 1) {
?>
                                                    Ganhou <b><?php echo $row2['pontos_promocao'] ?></b> promoções.
                                                    <?php
    } else {
        echo 'Não possui nenhum valor.';
    }
?>
                                        </div>
                                    </div>

                                    <?php
} ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        </div>
        </div>

        </div>

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