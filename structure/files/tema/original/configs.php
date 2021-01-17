<?php
$titulo = "".usuario.":  Configurações - ".nome."";
include 'header.php';
 $sql3 = "SELECT * FROM users WHERE username='" . usuario . "'";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
       $missao = $row2['motto']; 
       $email = $row2['mail'];
       $dc = $row2['discord'];
       $capa = $row2['capa'];
    }
    ?>

    <div class="container ng-scope" ng-controller="configController">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <div class="list-group" style="margin-bottom: 20px">
                    <div class="list-group-item list-header">Sobre</div>
                    <div class="list-group-item config-controller open" data-target="#config">
                        Hey
                        <?php echo usuario ?>, Nesta aba você pode alterar as configurações do seu Perfil. Sua missão e seu Discord ficarão públicos no seu perfil.
                    </div>

                </div>
            </div>
            <div class="col-md-7">
                <div id="alerts">
                    <div class="alert alert-primary" role="alert">
                    <?php 

                SalsaConta::configuracoes($conn);
                if (isset($_SESSION['erro']))
                        {
                            echo $_SESSION['erro'];
                            unset($_SESSION['erro']);
                        } ?>
                    </div>
                </div>
                <div id="config" class="config-tab list-group open" style="">
                    <div class="list-group-item list-header">Configurações</div>
                    <div class="list-group-item">
                        <form method="post" class="ng-pristine ng-valid">
                            <div class="custom-control custom-switch">

                                <b>Missão:</b>
                                <br>
                                <input type="text" class="form-control" name="missao" value="<?php echo $missao ?>" aria-label="Username" aria-describedby="basic-addon1">
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

                            </div>
                            <hr>
                            <button type="submit" name="enviar" class="btn btn-success" style="float: right">Salvar</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <style type="text/css">
        .salsa {
            height: 300px;
        }
    </style>
    <div class="salsa"></div>
    <div style="font-weight: 14px;background: #1e262c; padding: 10px;border-top: 4px solid #1b2228;margin-top: 30px">
        <div class="container">

            <span style="color:#a7a7a7">
            © 2019 - <?php echo ano ?> Rede <?php echo nome ?> Corporation Ltd. Todos os direitos reservados.
               Powered by <a style="color: white;" target="_blank" href="https://github.com/victorlbs/Salsa-CMS---CMS-for-Arcturus-Emulator"><b>Salsa CMS</b></a>
                                                    </span>
        </div>
    </div>

    </body>

    </html>