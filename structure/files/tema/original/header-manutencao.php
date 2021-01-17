<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style type="text/css">
        @charset "UTF-8";
        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak,
        .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }
        
        ng\:form {
            display: block;
        }
        
        .ng-animate-shim {
            visibility: hidden;
        }
        
        .ng-anchor {
            position: absolute;
        }
    </style>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" type="image/x-icon" href="https://i.imgur.com/uRUsL19.png">

    <title>
      <?php echo $titulo ?>
    </title>

    <meta name="keywords" content="<?php echo nome ?>, habblet, habblethotel, habblive, habb, lella, lellahotel,lella hotel, habbinfo, habbinfo hotel, habblive, habblive hotel, habbolatino, habbletlatino, habblet, habblethotel, crazzy, habb, habbhotel , furnis , mobs, client, cliente, client hotel, clienthotel, atualizado, catalogo">
    <meta name="robots" content="all">
    <meta name="Googlebot" content="index, follow">
    <meta property="image" content="">
    <meta property="description" content="<?php echo $titulo ?>">
    <meta property="og:title" content="<?php echo $titulo ?>">
    <meta property="og:image" content="">
    <meta property="og:description" content="<?php echo $titulo ?>">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:type" content="game">
    <meta property="og:url" content="<?php echo url ?>">
    <meta property="og:site_name" content="<?php echo nome ?> Hotel">
    <meta property="og:locale" content="pt_BR">
    <meta property="fb:app_id" content="0">
    <meta property="article:tag" content="quiz">
    <meta property="article:author" content="<?php echo url ?>">
    <meta property="article:publisher" content="<?php echo url ?>">
    <meta name="twitter:card" content="photo">
    <meta name="twitter:title" content="<?php echo $titulo ?>">

   

    <link href="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/animate.css">
    <link href="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/all.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        :root {
            --main-light-color: #212529;
            --main-dark-color: #363a3e;
        }
        
        #master-topbg {
            background: url(<?php echo topo ?>) center;
            height: 80px;
        }
        
        #master-logo {
            height: 80px;
            width: 191px;
            background: url(<?php echo logo ?>) right center no-repeat;
        }
        
        #master-logo:hover {
            background-position: left;
        }
        
        #master-indexbigbg {
            color: #fff;
            background: url(https://i.imgur.com/n5bwuVO.png) no-repeat center;
        }
        
        #me-top-profile {
            background: url(https://habbo.city/habbo-imaging/avatarimage?figure=<?php echo $roupa ?>&size=b&direction=2&head_direction=3&gesture=sml&action=wav&size=l) no-repeat center -40px, url(https://1.bp.blogspot.com/-qpavAM5uHiQ/Vt5BfOReKqI/AAAAAAAAkUU/T2GI3XqzWWc/s1600/wallpaper_bigWave.png) right bottom;
            border: none;
            padding: 0px;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            padding: 20px;
            min-height: 100px;
        }
        
        body {
            padding: 0;
            margin: 0px;
            background: #edf1f2;
            font-family: 'Open Sans', sans-serif;
            font-size: 13px;
            line-height: 1.42857143;
        }
        
        a:hover {
            text-decoration: none;
        }
        
        .navbar {
            background: #1e262c !important;
            border-bottom: 4px solid #1b2228;
            margin-bottom: 20px;
            font-size: 14px;
        }
        
        .nav-item.active {
            font-weight: bold;
        }
        
        .fas,
        .far {
            font-size: 16px;
        }
        
        .container {
            max-width: 1024px;
        }
        
        .dropdown-item,
        .dropdown-item.active,
        .dropdown-item:active {
            font-size: 13px;
            color: #1e262c;
            transition: all .2s ease-out;
        }
        
        .dropdown-item:hover {
            font-weight: bold;
        }
        
        .dropdown-item:active {
            background: initial;
        }
        
        .onlineUsersNumber {
            font-size: 22px;
            font-weight: bold;
            color: #474747;
            font-family: sans-serif;
            -webkit-animation: change-color 4s linear 0s infinite normal;
            animation: change-color 4s linear 0s infinite normal;
        }
        
        .list-header {
            background: #1e262c;
            color: #fff;
            font-size: 14px;
            font-weight: bold;
        }
        
        .form-control,
        .custom-select {
            padding: 7px 12px;
            font-size: 13px;
            border: 1px solid #e7e7e7;
            box-shadow: inset 0 2px 0 rgba(0, 0, 0, 0.075);
        }
        
        .form-group label {
            color: #1e262c;
            font-weight: bold;
        }
        
        .btn {
            font-weight: bold;
            font-size: 14px;
            border-width: 0px;
            border-bottom-width: 5px;
            border-color: rgba(0, 0, 0, .1) !important;
        }
        
        .btn-primary,
        .btn-primary:disabled {
            background-color: var(--main-light-color);
        }
        
        .btn-primary:hover,
        .btn-primary:active,
        .btn-primary.active,
        .btn-primary:focus,
        .btn-primary:not(:disabled):not(.disabled):active:focus {
            background-color: var(--main-dark-color) !important;
            border-color: rgba(0, 0, 0, .2) !important;
        }
        
        .alert-me {
            background-color: #1f272d;
            color: #ffffff;
            border-bottom: 4px solid #1b2228;
            padding: 5px 20px;
            margin-bottom: 5px;
        }
        
        .client-btn {
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            color: #fff;
            background: var(--main-light-color);
            border-top: 1px solid var(--main-dark-color);
            padding: 10px;
            cursor: pointer;
            float: left;
            width: 100%;
            transition: all .2s ease-out;
        }
        
        .client-btn:hover {
            background: var(--main-dark-color);
        }
        
        .carousel-title {
            color: #fff;
            font-size: 16px;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, .3);
            font-weight: bold;
        }
        
        .carousel-desc {
            color: #fff;
            font-size: 14px;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, .5);
        }
        
        .feed-item-image {
            width: 50px;
            height: 70px;
            background-position: -9px -15px;
            margin-right: 5px;
            margin-top: -5px;
            float: left;
        }
        
        .feed-item {
            padding-left: 5px;
            overflow: auto;
        }
        
        .feed-item-body {
            width: calc(100% - 55px);
            float: left;
        }
        
        .feed-item-timestamp {
            float: right;
            font-size: 11px;
        }
        
        .feed-item-title {
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 5px;
        }
        
        .feed-item-content.commenting {
            padding: 0;
            padding-top: 5px;
        }
        
        .feed-item-actions a {
            margin-right: 10px;
            color: rgba(0, 0, 0, .8);
        }
        
        .emoji-list {
            float: left;
            max-width: calc(100% - 145px);
            max-height: 100px;
            overflow: hidden;
        }
        
        .emoji-list-long {
            max-width: 100%;
            max-height: 100px;
            margin-bottom: 10px;
            overflow: hidden;
        }
        
        .emoji-list img,
        .emoji-list-long img {
            cursor: pointer;
            opacity: .7;
            transition: all .2s ease-out;
        }
        
        .emoji-list img:hover,
        .emoji-list-long img:hover {
            opacity: 1;
        }
        
        .emoji-list.closed,
        .emoji-list-long.closed {
            max-width: 20px;
            max-height: 20px;
        }
        
        .embed-responsive {
            border-radius: 4px;
            overflow: hidden;
        }
        
        .img-responsive,
        .thumbnail>img,
        .thumbnail a>img,
        .carousel-inner>.item>img,
        .carousel-inner>.item>a>img {
            display: block;
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
            border-radius: 4px;
        }
        
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
        
        .embed-responsive {
            margin-bottom: 10px;
        }
        
        .updateFeedBtn {
            text-align: center;
            cursor: pointer;
            color: #fff;
            font-weight: bold;
            background: var(--main-light-color);
            transition: all .2s ease-out;
        }
        
        .updateFeedBtn:hover {
            background: var(--main-dark-color);
        }
        
        .embed-article {
            box-shadow: 2px 2px 10px rgba(0, 0, 0, .1);
            height: 120px;
            padding: 20px;
            border-radius: 4px;
            margin-bottom: 10px;
        }
        
        .embed-article-title {
            font-size: 18px;
            color: #212529;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .embed-article-desc {
            color: #212529;
        }
        
        #articleTopImage {
            width: 100%;
            padding: .75rem 1.25rem;
            border-bottom: 1px solid rgba(0, 0, 0, .125);
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            font-size: 14px;
            font-weight: bold;
        }
        
        #article-body {
            width: 560px;
            font-family: verdana;
            font-size: 11px;
            padding: 10px 15px 0px 15px;
        }
        
        #article-footer {
            width: 559px;
            padding: 0px 15px 0px 10px;
            border-top: 1px solid rgba(0, 0, 0, .125);
            background: rgba(0, 0, 0, .03);
        }
        
        #article-body img {
            max-width: 100%;
        }
        
        #article-body p {
            margin: 0 0 10px;
        }
        
        .article-author {
            float: left;
            margin-top: 10px;
        }
        
        .article-author-image {
            width: 50px;
            height: 60px;
            background-position: -10px -10px;
            float: left;
        }
        
        .article-reaction {
            font-size: 13px;
            line-height: 20px;
            background: rgba(0, 0, 0, .03);
            margin-right: 5px;
            margin-bottom: 5px;
            cursor: pointer;
            border: 1px solid rgba(0, 0, 0, .125);
        }
        
        .article-reaction.given {
            color: #0960a5;
            background: rgba(3, 169, 244, .2);
        }
        
        .article-reaction.add-reaction {
            opacity: .5;
        }
        
        .article-reaction.add-reaction i {
            font-size: 11px;
        }
        
        .article-reaction.add-reaction:hover {
            opacity: 1;
        }
        
        .article-reaction img {
            margin-right: 10px;
            float: left;
        }
        
        .user-reaction {
            float: left;
            width: 50px;
            height: 50px;
            background-position: -9px -10px;
        }
        
        #hall-of-fame {
            background: url(https://i.imgur.com/2JGA0l0.png) center;
            border: none;
            padding: 0px;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            padding: 20px;
            min-height: 100px;
        }
        
        .user-profile-image {
            width: 70px;
            height: 85px;
            float: left;
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
            margin-right: 5px;
        }
        
        .user-profile-content {
            padding-top: 10px;
            width: calc(100% - 75px);
            float: left;
        }
        
        .payment-method {
            overflow: hidden;
            max-height: 45px;
            cursor: pointer;
            transition: all .2s ease-out;
        }
        
        .payment-method.open {
            cursor: initial;
            max-height: unset;
        }
        
        .podium {
            overflow: auto;
            padding: 0px;
            border: none;
            min-height: 130px;
        }
        
        .podium-1 {
            background-position: center -30px;
        }
        
        .podium-2 {
            background-position: -15px -10px;
        }
        
        .podium-3 {
            background-position: 105% -10px;
        }
        
        .podium-1,
        .podium-2,
        .podium-3 {
            background-repeat: no-repeat;
            height: 130px;
            width: 100%;
            position: absolute;
        }
        
        .podium-sector {
            position: absolute;
            text-align: center;
            opacity: 0;
            transition: all .2s ease-out;
            font-size: 16px;
            color: #fff;
            font-weight: bold;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, .5);
        }
        
        .podium-sector:hover {
            opacity: 1;
        }
        
        .floatingEffect {
            transition: all .5s ease;
            animation-direction: alternate;
            animation-duration: 1s;
            animation-iteration-count: infinite;
            animation-name: float-landing-2wj_IS;
            animation-timing-function: ease-in-out;
        }
        
        @-webkit-keyframes float-landing-2wj_IS {
            0% {
                -webkit-transform: translate3d(0, -2px, 0);
                transform: translate3d(0, -2px, 0)
            }
            to {
                -webkit-transform: translate3d(0, 2px, 0);
                transform: translate3d(0, 2px, 0)
            }
        }
        
        @keyframes float-landing-2wj_IS {
            0% {
                -webkit-transform: translate3d(0, -2px, 0);
                transform: translate3d(0, -2px, 0)
            }
            to {
                -webkit-transform: translate3d(0, 2px, 0);
                transform: translate3d(0, 2px, 0)
            }
        }
        
        .feed-poll-option {
            margin-bottom: 10px;
        }
        
        .feed-poll {
            padding: 10px 0 10px;
            max-height: 222px;
            overflow: hidden;
            border-top: 1px solid rgba(0, 0, 0, .1);
        }
        
        .feed-poll-option-radio {
            background: rgba(0, 0, 0, .03);
            border-radius: 4px;
            padding: 3px 10px;
            line-height: 24px;
            margin-top: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: all .2s ease-out;
        }
        
        .feed-poll-option-radio:hover,
        .feed-poll-option-radio.selected {
            background: rgba(0, 123, 255, .1);
        }
        
        .feed-poll .progress {
            width: calc(100% - 50px);
            height: 30px;
            margin-bottom: 10px;
            background: transparent;
        }
        
        .feed-poll .progress-bar {
            text-align: left;
            background: rgba(0, 0, 0, .05);
            color: #212529;
            font-weight: bold;
        }
        
        .feed-poll .progress-bar div {
            text-align: left;
            padding-left: 10px;
        }
        
        .feed-poll .option-percentage {
            float: left;
            width: 50px;
            font-size: 14px;
            line-height: 30px;
            text-align: center;
            font-weight: bold;
        }
        
        .cookies-warning {
            position: fixed;
            bottom: 0;
            font-size: 16px;
            padding: 20px 25px;
            background: #e91e63;
            width: 100%;
            color: #fff;
            font-weight: bold;
            display: none;
            z-index: 99999999;
            cursor: pointer;
        }
    </style>
    <script src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/angular.min.js" type="text/javascript"></script>
    
    
    <script src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/jquery-3.4.1.min.js"></script>
    <script src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/api.js" async="" defer=""></script>
    <script src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript">
        function salsalikes {

        }
    </script>

    <style type="text/css">
        .mx-tip-panel:focus {
            outline: 0;
        }
        
        .mx_keyword {
            line-height: 20px;
            color: #333333;
            font-size: 14px;
            letter-spacing: 0.2px;
            font-family: PingFangSC-Semibold;
        }
        
        .mx-scrollbar::-webkit-scrollbar {
            width: 8px;
            height: 1px;
        }
        
        .mx-scrollbar {
            overflow-y: auto;
            max-height: 380px;
        }
        
        .mx-scrollbar::-webkit-scrollbar-thumb {
            border-radius: 4px;
            background: #C0C0C0;
        }
        
        .mx-scrollbar::-webkit-scrollbar-track {
            border-radius: 4px;
            background: #eeeeee;
        }
        
        .maxthon_tip {
            background-color: white;
            border: none;
        }
        
        .maxthon_tip:active {
            background-color: #E6F4FF;
            border: 1px solid #449EFB;
        }
        
        .maxthon_tip:hover {
            background-color: #E6F4FF;
            border: 1px solid #449EFB;
        }
    </style>
    <script charset="utf-8" src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/moment_timeline_tweet.a1aa0f6410f7eaada23e6b16a38824b8.js"></script>
    <script charset="utf-8" src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/timeline.f7ace10bb00711bb451dd36523152463.js"></script>
    <style type="text/css">
        #maxthon-1eec22d4-0232-4212-8283-6f2ac8f967-iframe {
            display: block!important;
            position: absolute!important;
            visibility: visible!important;
            z-index: 2147483647!important;
            border-style: none!important;
            opacity: 1!important;
            margin: 0!important;
            padding: 0!important;
            box-shadow: 0 0 5px rgba(0, 0, 0, .3)!important;
            border: 1px solid #b3b3b3!important
        }
    </style>
    <style type="text/css">
        #maxthon-1eec22d4-0232-4212-8283-6f2ac8f967-iframe {
            display: block!important;
            position: absolute!important;
            visibility: visible!important;
            z-index: 2147483647!important;
            border-style: none!important;
            opacity: 1!important;
            margin: 0!important;
            padding: 0!important;
            box-shadow: 0 0 5px rgba(0, 0, 0, .3)!important;
            border: 1px solid #b3b3b3!important
        }
    </style>
