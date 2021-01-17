<?php
$titulo = "".usuario.":  Loja - ".nome."";
include 'header.php';
?>

    <div class="container ng-scope" ng-controller="storeController">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                
                                <div class="col-md-6">
                                    <?php SalsaConta::comprarpontos($conn) ?>
                    <ul class="list-group" style="margin-bottom: 20px">
                        <li class="list-group-item" style="height: 100px; background: url(https://images.habbo.com/web_images/habbo-web-articles/lpromo_gen15_79.png) center no-repeat">
                                                    </li>
                        <li class="list-group-item" style="font-size: 18px">
                            <b>1.000 placar de conquistas</b> <span style="color: #6c757d; float: right; font-size: 15px">500.000 créditos</span>
                        </li>
                        <li class="list-group-item" style="color: #6c757d; font-size: 13px; text-align: center">
                            Aumentará o seu placar de conquista agregando mil pontos                     </li>
                        <li class="list-group-item">
                                                        <a style="color: white;" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-block">Comprar</a>
                                                    </li>
                    </ul>
                </div>
                                
                            </div>
        </div>








<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deseja continuar a operação?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Você está prestes a comprar: <b>1.000 pontos de placar de conquistas</b> que custará 500.000 moedas, deseja continuar?
      </div>
      <div class="modal-footer">
        <form method="POST">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" name="comprar" class="btn btn-primary">Continuar</button>
    </form>
      </div>
    </div>
  </div>
</div>










        <div class="col-md-4">
            <div class="list-group" style="margin-bottom: 20px">
                <div class="list-group-item list-header">Sobre a Store</div>
                <div class="list-group-item payment-method pic open">
                   A Store é uma loja onde você pode <b>comprar recursos</b> com as moedas do Hotel. Fique atento neste página, os produtos ficam disponíveis por tempo limitado.

                   <br><br>
                   <b>Você pode comprar nesta página:</b>
                   <br>
                   • Placar de conquista <br>
                   • Pacote de emblemas <br>
                   • Efeitos especiais <br>
                   • Comandos temporários <br>
                   • Quartos decorados <br>

                   Entre outros produtos, fique ligado :)




            </div>
        </div>
    </div>
    <div class="modal fade" id="purchaseModal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Escolher Método</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="alerts" class="alert alert-danger">Você não possui Duckets o suficiente!</div>
                    <h5 style="text-align: center" id="price">800 Duckets</h5>
                    <div id="buttons"><button class="btn btn-block btn-lg btn-danger ng-scope" ng-click="buyProduct(7)">Comprar com Duckets</button></div>
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