<?php
$titulo = "".usuario.":  Promoções ativas - ".nome."";
include 'header.php';
?>

    <div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="list-group" style="margin-bottom: 20px">
                <div class="list-group-item">
                    <h5 style="font-weight: bold">Promoções ativas</h5>
                    <hr>



                     <?php
                            $sql = "SELECT * FROM cms_news order by id DESC LIMIT 20";
      $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
      while($row = $query->fetch_assoc())
      {
        ?>
        <?php if ($row['noticia_ativa'] == 1)
        {
            ?>
            <div class="col-md-5">
                <a href="<?php echo url ?>/noticia?=<?php echo $row['id'] ?>">
                    <div class="card" style="height: 84px;margin-bottom: 20px; background: url(<?php echo $row['image'] ?>) center left">
                        <div class="card-body" style="padding: 10px 8px;">
                            <span style="font-weight: bold;font-size: 14px; color: #fff; text-shadow: 2px 2px 10px rgba(0,0,0,.5)"><?php echo $row['title'] ?></span>
                            <br>
                            <span style="color: #fff; text-shadow: 2px 2px 10px rgba(0,0,0,.5); font-size: 12px"><?php echo $row['shortstory'] ?></span>
                        </div>
                    </div>
                    
                </a>
            </div>
        <?php } ?>

        <?php } ?>
                    
                    
                    
                   
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="list-group" style="margin-bottom: 20px">
                <div class="list-group-item list-header">Sobre promoções ativas</div>
                <div class="list-group-item">
                    <p style="text-align: center">
                        <img src="https://3.bp.blogspot.com/-Q5w5sR74GxI/XIGQoQ2PxaI/AAAAAAABMY8/_vRgXm-s7EAB4aHFqWaHcRs8ZQyCBeNXgCKgBGAs/s1600/habbonados_construtores.png">
                    </p>
                    <p>
                        Você pode ver todas as promoções ativas nesta aba. As promoções são atividades promovidas pelos administradores, você pode participar sempre que quiser e também pode ser um vencedor da promoção recebendo a recompensa definida pelo autor da promoção.
                    </p>
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