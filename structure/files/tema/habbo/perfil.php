<?php
SalsaConta::buscar_usuario($conn);
SalsaConta::recado($conn);
$qra        = "SELECT * FROM users WHERE username='".$noticiafinal."' order by id DESC LIMIT 1";
if ($ra = mysqli_query($conn, $qra)) {
$existe = mysqli_num_rows($ra);
if ($existe == 0) {
header("Location: /".$config['404page']."");
}
mysqli_free_result($ra);
}
$sql3 = "SELECT * FROM users WHERE username='".$noticiafinal."' order by id DESC LIMIT 1";
$query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
while ($row3 = $query1->fetch_assoc()) {
$titulo = "Perfil de ".$row3['username']." - " . nome;
?><!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css/Bootstrap.css" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css/Geral.css?<?php echo time() ?>" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/fontawesome.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/fontawesome.min.css" />

    <title><?php echo $titulo ?></title>
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
                            <?php echo $row3['username'] ?>
                        </div>
                        <div class="card-body">

                            <?php
                            if (isset($_SESSION['erro']))
                            {
                              echo '<div class="alert alert-primary" role="alert">';
                              echo $_SESSION['erro'];
                              unset($_SESSION['erro']);
                              echo '</div>';
                            }
                            ?>

                            <img id="mv" alt="Este é você!" src="<?php echo $config['site.avatar'] ?><?php echo $row3['look'] ?>">
                            
                            <div id="caixa-inv"></div>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">Missão:</span>
                                </div>
                                <input type="text" disabled="" class="form-control" placeholder="<?php echo fs($row3['motto']) ?>" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>

                            <div id="caixa-inv"></div>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">Créditos:</span>
                                </div>
                                <input type="text" disabled="" class="form-control" placeholder="<?php echo $row3['credits'] ?>" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>

                            <div id="caixa-inv"></div>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">Último login:</span>
                                </div>
                                <input type="text" disabled="" class="form-control" placeholder=" <?php echo date('d/m/Y', $row3['last_login']) ?>" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>

                            <div id="caixa-inv"></div>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">Eventos ganhos:</span>
                                </div>
                                <input type="text" disabled="" class="form-control" placeholder=" <?php echo $row3['pontos_evento'] ?>" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>

                            <div id="caixa-inv"></div>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">Promoções ganhas:</span>
                                </div>
                                <input type="text" disabled="" class="form-control" placeholder=" <?php echo $row3['pontos_promocao'] ?>" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>



                            <div id="caixa-inv"></div>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">Discord:</span>
                                </div>
                                <input type="text" disabled="" class="form-control" placeholder="<?php echo $row3['discord'] ?>" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>


                            <div id="caixa-inv"></div>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">Referidos:</span>
                                </div>
                                <input type="text" disabled="" class="form-control" placeholder="<?php echo $row3['referidos'] ?>" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>






                        </div>

                    </div>

                     <div id="caixa-inv"></div>
                      <div id="caixa-inv"></div>

                     <div class="col-sm">

                     <div id="redondo-cmc" class="card">
                        <div id="redondo" class="p-3 mb-2 bg-dark text-white">Pesquisar um usuário
                        </div>


                        
                        <form method="post">

                            <div class="input-group flex-nowrap">
                                
                                
                                  <input placeholder="Digite o nome de usuário..." class="form-control" type="text" name="usuariobus">
                         <button  type="submit" name="pesq" class="btn btn-dark">Procurar</button>
                            </div>

                       
                          
                         </form>


                      
                            
                            <div id="caixa-inv"></div>
                            <div id="caixa-inv"></div>
                            </div>
                        
                  
                </div>


                     </div>



               

                <div id="caixa-inv"></div>
                <div class="col-sm">
                   <div id="redondo-cmc" class="card">
                        <div id="redondo" class="p-3 mb-2 bg-dark text-white">Emblemas de <?php echo $row3['username'] ?>
                        </div>
                        <div class="card-body">
                            
                            <?php
                    $idnovo = $row3['id'];
                    $as = "SELECT * FROM users_badges WHERE user_id='$idnovo'";
                    $ca = mysqli_query($conn, $as) or die(mysqli_error($conn));
                    while ($ba = $ca->fetch_assoc()) {
                        ?>

                            <img src="<?php echo $config['tema.urlemblemas'] ?><?php echo $ba['badge_code'] ?>.gif">
                            <?php } ?>
                          
                        </div>
                    </div>


                    <div id="caixa-inv"></div>
                    <div id="caixa-inv"></div>

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



                     <div id="redondo-cmc" class="card">
                        <div id="redondo" class="p-3 mb-2 bg-dark text-white">Recados para <?php echo $row3['username'] ?>
                        </div>
                        <div class="card-body">

                            <?php
                            if ($cur != null || $sessao != null || usuario != null){ ?>
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

                <?php } ?>

                <br>


                <?php
    $sql31 = "SELECT * FROM salsa_postagens WHERE donoperfil='".$row3['username']."' order by id DESC LIMIT 20";
$aa = mysqli_query($conn, $sql31) or die(mysqli_error($conn));
while ($bss = $aa->fetch_assoc()) {
    ?>

                                    <ul class="list-group">

                                        <li class="list-group-item">
                                            <div class="feed-item-image" style="background-image: url(<?php echo $config['site.avatar'] ?><?php echo $bss['look'] ?>&size=m&headonly=1&head_direction=2&gesture=sml)"></div>
                                            <a href="/perfil?=<?php echo $bss['usuario'] ?>"> <b><?php echo $bss['usuario'] ?></b> </a><i>diz:</i>
                                            <?php echo fs($bss['mensagem']) ?>

                                                <div id="salsdiv" style="float: right;">
                                                   Postado em
                                                    <?php echo date('d/m/Y', $bss['data']) . ' às ' . date('H:i:s', $bss['data']) ?>
                                                </div>

                                        </li>

                                    </ul>

                                    <br>

                                    <?php } ?>
                           

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
<?php } ?>