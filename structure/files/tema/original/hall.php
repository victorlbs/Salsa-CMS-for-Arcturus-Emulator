<?php
$titulo = "".usuario.":  Hall da Fama - ".nome."";
include 'header.php';
?>

    <div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="list-group">
                <div style="background-image: url(https://3.bp.blogspot.com/-jUTMo3eQ7Ns/Wz5igBPWxxI/AAAAAAABIZ8/ePcIvMGhjjUbXXS4DYZpR-yI0EYO4jVNQCKgBGAs/s1600/lpromo_gen_baw_1.png);" class="list-group-item list-header">Promoções</div>
                
        
 <?php
                                $sql3 = "SELECT * FROM users order by pontos_promocao DESC LIMIT 6";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>

                                    <div class="list-group-item feed-item" style="padding-bottom: 0px">
                        <div class="feed-item-image" style="height: 60px; background-image: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&size=m&amp;head_direction=2&amp;gesture=sml)"></div>
                        <div class="feed-item-body">
                            <div class="feed-item-title"><a href="/perfil?=<?php echo $row2['username'] ?>"><?php echo $row2['username'] ?></a></div>
                             <?php

                            if ($row2['pontos_promocao'] == 1)
                            {

                                ?>
                            Ganhou <b><?php echo $row2['pontos_promocao'] ?></b> promoção.


                        <?php }elseif ($row2['pontos_promocao'] > 1) {
                          ?>
  Ganhou <b><?php echo $row2['pontos_promocao'] ?></b> promoções.
                          <?php
                        } ?>
                        </div>
                    </div>


                <?php } ?>





                            </div>
        </div>
        <div class="col-md-4">
            <div class="list-group">
                <div style="background-image: url(https://4.bp.blogspot.com/-S6kEQPEHu6k/Wmj9n71TswI/AAAAAAABEkU/27h_5KXBmRkhzfio_Gd3NJcAW2XxasUJQCKgBGAs/s1600/promo_no_goldrush.png);" class="list-group-item list-header">Eventos</div>
              
              <?php
                                $sql3 = "SELECT * FROM users order by pontos_evento DESC LIMIT 6";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>

                                    <div class="list-group-item feed-item" style="padding-bottom: 0px">
                        <div class="feed-item-image" style="height: 60px; background-image: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&size=m&amp;head_direction=2&amp;gesture=sml)"></div>
                        <div class="feed-item-body">
                            <div class="feed-item-title"><a href="/perfil?=<?php echo $row2['username'] ?>"><?php echo $row2['username'] ?></a></div>
                            <?php

                            if ($row2['pontos_evento'] == 1)
                            {

                                ?>
                            Ganhou <b><?php echo $row2['pontos_evento'] ?></b> evento.


                        <?php }elseif ($row2['pontos_evento'] > 1) {
                          ?>
  Ganhou <b><?php echo $row2['pontos_evento'] ?></b> eventos.
                          <?php
                        } ?>



                        </div>
                    </div>


                <?php } ?>
                                  
                                </div>
        </div>
        <div class="col-md-4">
            <div class="list-group">
                <div style="background-image: url(https://4.bp.blogspot.com/-Rv7axvp5BQo/VdNcz5CCzGI/AAAAAAAAVQ4/6LT1RfB1DZ8/s1600/lpromo_generic_android.png);" class="list-group-item list-header">Créditos</div>
                
                                    <?php
                                $sql3 = "SELECT * FROM users order by credits DESC LIMIT 6";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>

                                    <div class="list-group-item feed-item" style="padding-bottom: 0px">
                        <div class="feed-item-image" style="height: 60px; background-image: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&size=m&amp;head_direction=2&amp;gesture=sml)"></div>
                        <div class="feed-item-body">
                            <div class="feed-item-title"><a href="/perfil?=<?php echo $row2['username'] ?>"><?php echo $row2['username'] ?></a></div>
                             <?php

                            if ($row2['credits'] == 1)
                            {

                                ?>
                            Possui <b><?php echo $row2['credits'] ?></b> crédito.


                        <?php }elseif ($row2['credits'] > 1) {
                          ?>
  Possui <b><?php echo $row2['credits'] ?></b> créditos.
                          <?php
                        } ?>
                        </div>
                    </div>


                <?php } ?>
                                </div>
        </div>

   
    
        <div class="col-md-4"><br>
            <div class="list-group">
                <div style="background-image: url(https://2.bp.blogspot.com/-R6cz67_kMUA/VvDawXZCHWI/AAAAAAAAlzw/Aqgvb2JywjIdt6qOAe_wfQ0H1ERjdgGAw/s1600/habboios.png);" class="list-group-item list-header">Referidos</div>
                
        
 <?php
                                $sql3 = "SELECT * FROM users order by referidos DESC LIMIT 6";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>

                                    <div class="list-group-item feed-item" style="padding-bottom: 0px">
                        <div class="feed-item-image" style="height: 60px; background-image: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&size=m&amp;head_direction=2&amp;gesture=sml)"></div>
                        <div class="feed-item-body">
                            <div class="feed-item-title"><a href="/perfil?=<?php echo $row2['username'] ?>"><?php echo $row2['username'] ?></a></div>
                             <?php

                            if ($row2['referidos'] == 1)
                            {

                                ?>
                            Ganhou <b><?php echo $row2['referidos'] ?></b> promoção.


                        <?php }elseif ($row2['referidos'] > 1) {
                          ?>
  Colecionou <b><?php echo $row2['referidos'] ?></b> referidos.
                          <?php
                        } ?>
                        </div>
                    </div>


                <?php } ?>





                            </div>
        </div>






       <div class="col-md-4"><br>
            <div class="list-group">
                <div style="background-image: url(https://images.habbo.com/web_images/habbo-web-articles/lpromo_gen15_41.png);" class="list-group-item list-header">Duckets</div>
                
        
 <?php
                                $sql3 = "SELECT * FROM users order by pixels DESC LIMIT 6";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>

                                    <div class="list-group-item feed-item" style="padding-bottom: 0px">
                        <div class="feed-item-image" style="height: 60px; background-image: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&size=m&amp;head_direction=2&amp;gesture=sml)"></div>
                        <div class="feed-item-body">
                            <div class="feed-item-title"><a href="/perfil?=<?php echo $row2['username'] ?>"><?php echo $row2['username'] ?></a></div>
                             <?php

                            if ($row2['pixels'] == 1)
                            {

                                ?>
                            Possui <b><?php echo $row2['pixels'] ?></b> ducket.


                        <?php }elseif ($row2['pixels'] > 1) {
                          ?>
  Possui <b><?php echo $row2['pixels'] ?></b> duckets.
                          <?php
                        } ?>
                        </div>
                    </div>


                <?php } ?>





                            </div>
        </div>
















