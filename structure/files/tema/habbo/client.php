<!DOCTYPE HTML>
<html>
<head>
    <title>Client: <?php echo nome ?></title>
    <meta name="referrer" content="origin">
    <link rel="stylesheet" type="text/css" href="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/game/hotel.css">
     <link rel="stylesheet" type="text/css" href="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/game/flashalerta.css">
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/game/object.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</head>

        <div id="descongelarautomatico" style="display: none;"></div>
        <script>
        descongelar();
        function descongelado() {
            setTimeout(descongelar, 3000);
            document.getElementById("descongelarautomatico").innerHTML = Math.floor(Math.random() * 99999);;
        }
        function descongelar() {
            descongelado();
        }   
    </script>
    
    <div id="FlashSalsa" style="display: none;">
        <center>
            <div class="salsacontainer"></div>
            <h1>POR GENTILEZA, PERMITA O FLASH NO SEU NAVEGADOR.</h1>
            <p class="salsatexto">ATENÇÃO USUÁRIOS GOOGLE CHROME!
                <br> Você precisa ativar manualmente o Flash Player nas configurações do seu navegador antes de entrar no Hotel.
                <br> Por favor, veja o tutorial e logo após clique em Permitir Flash.</p>

            <br>
            <a ng-href="http://www.adobe.com/go/getflashplayer" target="_blank" rel="noopener noreferrer" href="http://www.adobe.com/go/getflashplayer" habbo-android-download-link="" habbo-ios-download-link="" class="register-banner__button" translate="REGISTER_PROMPT">Permitir Flash</a>
            <a style="width: 240px;" target="_blank" rel="noopener noreferrer" href="https://www.habbo.com.br/community/article/28485/importante-habilite-o-flash-player-nonavegador-google-chrome" habbo-android-download-link="" habbo-ios-download-link="" class="register-banner__button" translate="REGISTER_PROMPT">Tutorial de ativação</a>

            <div class="client-error__hotel-button-div">
            </div>
        </center>
    </div>

    <script id="sclient" type="text/javascript">
        var flashvars = {
            "external.texts.txt":"<?php echo $config['external.texts.txt'] ?>",
            "connection.info.port":"<?php echo $config['connection.info.port'] ?>",
            "furnidata.load.url":"<?php echo $config['furnidata.load.url'] ?>",
            "external.variables.txt":"<?php echo $config['external.variables.txt'] ?>",
            "client.allow.cross.domain":"1",
            "url.prefix":"<?php echo $config['url.prefix'] ?>",
            "external.override.texts.txt":"<?php echo $config['external.override.texts.txt'] ?>",
            "supersonic_custom_css":"https:\/\/images.habbo.com\/game-data-server-static\/\/.\/hotel.731d1960.css",
            "external.figurepartlist.txt":"<?php echo $config['external.figurepartlist.txt'] ?>",
            "flash.client.origin":"popup",
            "client.starting":"Por favor aguarde! O Habbo est\u00E1 carregando...",
            "processlog.enabled":"1",
            "has.identity":"1",
            "avatareditor.promohabbos":"https:\/\/www.habbo.com.br\/api\/public\/lists\/hotlooks",
            "productdata.load.url":"<?php echo $config['productdata.load.url'] ?>",
            "client.starting.revolving":"Quando voc\u00EA menos esperar...terminaremos de carregar...\/Carregando mensagem divertida! Por favor espere.\/Voc\u00EA quer batatas fritas para acompanhar?\/Siga o pato amarelo.\/O tempo \u00E9 apenas uma ilus\u00E3o.\/J\u00E1 chegamos?!\/Eu gosto da sua camiseta.\/Olhe para um lado. Olhe para o outro. Pisque duas vezes. Pronto!\/N\u00E3o \u00E9 voc\u00EA, sou eu.\/Shhh! Estou tentando pensar aqui.\/Carregando o universo de pixels.",
            "external.override.variables.txt":"<?php echo $config['external.override.variables.txt'] ?>",
            "spaweb":"1",
            "supersonic_application_key":"2c63c535",
            "connection.info.host":"<?php echo $config['connection.info.host'] ?>",
            "sso.ticket":"<?php SalsaSSo::sso($conn) ?>",
            "client.notify.cross.domain":"0",
            "account_id":"<?php echo id ?>",
            "flash.client.url":"<?php echo $config['flash.client.url'] ?>",
            "unique_habbo_id":"hhbr-<?php SalsaDado::unicoid() ?>",
        };
    </script>
    <script type="text/javascript" src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/game/hotel.js"></script>

    <script type="text/javascript">
        var params = {
            "base" : "<?php echo $config['flash.client.url'] ?>",
            "allowScriptAccess" : "always",
            "menu" : "false",
            "sclient": 1,
            "wmode": "opaque"
        };
        swfobject.embedSWF('<?php echo $config['habbo.swf'] ?>', 'flash-container', '100%', '100%', '11.1.0', '//images.habbo.com/habboweb/63_1d5d8853040f30be0cc82355679bba7c/12068/web-gallery/flash/expressInstall.swf', flashvars, params, null, null);
    </script>
</head>
<body>
<div id="client-ui">
    <div id="flash-wrapper">
        <div id="flash-container">
            <div id="content" style="">
                
            </div>
        </div>
    </div>
    <div id="content" class="client-content"></div>
    <iframe id="page-content" class="hidden" allowtransparency="true" frameBorder="0" src="about:blank"></iframe>
</div>
  <script type="text/javascript">
        if (swfobject.hasFlashPlayerVersion("1")) {} else {
            $("#FlashSalsa").removeAttr("style");
            document.getElementById("client-ui").remove();
        }
    </script>

</body>
</html>