<?php
$vlsalsa = 0;
$qra        = "SELECT * FROM users WHERE username='".$noticiafinal."' order by id DESC LIMIT 1";
if ($ra = mysqli_query($conn, $qra)) {
$existe = mysqli_num_rows($ra);
if ($existe == $vlsalsa) {
header("Location: /".$config['404page']."");
}
mysqli_free_result($ra);
}
$sql3 = "SELECT * FROM users WHERE username='".$noticiafinal."' order by id DESC LIMIT 1";
$query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
while ($row3 = $query1->fetch_assoc()) {
$titulo = "Perfil de ".$row3['username']." - ".nome."";
include 'header.php';
?>

    <div class="container">

        <div class="row">

            <div class="col-md-8">
                <div class="panel panel-primary">

                    <div class="panel-heading" style="border-radius:5px;background-image: url(https://1.bp.blogspot.com/-TSg7lycMl9Q/WebEo6AfQjI/AAAAAAAA-pc/8hZWFHnZNEE-X6bNChnidhv4dpii3RFKgCKgBGAs/s1600/hipad_large_promo.png); background-position: center; padding-top: 20px; ">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="media">

                                    <div class="media-left media-middle">
                                        <div style="background-image: url(<?php echo avatarimage ?><?php echo $row3['look'] ?>&amp;size=m&amp;direction=2&amp;head_direction=2&amp;gesture=sml&amp;size=l); background-position:  -50px; width:60px; height:80px;">

                                        </div>

                                    </div>

                                    <div class="media-body">
                                        <h4 class="media-heading" style="color: #fff; font-weight: bold;">
                                     <strong><?php echo $row3['username'] ?></strong>&nbsp;                                </h4>
                                        <font color="white"><?php echo fs($row3['motto'])      ?>         </font>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pull-right">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .more-less {
                        max-height: 400px;
                        overflow: hidden;
                        position: relative;
                    }
                    
                    .readMore {
                        position: absolute;
                        bottom: 0px;
                        z-index: 999;
                        display: none;
                        width: 100%;
                        background-color: #FFFFD9;
                        padding: 5px;
                        text-align: center;
                    }
                    
                    hr {
                        margin: 5px 0px 5px 0px;
                    }
                    
                    .fadeAe {
                        transition: 0.5s linear all;
                        -webkit-transition: 0.5s linear all;
                    }
                    
                    .fadeAe.ng-enter {
                        opacity: 0;
                    }
                    
                    .fadeAe.ng-enter.ng-enter-active {
                        opacity: 1;
                    }
                    
                    .fadeAe.ng-leave {
                        opacity: 1;
                    }
                    
                    .fadeAe.ng-leave.ng-leave-active {
                        opacity: 0;
                    }
                </style>

                <div ng-controller="gameController" class="ng-scope">

                    <div ng-show="loading === true &amp;&amp; newPostsCount > 0" class="text-center ng-hide" style="padding:20px;">
                        <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>
                    </div>

                    <!-- ngRepeat: post in posts| orderBy:'-id' track by $index -->

                    <!-- Modal -->
                    <div class="modal fade" id="prepareShare" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <form ng-submit="postShare()" class="ng-pristine ng-invalid ng-invalid-required">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Compartilhar publicação</h4>
                                    </div>
                                    <div class="modal-body">
                                        <textarea name="message" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" style="margin-bottom: 5px" ng-model="shareNewPost.message" required=""></textarea>
                                        <div id="modalPreview">
                                            <br>

                                            <div class="panel panel-default">
                                                <div class="panel-body" style="padding-top:5px;padding-bottom:7px;margin:0px;">
                                                    <small class="ng-binding"><a href="https://habbok.me/userpost?id=">Publicação</a> de 
                                    </small>
                                                    <br>
                                                    <span ng-bind-html="sharePost.content | trustAsHtml" class="ng-binding"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="pull-left">
                                            <select class="form-control ng-pristine ng-untouched ng-valid ng-not-empty" name="rank" ng-model="shareNewPost.rank" ng-init="shareNewPost.rank = '1'" style="width:150px">
                                                <option value="1" selected="">Publico</option>
                                                <option value="2">Amigos</option>
                                            </select>
                                        </div>
                                        <input name="action" type="hidden" value="habbinccms_share_post" ng-model="shareNewPost.action" ng-init="shareNewPost.action = 'habbinccms_share_post'" class="ng-pristine ng-untouched ng-valid ng-not-empty">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

                                        <button type="submit" class="btn btn-primary">Compartilhar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div ng-show="loading === true" class="text-center ng-hide" style="padding: 20px;">
                        <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>
                    </div>

                    <?php