</head>

<body ng-app="formApp" class="animated fadeIn ng-scope">
    <div id="sound"></div>

    <div class="cookies-warning animated bounce">
        <i class="fas fa-exclamation-triangle" style="font-size: 20px; float: left; margin-right: 20px"></i> Nós utilizamos cookies para melhorar a sua experiência aqui dentro. Ao continuar utilizando nosso site você está de acordo com isso.
        <span style="float: right; color: rgba(255, 255, 255, .8); font-size: 18px">OK?</span>
    </div>
    <div id="master-topbg" ng-controller="gameHeaderController" class="ng-scope">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="<?php echo url ?>/index">
                        <div id="master-logo"></div>
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="pull-right">
                        <div style="float:right; margin-top: 10px; padding:10px; text-align: center; background-color: #fff; border-radius: 5px;">
                            <div style="padding: 6px; width: 60px;  line-height: 80%;">
                                <span class="onlineUsersNumber ng-binding"><?php SalsaDado::usuarios_online($conn) ?></span>
                                <small ng-show="usersOnStatus !== 0" class="" style="">
                                <i ng-show="usersOnStatus &gt; 0" style="color:#459b4a" class="fas fa-level-up ng-hide" aria-hidden="true"></i>
                                <i ng-show="usersOnStatus &lt; 0" style="color:#c43c3c" class="fas fa-level-down ng-hide" aria-hidden="true"></i>
                            </small>
                                <br>
                                <small>online</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login para membros da equipe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
            <label>Nome de usuário:</label><br>
            <input class="form-control" type="text" name="usuario_salsa" required="">
            <br>
            <label>Senha:</label><br>
            <input class="form-control" type="password" name="senha_salsa" required="">
            <br>
            <input value="Entrar" type="submit" class="btn btn-primary" name="conectar">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        
      </div>
    </div>
  </div>
</div>

    <!-- Fixed navbar -->
    <div ng-controller="notificationsController" class="ng-scope">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav w-100">
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">
                                <i class="fas fa-user"></i>
                                Login Staff
                            </a>
                           
                        </li>
                       
                      
                      

                       
                        
                       
                    </ul>
                </div>
            </div>
        </nav>
        <div class="modal fade" id="notificationsModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Notificações</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body" style="padding: 0">
                        <div class="list-group">
                            <div class="list-group-item" style="text-align: center" ng-show="notifications.length == 0">Tudo limpo por aqui!</div>
                            <!-- ngRepeat: notification in notifications| orderBy:'-id' track by $index -->
                        </div>
                    </div>
                    <div class="modal-footer ng-hide" ng-show="notifications.length &gt; 0">
                        <button type="button" class="btn btn-primary" ng-click="clearNotifications()">Limpar notificações</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php SalsaConta::conectar($conn);
    if (isset($_SESSION['erro'])){
    echo $_SESSION['erro'];
    unset($_SESSION['erro']);
    } ?>
   