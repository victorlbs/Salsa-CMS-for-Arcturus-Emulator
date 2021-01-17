<?php
$titulo = "".usuario.":  Usuários VIP - ".nome."";
include 'header.php';
?>

    <div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-9">
                      <div style="overflow: auto;">
        <div style="width: 40px; height: 40px; float: left; margin-right: 10px">
            <img src="https://i.imgur.com/5BjS8Lx.gif" style="float:left">
        </div>
        <div style="width: calc(100% - 50px); float: right">
            <h5 style="color:#1e262c;font-weight: bold;margin-top:0px; margin-bottom: 0px">Usuários VIPs</h5>
            <div style="color: #8f9396;font-weight: normal; font-size: 15px; margin-bottom: 10px">Alta sociedade do <?php echo nome ?> Hotel.</div>
        </div>
    </div>
            <div class="row">
                                
                                <?php
                                $sql3 = "SELECT * FROM users WHERE rank=3";
    $query1 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
    while ($row2 = $query1->fetch_assoc()) {
        ?>
                                <div class="col-md-6">
                    <div class="card"  style="flex-direction: row; margin-bottom: 10px;">
                        <img src="x" style="display: none" onload="setCardColor(this)" crossorigin="">

                        <div class="user-profile-image" style="background: url(<?php echo avatarimage ?><?php echo $row2['look'] ?>&size=m&amp;head_direction=2&amp;gesture=sml) 0px -5px, url(x) center"></div>
                        <div class="user-profile-content">
                            <div style="font-weight: bold; font-size: 16px;margin-bottom: 5px" class="ng-binding">
                                <a href="/perfil?=<?php echo $row2['username'] ?>" class="card-title username"><?php echo $row2['username'] ?></a>

                                <?php

                                if ($row2['online'] == 0)
                                {
                                    ?>
                                                                    <span class="badge badge-secondary" style="float: right; margin-right: 10px; font-size: 11px"><?php echo date('d/m/Y', $row2['last_online']) . ' às ' . date('H:i:s', $row2['last_online']) ?></span>

                                                                <?php } elseif ($row2['online'] == 1) {

                                                                    ?>

                                                                    <span class="badge badge-success" style="float: right; margin-right: 10px; font-size: 11px">Online</span>
                                                                    
                                                                <?php } ?>


                                                            </div>
                            <div><b>Missão: </b><?php echo fs($row2['motto']) ?></div>
                            <div><b>Discord: </b><?php echo $row2['discord'] ?></div>
                        </div>
                    </div>
                </div>
            <?php } ?>



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
               Powered by <a style="color: white;" target="_blank" href="https://github.com/victorlbs/Salsa-CMS---CMS-for-Arcturus-Emulator"><b>Salsa CMS</b></a>
                                                    </span>
        </div>
    </div>

    </body>

    </html>