<div class="col-md-4"><br>
            <div class="list-group">
                <div style="background-image: url(https://images.habbo.com/web_images/habbo-web-articles/lpromo_feb20_gen.png);" class="list-group-item list-header">Placar de conquistas</div>
                
        
 <?php
                                $sql3 = "SELECT * FROM users_settings order by achievement_score DESC LIMIT 6";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {

        $ikndiu = "SELECT * FROM users WHERE id='".$row2['user_id']."'";
    $awknmdjkan = mysqli_query($conn, $ikndiu) or die(mysqli_error($conn));
    while ($h4 = $awknmdjkan->fetch_assoc()) {
        ?>

                                    <div class="list-group-item feed-item" style="padding-bottom: 0px">
                        <div class="feed-item-image" style="height: 60px; background-image: url(<?php echo avatarimage ?><?php echo $h4['look'] ?>&size=m&amp;head_direction=2&amp;gesture=sml)"></div>
                        <div class="feed-item-body">
                            <div class="feed-item-title"><a href="/perfil?=<?php echo $h4['username'] ?>"><?php echo $h4['username'] ?></a></div>
                            
                            <?php echo $row2['achievement_score'] ?>


                        </div>
                    </div>


                <?php }  } ?>





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
        .salsa2 {
            height: 20px;
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