if ($cur != null || $sessao != null || usuario != null)
{
    
    ?>

                    <?php SalsaConta::recado($conn); SalsaConta::adicionar_amigo($conn)  ?>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Deixar um recado para <?php echo $row3['username'] ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post">
                                            <textarea name="recado" placeholder="Digite aqui o recado..." class="form-control" aria-label="With textarea"></textarea>
                                            <input value="<?php echo $row3['username'] ?>" type="text" name="token" hidden="">
                                            <input value="<?php echo $row3['username'] ?>" type="text" name="token_salsa" hidden="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <input name="enviar" type="submit" class="btn btn-primary" value="Enviar">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="modal fade" id="Amizade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Enviar pedido de amizade para <?php echo $row3['username'] ?>?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post">
                                            Deseja realmente mandar uma solicitação de amizade para <?php echo $row3['username'] ?>?
                                            <input value="<?php echo $row3['id'] ?>" type="text" name="id" hidden="">
                                            <input value="<?php echo id ?>" type="text" name="id_dois" hidden="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <input name="enviaramizade" type="submit" class="btn btn-primary" value="Enviar pedido de amizade">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                        <center>
                        </center>
                        <br>

                        <div class="card">
                            <div class="list-group-item list-header">Recados para
                                <?php echo $row3['username'] ?>
                            </div>
                            <div class="card-body">

                                <?php
    $sql31 = "SELECT * FROM salsa_postagens WHERE donoperfil='".$row3['username']."' order by id DESC LIMIT 20";
$aa = mysqli_query($conn, $sql31) or die(mysqli_error($conn));
while ($bss = $aa->fetch_assoc()) {
    ?>

                                    <ul class="list-group">

                                        <li class="list-group-item">
                                            <div class="feed-item-image" style="background-image: url(<?php echo avatarimage ?><?php echo $bss['look'] ?>&size=m&headonly=1&head_direction=2&gesture=sml)"></div>
                                            <a href="/perfil?=<?php echo $bss['usuario'] ?>"> <b><?php echo $bss['usuario'] ?></b> </a><i>diz:</i>
                                            <?php echo fs($bss['mensagem']) ?>

                                                <div id="salsdiv" style="float: right;">
                                                    <img src="https://4.bp.blogspot.com/-0CuMZcPJZXY/XZVaFhMCKAI/AAAAAAABWaU/U6Jas6B8_H0FdAEc1g1Vc59DxBOHc93FwCKgBGAsYHg/s1600/Icon214.png"> Postado em
                                                    <?php echo date('d/m/Y', $bss['data']) . ' às ' . date('H:i:s', $bss['data']) ?>
                                                </div>

                                        </li>

                                    </ul>

                                    <br>

                                    <?php } ?>

                            </div>
                        </div>
                        </center>

                </div>
            </div>

            <div class="col-md-4">
                <!-- a href="/client" target="habbinc_client" class="btn btn-success btn-lg" style="margin-bottom:10px; font-size:20px; height:50px; width:100%" onclick_off="HabboClient.openOrFocus(this); return false;" target="clientHotel">Entrar no Hotel</a  -->

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="list-group-item list-header">Sobre</div>
                    </div>
                    <div class="list-group-item config-controller open" data-target="#config">

                        <?php
                    if ($row3['online'] == 1)
                        $sim = "sim";
                    else
                        $sim = "não";
                    ?>
                   
                    <?php
                        if (isset($_SESSION['erro']))
                        {
                            echo '<div class="alert alert-primary" role="alert">';
                            echo $_SESSION['erro'];
                            unset($_SESSION['erro']);
                            echo '</div>';
                        }
                        ?>
                            <!-- 001 -->
                            <img src="https://4.bp.blogspot.com/-ct-jJxeksOw/XZVaFuOjUwI/AAAAAAABWaU/aev-E83ONl4bMPaV9LlSHivFp7vDBlUhQCKgBGAsYHg/s1600/Icon14.png">
                            <b>Membro desde:</b>
                            <?php echo date('d/m/Y', $row3['account_created']) ?>
                                <br>
                                <!-- 001 -->

                                <!-- 001 -->
                                <img src="https://habboo-a.akamaihd.net/c_images/catalogue/icon_142.png">
                                <b>Último login:</b>
                                <?php echo date('d/m/Y', $row3['last_login']) ?>
                                    <br>
                                    <!-- 001 -->

                                    <!-- 001 -->
                                    <img src="https://4.bp.blogspot.com/-jnRT_Ue61O0/XZVaFvYsS3I/AAAAAAABWaU/LFfmD5Or3mIzwj3IeLsntcUXUr92jHJlgCKgBGAsYHg/s1600/Icon76.png">
                                    <b>Está online:</b>
                                    <?php echo $sim ?>
                                        <br>
                                        <!-- 001 -->

                                        <!-- 001 -->
                                        <img src="https://4.bp.blogspot.com/-Ul4YHCLf3fA/XZVaFsDQORI/AAAAAAABWaU/-sazdqyFAt4wYmnsSa3mHKYCEcdUjGKjQCKgBGAsYHg/s1600/Icon3.png">
                                        <b>Créditos:</b>
                                        <?php echo $row3['credits']?>
                                            <br>
                                            <!-- 001 -->

                                            <!-- 001 -->
                                            <img src="https://2.bp.blogspot.com/-xRvHc6jTz-g/XZVaFhr9eNI/AAAAAAABWaU/PtGdLf-yZ2AnHDoRDtRs-vN0Wm680fZLQCKgBGAsYHg/s1600/Icon315.png">
                                            <b>Missão:</b>
                                            <?php echo fs($row3['motto']) ?>
                                                <br>

                                                
                                            <!-- 001 -->

                                            <!-- 001 -->
                                            <img src="https://4.bp.blogspot.com/-opxiFJrR7p8/XZVaFjWpBAI/AAAAAAABWaU/vVbAzfkicbkx4d8QewXpmJeqc35I_UNaQCKgBGAsYHg/s1600/Icon84.png">
                                            <b>Pontos de promoção:</b>
                                            <?php echo fs($row3['pontos_promocao']) ?>
                                                <br>


                                                 <img src="https://2.bp.blogspot.com/-098Yeb26X6w/XZVaFlxo2bI/AAAAAAABWaU/b0KJ3x5wQMUCbHyJq-Lq6J2H61lvkVEtgCKgBGAsYHg/s1600/Icon306.png">
                                            <b>Eventos ganhos:</b>
                                            <?php echo fs($row3['pontos_evento']) ?>
                                                <br>


                                                <!-- 001 -->

                                                <!-- 001 -->
                                                <img src="https://2.bp.blogspot.com/-uEMyF4kRcE0/XZVaFvJ9qVI/AAAAAAABWaU/w5j7T0NwegYJf0E7wrW3sfDXopBqktdwQCKgBGAsYHg/s1600/Icon58.png">
                                                <b>Discord:</b>
                                                <?php echo fs($row3['discord']) ?>
                                                    <br>
                                                    <!-- 001 -->

                                                    <!-- 001 -->
                                                    <img src="https://1.bp.blogspot.com/-fwCjMfsN0ME/XZVaFgsShjI/AAAAAAABWaU/cT3cQUzCarQ80QItLkhiItWKMLA1TOZ1wCKgBGAsYHg/s1600/Icon29.png">
                                                    <b>Referidos:</b>
                                                    <?php echo fs($row3['referidos']) ?>
                                                        <br>
                                                        <!-- 001 -->

                                                        <?php
                    $idnovo = $row3['id'];
                    $a = "SELECT * FROM users_currency WHERE user_id='$idnovo' and type='5'";
                    $c = mysqli_query($conn, $a) or die(mysqli_error($conn));
                    while ($b = $c->fetch_assoc()) {
                        ?>
                                                            <!-- 001 -->
                                                            <img src="https://1.bp.blogspot.com/-IKbJ-qUn8EE/XZVaFmyA3AI/AAAAAAABWaU/NhWiOSXLkO4c5lBPDDaI4ChHH4XuSGj1QCKgBGAsYHg/s1600/Icon304.png">
                                                            <b>Diamantes:</b>
                                                            <?php echo $b['amount']?>
                                                                <br>
                                                                <!-- 001 -->
                                                                <?php } ?>

                    </div>
                </div>

                <br>
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <div class="list-group-item list-header">Emblemas de
                            <?php echo $row3['username'] ?>
                        </div>
                    </div>
                    <div class="list-group-item config-controller open" data-target="#config">
                        <?php
                    $idnovo = $row3['id'];
                    $as = "SELECT * FROM users_badges WHERE user_id='$idnovo'";
                    $ca = mysqli_query($conn, $as) or die(mysqli_error($conn));
                    while ($ba = $ca->fetch_assoc()) {
                        ?>

                            <img src="<?php echo urlemblemas ?><?php echo $ba['badge_code'] ?>.gif">
                            <?php } ?>
                    </div>
                </div>

                <br>
                <div class="panel-heading">
                    <div class="list-group-item list-header">Ações</div>
                </div>
                <div class="list-group-item config-controller open" data-target="#config">
<?php
if ($cur != null || $sessao != null || usuario != null)
{
    
    ?>
                    <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary">
                        Deixar um recado <span class="badge badge-light"><?php
  $sql="SELECT * FROM salsa_postagens WHERE donoperfil='".$row3['username']."' order by id";
  if ($result=mysqli_query($conn,$sql))
  {
  $rowcount=mysqli_num_rows($result);
  printf("%d\n",$rowcount);
  mysqli_free_result($result);
  }
  ?></span>
                    </button>
                    <br>

                    <br>

                    <?php if (id != $row3['id'])
                    {
                        ?>
                      <button type="button" data-toggle="modal" data-target="#Amizade" class="btn btn-primary">
                        Enviar pedido de amizade para <?php echo $row3['username'] ?>
                        </button> 
                    <?php } ?>
                    
                <?php } else 
                {
                    echo 'Você precisa estar logado para deixar um recado para <b> ' . $row3['username'];
                    echo '</b>';
                } ?>
                    <br>
                    <br>

                </div>
                <br>
                 <div class="panel panel-success">
    <div class="list-group-item list-header">Pesquisar por usuário</div>
          <div class="list-group-item config-controller open" data-target="#config">
            <form method="post"> 
 <input placeholder="Digite o nome de usuário..." class="form-control" type="text" name="usuariobus">


            <?php SalsaConta::buscar_usuario($conn) ?>
           <br>
            <button style="float: right;" type="submit" name="pesq" class="btn btn-dark">Procurar</button> 
           <br>
           <br>
        </div>
    </div>
            </div>



        </div>
    </div>



    </div>

    </div>
    </div>
    <style type="text/css">
        .salsa {
            height: 380px;
        }
    </style>
    <div class="salsa"></div>
    <div style="font-weight: 14px;background: #1e262c; padding: 10px;border-top: 4px solid #1b2228;margin-top: 30px">
        <div class="container">

            <span style="color:#a7a7a7">
            © 2019 - <?php echo ano ?> Rede <?php echo nome ?> Corporation Ltd. Todos os direitos reservados.
               
                                                    </span>
        </div>
    </div>

    </body>

    </html>

    <?php } ?>