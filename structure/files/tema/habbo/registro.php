<?php SalsaConta::registrar($conn) ?>
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
            <?php echo nome ?>: Criar um avatar</title>
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
                <div class="col-sm-5">
                    <div id="redondo-cmc" class="card">
                        <div id="redondo" class="p-3 mb-2 bg-dark text-white">Criar uma conta</div>
                        <div class="card-body">

                            <?php
                            if (isset($_SESSION['erro']))
                            {
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
                                        <input maxlength="13" required="" type="text" name="usuario_salsa" class="form-control" placeholder="Crie um nickaname..." aria-label="Username" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">E-mail</span>
                                        </div>
                                        <input required="" type="email" name="email" class="form-control" placeholder="Digite um e-mail válido..." aria-label="Username" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Senha</span>
                                        </div>
                                        <input required="" type="password" name="senha_salsa" class="form-control" placeholder="Digite sua senha..." aria-label="Username" aria-describedby="basic-addon1">
                                    </div>

                                     <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Repita a Senha</span>
                                        </div>
                                        <input required="" type="password" name="senha_repetir" class="form-control" placeholder="Repita sua senha..." aria-label="Username" aria-describedby="basic-addon1">
                                    </div>




                                    <?php if (captcha == 1){
                                    $salgcpa = rand(1000, 9000);
                                ?>


                                <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Digite o captcha: <?php echo $salgcpa ?></span>
                                        </div>
                                        <input maxlength="4" required="" type="text" name="captcha_repetir" class="form-control" placeholder="Digite o captcha" aria-label="" aria-describedby="basic-addon1">
                                    </div>
                                    <input hidden="" value="<?php echo $salgcpa ?>" type="text" class="form-control" name="captcha" id="captcha">
                               



                            <?php } ?>







                                    <div class="btn-group-vertical">
                                        <input type="submit" value="Criar meu avatar!" name="registrar" class="btn btn-dark">
                                    </div>
                                </form>

                        </div>
                    </div>
                </div>





                <div class="col-sm">
                    <div id="redondo-cmc" class="card">
                        <div id="redondo" class="p-3 mb-2 bg-dark text-white">Você está prestes a entrar num mundo de diversão
                        </div>
                        <div class="card-body">
                            <div class="row">
                               <p>Você está prestes a se registrar no melhor Hotel do Brasil, você sempre será bem  vindo no <?php echo nome ?>. O registro no Hotel é bem simples, você precisa escolher um <i>apelido</i> (usuário) que será seu nome no jogo, precisará inserir seu <i>e-mail</i> para nós enviarmos um código de recuperação de senha caso você perca sua conta, precisará inserir uma <i>senha</i> para logar em sua conta sempre que quiser. A última etapa é chamada de <i>Captcha</i> para verificarmos se você não é um robô.


                                <br><br><br>
                                <img  src="https://1.bp.blogspot.com/-OxfQJjs6oLQ/XEjB2VM8-FI/AAAAAAABKe4/na8IPPzw6T0EDl7xYUo-oTLbrdmxhxJZACKgBGAs/s1600/tablet.png">

                             </p>


                               


                            </div>
                        </div>
                        <div id="caixa-inv"></div>
                        <div id="caixa-inv"></div>
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