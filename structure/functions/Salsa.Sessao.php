<?php
/***
 *                _
 *               | |
 *      ___  __ _| |___  __ _
 *     / __|/ _` | / __|/ _` |
 *     \__ \ (_| | \__ \ (_| |
 *     |___/\__,_|_|___/\__,_|
 *     GitHub: https://github.com/victorlbs/Salsa-CMS-for-Arcturus-Emulator/
 *
 *
*/
include 'Salsa.Database.php';
define('u', $_SERVER["REQUEST_URI"]);
if (isset($_SESSION['usuario']) && isset($_SESSION['senha'])) {
    $senhageradasesaao = password_hash($_SESSION['senha'], PASSWORD_BCRYPT);
    if (password_verify($_SESSION['senha'], $senhageradasesaao)) {
        $sql = "SELECT * FROM users WHERE username='" . $_SESSION['usuario'] . "'";
        $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $row = $query->fetch_assoc();
        {
            $sessao = $row['username'];
            $mns = $row['rank'];
            $rpns = $row['look'];
            $user_missao = $row['motto'];
            $user_creditos = $row['credits'];
            $user_login = $row['last_login'];
            $user_eventos = $row['pontos_evento'];
            $user_promocao = $row['pontos_promocao'];
            $cur = $sessao;
            define("usuario", $cur);
        }

        if (u == "/index") {
            header("Location: /me");
        }
    } else {
        $sessao = 0;
        $cur = 0;
        $user_missao =0;
        $mns = 0;
        $user_promocao = 0;
        $user_eventos = 0;
        $user_creditos = 0;
        switch (u) {
            case '/me':
                header("Location: /");
            break;
            case '/config':
                header("Location: /");
            break;
            case '/client':
                header("Location: /");
            break;
            case '/produtos':
                header("Location: /");
            break;
            default:
            break;
        }
    }
}
if (isset($_SESSION['usuario']) && isset($sessao)) {
    $zaq = "SELECT * FROM users WHERE username='" . $sessao . "'";
    $qs = mysqli_query($conn, $zaq) or die(mysqli_error($conn));
    $dados = $qs->fetch_assoc();
    {
        define("status", $dados['motto']);
        define("credits", $dados['credits']);
        define("roupanova", $dados['look']);
        define("online", $dados['online']);
        define("rank", $dados['rank']);
        define("id", $dados['id']);
        $referidos = $dados['referidos'];
        $rank = $dados['rank'];
        $ip = $dados['ip_current'];
        $roupa = $dados['look'];
        if (u == "/registro") {
            header("Location: /me");
        }
    }
} else {
    $_SESSION['usuario'] = null;
    $sessao = null;
    $cur = $sessao;
    $mns = null;
    $rank = null;
    $user_missao = null;
    $user_promocao = null;
    $user_eventos = null;
    $user_creditos = null;
    define("usuario", $cur);
    switch (u) {
        case '/me':
            header("Location: /");
        break;
        case '/config':
            header("Location: /");
        break;
        case '/client':
            header("Location: /");
        break;
        case '/produtos':
            header("Location: /");
        break;
        default:
        break;
    }
}
if ($cur != usuario || $cur != $sessao || $sessao != usuario) {
    session_destroy();
    header("Location: /");
}
// Site
define('nome', $config['site.nome']);
define('url', $config['site.url']);
define('manutencao', $config['site.manutencao']);
define('log', $config['site.login']);
define('avatarimage', $config['site.avatar']);
define('redirecionamentos', $config['site.red']);
define('rank_minimo_manutencao', $config['site.rank.minimo']);
define('camuflarclient', $config['site.cmfclient']);
// Util
define('facebook', $config['tema.facebook']);
define('twitter', $config['tema.twitter']);
define('discord', $config['tema.discord']);
define('tema', $config['tema.tema']);
define('logo', $config['tema.logo']);
define('topo', $config['tema.topheader']);
define('urlemblemas', $config['tema.urlemblemas']);
define('postagens', $config['tema.postagens']);
// Registro
define('missao', $config['registro.missao']);
define('visual', $config['registro.visual']);
define('creditos', $config['registro.creditos']);
define('quartoinicial', $config['registro.quartoinicial']);
define('reg', $config['registro.ativado']);
define('contasporip', $config['registro.contasporip']);
define('captcha', $config['registro.captcharegistro']);
// Painel de controle
define('rmin', $config['painel.rankminimo']);
define('premiar_creditos', $config['painel.premiar_creditos']);
define('premiar_diamantes', $config['painel.premiar_diamantes']);
define('premiar_codigo_emblema', $config['painel.premiar_codigo_emblema']);
// Data
define('ano', date("Y"));
define('dia', date("d"));

if (camuflarclient == 1) {
    $config['connection.info.host'] = camuflar($config['connection.info.host']);
    $config['connection.info.port'] = camuflar($config['connection.info.port']);
}
if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
    $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
}
