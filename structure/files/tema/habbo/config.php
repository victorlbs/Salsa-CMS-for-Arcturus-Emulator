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
        <?php echo usuario ?>: Configurações</title>
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
                            Configurações
                        </div>
                        <div class="card-body">

                            Nesta página você poderá alterar os dados da sua conta. Sua missão e seu Discord ficarão públicos no seu perfil.

                        </div>

                    </div>

                    <?php
                    $sql3 = "SELECT * FROM users WHERE username='" . usuario . "'";
                    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
                    $row2 = $query1->fetch_assoc();
                    {
                    $missao = $row2['motto']; 
                    $email = $row2['mail'];
                    $dc = $row2['discord'];
                    $capa = $row2['capa'];
                    }
                    ?>

                     <div id="caixa-inv"></div>
                      <div id="caixa-inv"></div>

                    


                     </div>



               

                <div id="caixa-inv"></div>
                <div class="col-sm">
                   <div id="redondo-cmc" class="card">
                        <div id="redondo" class="p-3 mb-2 bg-dark text-white">Alterar dados
                        </div>
                        <div class="card-body">

                             <?php 
                            SalsaConta::configuracoes($conn);
                            if (isset($_SESSION['erro'])){
                              echo '<div class="alert alert-primary" role="alert">';
                              echo $_SESSION['erro'];
                              unset($_SESSION['erro']);
                              echo '</div>';
                            }
                            ?>

                            <form method="post">

                             <b>Missão:</b>
                                <br>
                                <input maxlength="12" type="text" class="form-control" name="missao" value="<?php echo $missao ?>" aria-label="Username" aria-describedby="basic-addon1">
                                <br>
                                <b>E-mail:</b>
                                <br>
                                <input type="text" class="form-control" name="email" value="<?php echo $email ?>" aria-label="Username" aria-describedby="basic-addon1">
                                <br>
                                <b>Seu discord:</b>
                                <br>
                                <input type="text" class="form-control" name="discord" value="<?php echo $dc ?>" aria-label="Username" aria-describedby="basic-addon1">
                                <br>
                                <b>Sua capa de perfil (Apenas imagens com finais .png, .gif):</b>
                                <br>
                                <input type="text" class="form-control" name="capa" value="<?php echo $capa ?>" aria-label="Username" aria-describedby="basic-addon1">

                                <input type="text" class="form-control" hidden="" name="confirmacao" value="<?php echo $email ?>" aria-label="Username" aria-describedby="basic-addon1">
                                <br>

                                <button type="submit" name="enviar" class="btn btn-success" style="float: right">Salvar</button>


                            </form>
                           


                        </div>
                    </div>


                    <div id="caixa-inv"></div>
                    <div id="caixa-inv"></div>



                








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