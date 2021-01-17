<?php SalsaConta::registrar($conn) ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script data-ad-client="ca-pub-1233643693898528" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
        <?php echo nome ?> - Criar um avatar</title>

    <meta name="keywords" content="<?php echo nome ?>, habblet, habblethotel, habblive, habb, lella, lellahotel,lella hotel, habbinfo, habbinfo hotel, habblive, habblive hotel, habbolatino, habbletlatino, habblet, habblethotel, crazzy, habb, habbhotel , furnis , mobs, client, cliente, client hotel, clienthotel, atualizado, catalogo">
    <meta name="robots" content="all">
    <meta name="Googlebot" content="index, follow">

    <meta property="image" content="">
    <meta property="description" content="">

    <meta property="og:title" content="<?php echo nome ?> Hotel">
    <meta property="og:image" content="">
    <meta property="og:description" content="<?php echo nome ?>, habblet, habblethotel, habblive, habb, lella, lellahotel,lella hotel, habbinfo, habbinfo hotel, habblive, habblive hotel, habbolatino, habbletlatino, habblet, habblethotel, crazzy, habb, habbhotel , furnis , mobs, client, cliente, client hotel, clienthotel, atualizado, catalogo">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:type" content="game">
    <meta property="og:url" content="<?php echo url ?>">
    <meta property="og:site_name" content="<?php echo nome ?> Hotel">
    <meta property="og:locale" content="pt_BR">
    <meta property="fb:app_id" content="-">
    <meta property="article:tag" content="quiz">
    <meta property="article:author" content="<?php echo facebooklink ?>">
    <meta property="article:publisher" content="<?php echo facebooklink ?>">

    <meta name="twitter:card" content="photo">
    <meta name="twitter:title" content="<?php echo nome ?> Hotel">

    <script src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/OneSignalSDK.js" async=""></script>

    <script src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/OneSignalPageSDKES6.js" async=""></script>
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
            width: 240;
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
            background: url(<?php echo url ?>/avatar//size=l&direction=3&head_direction=3&gesture=sml&action=wav) no-repeat center -40px, url(https://i.imgur.com/q8BjFae.png) right bottom;
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
            width: 50%;
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
    <script src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/angular-animate.min.js" type="text/javascript"></script>
    <script src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/jquery-3.4.1.min.js"></script>
    <script src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/api.js" async="" defer=""></script>
    <script src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="<?php echo url ?>/structure/files/tema/<?php echo tema ?>/css_files/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return null;
        }

        function setCookie(cname, value) {
            document.cookie = 'client_preference=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
            var d = new Date();
            d.setTime(d.getTime() + (900 * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + value + ";" + expires + ";path=/";
        }

        function getAverageRGB(imgEl) {

            var blockSize = 5, // only visit every 5 pixels
                defaultRGB = {
                    r: 0,
                    g: 0,
                    b: 0
                }, // for non-supporting envs
                canvas = document.createElement('canvas'),
                context = canvas.getContext && canvas.getContext('2d'),
                data, width, height,
                i = -4,
                length,
                rgb = {
                    r: 0,
                    g: 0,
                    b: 0
                },
                count = 0;

            if (!context) {
                return defaultRGB;
            }

            height = canvas.height = imgEl.naturalHeight || imgEl.offsetHeight || imgEl.height;
            width = canvas.width = imgEl.naturalWidth || imgEl.offsetWidth || imgEl.width;

            context.drawImage(imgEl, 0, 0);

            try {
                data = context.getImageData(0, 0, width, height);
            } catch (e) {
                /* security error, img on diff domain */
                return defaultRGB;
            }

            length = data.data.length;

            while ((i += blockSize * 4) < length) {
                ++count;
                rgb.r += data.data[i];
                rgb.g += data.data[i + 1];
                rgb.b += data.data[i + 2];
            }

            // ~~ used to floor values
            rgb.r = ~~(rgb.r / count);
            rgb.g = ~~(rgb.g / count);
            rgb.b = ~~(rgb.b / count);

            return rgb;

        }

        function getLuma(rgb) {
            return 0.2126 * rgb.r + 0.7152 * rgb.g + 0.0722 * rgb.b; // per ITU-R BT.709
        }

        function timerIncrement() {
            idleTime = idleTime + 1;
            if (idleTime > 10) {
                idleUser = true;

            }
        }

        function getTimeAgo(time) {
            var units = [{
                name: "segundo",
                limit: 60,
                in_seconds: 1
            }, {
                name: "minuto",
                limit: 3600,
                in_seconds: 60
            }, {
                name: "hora",
                limit: 86400,
                in_seconds: 3600
            }, {
                name: "dia",
                limit: 604800,
                in_seconds: 86400
            }, {
                name: "semana",
                limit: 2629743,
                in_seconds: 604800
            }, {
                name: "mês",
                limit: 31556926,
                in_seconds: 2629743
            }, {
                name: "ano",
                limit: null,
                in_seconds: 31556926
            }];
            var diff = (new Date() - new Date(time * 1000)) / 1000;
            var isAgo = true;

            if (diff < 0)
                isAgo = false;

            if (diff < 5)
                return "agora";
            var i = 0,
                unit;
            while (unit = units[i++]) {
                if (diff < unit.limit || !unit.limit) {
                    var diff = Math.floor(diff / unit.in_seconds);

                    if (i == 6)
                        return diff + " " + (diff > 1 ? "meses" : "mês") + (isAgo ? " atrás" : "");
                    else
                        return diff + " " + unit.name + (diff > 1 ? "s" : "") + (isAgo ? " atrás" : "");
                }
            };
        }

        var app = angular.module('formApp', ['ngAnimate']);

        app.filter('trustAsHtml', ['$sce', function($sce) {
            return function(text) {
                return $sce.trustAsHtml(text);
            };
        }]);
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
                                <small>online's</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fixed navbar -->
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav w-100">
                        <li class="nav-item  active">
                            <a class="nav-link" href="<?php echo url ?>/index">Início</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?php echo url ?>/registro">Registre-se</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-5">
            <h3 style="color:#1e262c;font-weight: bold;margin-top:0px">Registre-se</h3>
            <h5 style="color: #a7a7a7;margin-bottom:30px">A poucos passos do paraíso...</h5>
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div id="alerts"></div>
                         <?php
                        if (isset($_SESSION['erro']))
                        {
                            echo '<div class="alert alert-primary" role="alert">';
                            echo $_SESSION['erro'];
                            unset($_SESSION['erro']);
                            echo '</div>';
                        }
                        ?>
                        <form method="post" id="" class="ng-pristine ng-valid">
                            <div class="form-group">
                                <label>Nome de Usuário</label>
                                <input type="text" class="form-control" name="usuario_salsa" id="username" required="">
                            </div>
                            <div class="form-group">
                                <label>Senha</label>
                                <input type="password" name="senha_salsa" class="form-control" id="password" required="">
                            </div>
                            <div class="form-group">
                                <label>Confirmar Senha</label>
                                <input type="password" name="senha_repetir" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" name="email" class="form-control" id="email" required="">
                            </div>

                            <?php if (captcha == 1)
                            {
                                $salgcpa = rand(1000, 9000);
                                ?>


                                <div class="form-group">
                                <label>Digite o Captcha:</label> <?php echo $salgcpa ?>
                                <input hidden="" value="<?php echo $salgcpa ?>" type="text" class="form-control" name="captcha" id="captcha">
                                <input placeholder="Digite o número acima aqui..." type="text" class="form-control" name="captcha_repetir" id="captcha_repetir" required="">
                                </div>




                            <?php } ?>


                            <button type="submit" name="registrar"  class="btn btn-primary g-recaptcha" style="float: right">Criar meu avatar</button>
                        </form>
                    </li>
                </ul>
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

    <div style="visibility: hidden; position: absolute; width: 100%; top: -10000px; left: 0px; right: 0px; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0;">
        <div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.5;"></div>
        <div style="margin: 0px auto; top: 0px; left: 0px; right: 0px; position: absolute; border: 1px solid rgb(204, 204, 204); z-index: 2000000000; background-color: rgb(255, 255, 255); overflow: hidden;">

        </div>
    </div>

</body>

</html>