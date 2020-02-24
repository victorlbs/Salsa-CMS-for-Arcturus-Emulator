<?php
$vlsalsa = 0;
if (is_numeric($noticiafinal))
    $noticiafinal = $noticiafinal;
else
    $noticiafinal = 0;
$qra        = "SELECT * FROM cms_news WHERE id=".$noticiafinal." LIMIT 1";
if ($ra = mysqli_query($conn, $qra)) {
$existe = mysqli_num_rows($ra);
if ($existe == $vlsalsa) {
header("Location: /".$config['404page']."");
}
mysqli_free_result($ra);
}
$sql3 = "SELECT * FROM cms_news WHERE id=".$noticiafinal." LIMIT 1";
$query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
while ($row3 = $query1->fetch_assoc()) {
$fnsalsa = "UPDATE cms_news SET type = type+1 WHERE id = '" . $row3['id'] . "'";
$conn->query($fnsalsa); 
$titulo = "".$row3['title']." - " . nome;
?>
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
        <?php echo $titulo ?></title>
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
                        <div style="background-image: url(<?php echo $row3['image'] ?>);" id="redondo" class="p-3 mb-2 bg-primary text-white">
                            <?php echo $row3['title'] ?>
                        </div>
                        <div class="card-body">


                            <?php echo html_entity_decode($row3['longstory']) ?>



                                <hr>
                            <div class="article-author">
                                   <b>Autor:</b> <b><a href="/perfil?=<?php echo $row3['author'] ?>"><?php echo $row3['author'] ?> </a></b>
                                    <br>
                                    <b>Data:</b>
                                    <?php echo date('d/m/Y', $row3['date']) . ' às ' . date('H:i:s', $row3['date']) ?>
                                    <br>
                                    <b>Visualizações:</b>
                                    <?php echo $row3['type'] ?>
                                </div>
                            

                        </div>
                    </div>


                     <div id="caixa-inv"></div>
                    <div id="caixa-inv"></div>








                    <div id="redondo-cmc" class="card">
                        <div style="background-image: url(<?php echo $row3['image'] ?>);" id="redondo" class="p-3 mb-2 bg-primary text-white">
                            Comentários 

                             <?php if ($cur != null || $sessao != null || usuario != null){?>
                             <span data-toggle="modal" data-target="#exampleModal" style="float: right;" class="badge badge-light">Comentar</span>
                         <?php } ?>
                        </div>
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


                             <?php
    $sql31 = "SELECT * FROM salsa_comentarios_noticia WHERE noticia='".$row3['id']."' order by id DESC LIMIT 20";
$aa = mysqli_query($conn, $sql31) or die(mysqli_error($conn));
while ($bss = $aa->fetch_assoc()) {
    ?>

                                    <ul class="list-group">

                                        <li class="list-group-item">
                                            <div class="feed-item-image" style="background-image: url(<?php echo $config['site.avatar'] ?><?php echo $bss['look'] ?>&size=m&headonly=1&head_direction=2&gesture=sml)"></div>
                                            <a href="/perfil?=<?php echo $bss['usuario'] ?>"> <b><?php echo $bss['usuario'] ?></b> </a><i>diz:</i>
                                            <?php echo fs($bss['mensagem']) ?>

                                                <div id="salsdiv" style="float: right;">
                                                    <img src="https://3.bp.blogspot.com/-QiV0Aie6aMg/WV-zzO36oGI/AAAAAAAA6uo/u--AGzg3gKAHlV7YUlHB5tznf368sOQxgCKgBGAs/s1600/34df39e387de73745fd1dabcba970a6e.gif">
                                                    <?php echo date('d/m/Y', $bss['data'])  ?>
                                                </div>

                                        </li>

                                    </ul>

                                    <br>

                                    <?php } ?>
                            

                        </div>
                    </div>










                </div>

                <?php if ($cur != null || $sessao != null || usuario != null){?>
                <?php SalsaConta::comentar_noticia($conn) ?>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Comentar em <?php echo $row3['title'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <form method="post">
      </div>
      <div class="modal-body">
        <textarea class="form-control" required="" name="mensagem" rows="3"></textarea>
        <input hidden="" type="text" value="<?php echo $row3['id'] ?>" name="id">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" name="comentar" class="btn btn-primary">Comentar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php } ?>

            
                    <!-- /// -->

                    <div id="caixa-inv"></div>
                    <div id="caixa-inv"></div>


                    

                <div id="caixa-inv"></div>
                <div class="col-sm-4">
                    <div id="redondo-cmc" class="card">
                        <div id="redondo" class="p-3 mb-2 bg-dark text-white">Últimas notícias
                        </div>
                        <div class="card-body">



                    <?php

                $sql3 = "SELECT * FROM cms_news order by id DESC LIMIT 30";
$query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
while ($row2 = $query1->fetch_assoc()) {

    ?>

                        <a href="/noticia?=<?php echo $row2['id'] ?>" class="list-group-item list-group-item-action " style="color: #212529">

                            <?php 

                            if ($row2['noticia_ativa'] == 1)
                            {
                                ?>
                        <span class="fas fa-circle" title="<?php echo $row2['title'] ?>" style="font-size: 8px;color: #4CAF50;position:absolute;margin-left: -15px;margin-top: 5px;"></span>  
                    <?php } ?>


                                             <?php echo $row2['title'] ?> »
                    </a>

                        <?php } ?>
                           

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
<?php } ?>