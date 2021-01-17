
<?php
$titulo = "".usuario.":  Principal - ".nome."";
include 'header.php' ?>
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>




    <div class="container">
        <div class="row">
            <div class="col-md-8" style="margin-bottom: 20px">

                

           

                <div class="card" style="display: block;overflow: hidden;">
                    <div class="card-body" id="me-top-profile">
                        <div class="row">
                            <div class="col-md-6"></div>

                        </div>
                    </div>
                    <div onclick="window.open(&#39;/client&#39;, &#39;_blank&#39;);" class="panel-footer client-btn">Entrar no
                        <?php echo nome ?>
                    </div>


                </div>
               
                <?php SalsaConta::publicar($conn); SalsaConta::curtir($conn) ?>
                 <?php
                        if (isset($_SESSION['erro']))
                        {
                            echo '<div class="alert alert-primary" role="alert">';
                            echo $_SESSION['erro'];
                            unset($_SESSION['erro']);
                            echo '</div>';
                        }
                        ?>
                
   

                    <div id="feedController" ng-controller="feedController" class="ng-scope">
                        <ul class="list-group" style="margin-top: 20px">
                            <li class="list-group-item feed-item clearfix">
                                <form method="POST" class="ng-pristine ng-valid ng-valid-maxlength">
                                    
                                    <div class="feed-item-image" style="background-image: url(<?php echo avatarimage ?><?php echo $roupa ?>&size=m&headonly=1&head_direction=2&gesture=sml)"></div>
                                    <div class="feed-item-body">
                                        <div class="feed-item-title"></div>
                                        <div class="feed-item-content">
                                            <textarea required="" class="form-control ng-pristine ng-untouched ng-valid ng-empty" style="margin-bottom: 10px" name="postagem" rows="1" placeholder="No que você está pensando?"></textarea>

                                        </div>

                                        <button name="postar" type="submit" class="btn btn-primary" style="float: right">

                                            <span class="">Publicar</span>
                                        </button>

                                    </div>
                                </form>
                            </li>

                            <?php
                            $sql = "SELECT * FROM salsa_posts order by id DESC LIMIT 20";
      $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
      while($row = $query->fetch_assoc())
      {
         $nova = "SELECT * FROM users WHERE username='".$row['usuario']."'";
        $qrm = mysqli_query($conn, $nova) or die(mysqli_error($conn));
        while($row77 = $qrm->fetch_assoc())
        {
            
        ?>

                                <li class="list-group-item feed-item animated fadeInDown ng-scope" ng-repeat="post in posts| orderBy:'-id' track by $index" style="">
                                    <div id="postIdPanel430745">
                                        <div class="feed-item-image" style="background-image: url(<?php echo avatarimage ?><?php echo $row77['look'] ?>&size=m&headonly=0&head_direction=2&gesture=sml)"></div>
                                        <div class="feed-item-body">
                                            <div class="feed-item-timestamp ng-binding">
                                                <?php echo date('d/m/Y', $row['data']) . ' às ' . date('H:i:s', $row['data']) ?> <a href="javascript:void(0);" ng-click="deletePost(post)" ng-show="post.userid == 7702964" title="Apagar Publicação" style="color: #f44336" class="ng-hide"><i class="fas fa-times-circle"></i></a></div>
                                            <div class="feed-item-title">
                                                <a href="perfil?=<?php echo $row['usuario'] ?>" class="ng-binding">
                                                    <?php echo $row['usuario'] ?>
                                                </a>

                                                <?php

                                        if ($row['staff'] == 1)
                                        {
                                            ?>
                                                    <b>fez uma publicação staff</b>  <i class="fas fa-exclamation-triangle"></i>
                                            <?php } ?>

                                    </div>
                                    <div class="feed-item-content">
                                        <div class="more-less" onmouseover="resize(this)" id="contentId430745">
                                            <div class="more-block ng-binding" ng-bind-html="post.content | trustAsHtml">
                                                <p>

<?php echo fs($row['postagem']) ?>
</p>

                                                </div>

                                        </div>
                                    </div>

                                    <script type="text/javascript">
                                        var salsapotst = 1;
                                        function salsa<?php echo $row['id'] ?>()
                                        {
                                            var valorsalsa = <?php echo $row['curtidas'] ?>;
                                            var resultado = valorsalsa + salsapotst;
                                            document.getElementById('contasalsa<?php echo $row['id'] ?>').removeAttribute("onclick");
                                            document.getElementById("contasalsa<?php echo $row['id'] ?>").innerHTML = resultado;
                                        }
                                        <?php
                                        $value = 'value="'.fs($row['id']).'"';
                                        $value2 = 'value="'.fs(usuario).'"';
                                        $value3 = 'value="'.fs($row['curtidas']).'"';
                                        ?>
                                    </script>


                             

                                    <div class="feed-item-actions">



                                        <form method="post">
                                            <input hidden=""  type="text" name="id" <?php echo $value ?>/>
                                            <input hidden=""  type="text" name="usuario" <?php echo $value2 ?>/>
                                            <input hidden=""  type="text" name="valor" <?php echo $value3 ?>/>
                                            <span  class="likeCount ng-binding btn btn-primary">
                                                 <salsa id="contasalsa<?php echo $row['id'] ?>">
                                                 
                                               <?php echo $row['curtidas'] ?>
                                            </salsa>
                                            </span>

    <button style="color: white;" onclick="salsa<?php echo $row['id'] ?>();" id="contasalsa" class="btn btn-primary" type="submit" name="curtidas">
        Curtir
    <i class="far fa-thumbs-up"></i> 
</button>

                                           
 
                                            </form>
                                    



                                        <a href="/post/430745" style="float:right" title="Abrir em nova guia"><i class="fas fa-share-alt"></i></a>
                                    </div>
                                    <ul class="list-group" style="margin-top: 10px; display: none" id="commentsPost430745">
                                        <!-- ngRepeat: comment in postComments[post.id] -->
                                        <li class="list-group-item feed-item animated fadeIn">
                                            <div class="feed-item-image" style="height:50px;background-image: url(https://habbinc.net/avatar/programmer/size=m&amp;headonly=1&amp;head_direction=2&amp;gesture=sml)"></div>
                                            <div class="feed-item-body">
                                                <div class="feed-item-content commenting">
                                                    <form ng-submit="postComment(post)" id="formComment430745" class="ng-pristine ng-valid">
                                                        <div class="input-group">
                                                            <input id="inputCommentPostId430745" ng-model="postComment.commentMessage[post.id]" type="text" class="form-control ng-pristine ng-untouched ng-valid ng-empty" placeholder="Comentando...">
                                                            <div class="input-group-append">
                                                                <button type="submit" class="btn btn-primary" ng-disabled="!postComment.commentMessage[post.id].length > 0" style="font-size: 13px" disabled="disabled">Enviar</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    <?php } } ?>
                        <li class="list-group-item animated fadeInDown updateFeedBtn ng-hide" ng-click="loadNewPosts()" ng-show="newPostsCount &gt; 0 &amp;&amp; loading === false">
                            Carregar novos posts
                        </li>
                     
                        <div id="feedScrollspy" class="d-none d-lg-block" style="height: 1px"></div>
                        <li class="list-group-item updateFeedBtn d-block d-lg-none" ng-click="loadOldPosts()">
                            Carregar mais posts
                        </li>
                    </ul>
                    <div class="modal fade" id="sharePostModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Retweetar Publicação</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <form ng-submit="sharePostAction()" class="ng-pristine ng-valid">
                                    <div class="modal-body">
                                        <input type="hidden" id="sharePostId" value="">
                                        <textarea class="form-control ng-pristine ng-untouched ng-valid ng-empty" style="margin-bottom: 10px" id="sharingContent" rows="1" ng-model="sharePost.message" ng-disabled="postingStatus === true"></textarea>
                                        <div class="emoji-list-long closed">
                                            <img src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/cora.png" title=":cora:">
                                            <img src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/eita.png" title=":eita:">
                                            <img src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/sorriso.png" title=":sorriso:">
                                            <img src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/ok.png" title=":ok:">
                                            <img src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/suave.png" title=":suave:">
                                            <img src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/pdxa.png" title=":pdxa:">
                                            <img src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/uau.png" title=":uau:">
                                            <img src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/delicia.png" title=":delicia:">
                                            <img src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/vergonha.png" title=":vergonha:">
                                            <img src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/triste.png" title=":triste:">
                                            <img src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/xonado.png" title=":xonado:">
                                            <img src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/kkk.png" title=":kkk:">
                                            <img src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/zzz.png" title=":zzz:">
                                            <img src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/z.png" title=":z:">
                                            <img src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/bravo.png" title=":bravo:">
                                            <img src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/hehehe.png" title=":hehehe:">
                                            <img src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/grr.png" title=":grr:">
                                            <img src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/hihihi.png" title=":hihihi:">
                                            <img src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/coco.png" title=":coco:">
                                            <img src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/coraq.png" title=":coraq:">
                                            <img src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/lgbtqia.png" title=":lgbtqia:">
                                            <img src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/sim.png" title=":sim:">
                                            <img src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/nao.png" title=":nao:">
                                        </div>
                                        <div class="list-group" style="padding-left: 10px">
                                            <div class="list-group-item feed-item" style="border-radius: 4px;">
                                                <div class="feed-item-image" style="background-image: url(<?php echo url ?>/avatar//size=m&amp;headonly=1&amp;head_direction=3&amp;gesture=sml)"></div>
                                                <div class="feed-item-title">
                                                    <a href="<?php echo url ?>/perfil/" class="ng-binding"></a>
                                                </div>
                                                <div class="feed-item-content">
                                                    <div ng-bind-html="sharePost.content | trustAsHtml" class="ng-binding"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary" ng-disabled="sharePost.message.length &lt; 1 || sharePost.message == null || postingStatus === true" disabled="disabled">Retweetar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="max-width: 300px;">
                <div class="list-group" style="margin-bottom: 20px">
                    <div class="list-group-item" style="padding: 0;overflow: hidden">
                        <div id="articlesSlide" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                  <?php
                            $sql = "SELECT * FROM cms_news order by id DESC LIMIT 1";
      $qaqa = mysqli_query($conn, $sql) or die(mysqli_error($conn));
      while($row111 = $qaqa->fetch_assoc())
      {
        ?>
                                <a href="<?php echo url ?>/noticia?=<?php echo $row111['id'] ?>" class="carousel-item active" style="background: url(<?php echo $row111['image'] ?>) center right no-repeat;height:186px;padding: 20px 15px;overflow:hidden">
                                    <span class="carousel-title"><?php echo $row111['title'] ?></span>
                                    <br>
                                    <span class="carousel-desc"><?php echo $row111['shortstory'] ?></span>
                                </a>

                            <?php } ?>


                                
                                
                                
                               
                            </div>
                            
                           
                        </div>
                    </div>
                       <?php
                            $a = "SELECT * FROM cms_news order by id DESC LIMIT 6";
      $gg = mysqli_query($conn, $a) or die(mysqli_error($conn));
      while($noticia = $gg->fetch_assoc())
      {
        ?>
                    <a href="<?php echo url ?>/noticia?=<?php echo $noticia['id'] ?>" class="list-group-item list-group-item-action"><?php echo $noticia['title'] ?> »</a>

                <?php } ?>
                  
                  
                </div>


                <div class="panel panel-success">
    <div class="list-group-item list-header">TOP 5 Moedas</div>
          
    <div class="list-group">
        
                  
                       
                        
                      <?php
      $aBC = "SELECT * FROM users order by credits DESC LIMIT 6";
      $QQ = mysqli_query($conn, $aBC) or die(mysqli_error($conn));
      while($MOEDAS = $QQ->fetch_assoc())
      {
        ?>
                        <a class="list-group-item" style="text-decoration: none;" href="/perfil?=<?php echo $MOEDAS['username'] ?>">
                <div class="media">
                    <div class="media-left">
                        <div style="background-image: url(//habbo.com/habbo-imaging/avatarimage?figure=<?php echo $MOEDAS['look'] ?>&amp;size=m&amp;direction=2&amp;gesture=sml&amp;head_direction=2); background-position: -8px -17px; width:50px; height:50px;">
                        </div>
                    </div>
                    <div class="media-body">

                        <b><?php echo $MOEDAS['username'] ?></b>
                        <br>
                        <span><img style="margin-top:-3px" src="https://habbok.me/template/habbinc/images/coins.gif">&nbsp;<?php echo $MOEDAS['credits'] ?></span>

                    </div>
                </div>

            </a>

        <?php } ?>
            

    </div>
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

<br>

    <div class="panel panel-primary">
    <div class="panel-heading">
         <div class="list-group-item list-header">Referidos</div>
    </div>

      <div class="list-group-item config-controller open" data-target="#config">
            
        Você possui <b><?php echo $referidos ?></b> referidos.<br>
        
        <p>Chame novas pessoas para o hotel usando o seu link de referencia e ganhe de 1 a 2 tickets a cada novo cadastro.</p>

        <div class="form-group">
            <form class="ng-pristine ng-valid">
                <small>Link de referencia:</small>
                <input type="text" onclick="this.select();" class="form-control" value="<?php echo url ?>/convite?=<?php echo usuario ?>" readonly="readonly"> 
            </form>
        </div>


    </div>
</div>

                    <!-- end ngRepeat: user in users track by $index -->
                </div>
            </div>
        </div>
    </div>

    <div style="font-weight: 14px;background: #1e262c; padding: 10px;border-top: 4px solid #1b2228;margin-top: 30px">
        <div class="container">

            <span style="color:#a7a7a7">
            © 2019 - <?php echo ano ?> Rede <?php echo nome ?> Corporation Ltd. Todos os direitos reservados.
             
                                                    </span>
                                            </div>
                                        </div>

</body>

</html>