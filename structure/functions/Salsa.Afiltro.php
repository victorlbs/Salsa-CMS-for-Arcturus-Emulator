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
 */

if (strrpos($_SERVER["REQUEST_URI"], ".php") || strrpos($_SERVER["REQUEST_URI"], ".php") !== false) {
    header("Location: /");
    exit;
}
function camuflar($salsaencodest)
{
    $salsaencodest = trim($salsaencodest);
    $salsaencode   = $salsaencodest;
    $salsaencode   = str_replace("0", "%30", $salsaencode);
    $salsaencode   = str_replace("1", "%31", $salsaencode);
    $salsaencode   = str_replace("2", "%32", $salsaencode);
    $salsaencode   = str_replace("4", "%34", $salsaencode);
    $salsaencode   = str_replace("5", "%35", $salsaencode);
    $salsaencode   = str_replace("6", "%36", $salsaencode);
    $salsaencode   = str_replace("7", "%37", $salsaencode);
    $salsaencode   = str_replace("8", "%38", $salsaencode);
    $salsaencode   = str_replace("9", "%39", $salsaencode);
    $salsaencode   = str_replace("%%", "%", $salsaencode);
    $salsaencode   = str_replace("%%%", "%", $salsaencode);
    $salsaencode   = str_replace("%%%%", "%", $salsaencode);
    $salsaencode   = str_replace("%%%%%", "%", $salsaencode);
    $salsaencode   = str_replace("%%%%%%", "%", $salsaencode);
    $salsaencode   = str_replace("%%", "%", $salsaencode);
    $salsaencode   = str_replace(".", "%2E", $salsaencode);
    $salsaencode   = str_replace("a ", "%61", $salsaencode);
    $salsaencode   = str_replace("b", "%62", $salsaencode);
    $salsaencode   = str_replace("c", "%63", $salsaencode);
    $salsaencode   = str_replace("d", "%64", $salsaencode);
    $salsaencode   = str_replace("e", "%65", $salsaencode);
    $salsaencode   = str_replace("f", "%66", $salsaencode);
    $salsaencode   = str_replace("g", "%67", $salsaencode);
    $salsaencode   = str_replace("h", "%68", $salsaencode);
    $salsaencode   = str_replace("i", "%69", $salsaencode);
    $salsaencode   = str_replace("j", "%6A", $salsaencode);
    $salsaencode   = str_replace("k", "%6B", $salsaencode);
    $salsaencode   = str_replace("l", "%6C", $salsaencode);
    $salsaencode   = str_replace("m", "%6D", $salsaencode);
    $salsaencode   = str_replace("n", "%6E", $salsaencode);
    $salsaencode   = str_replace("o", "%6F", $salsaencode);
    $salsaencode   = str_replace("p", "%70", $salsaencode);
    $salsaencode   = str_replace("q", "%71", $salsaencode);
    $salsaencode   = str_replace("r", "%72", $salsaencode);
    $salsaencode   = str_replace("s", "%73", $salsaencode);
    $salsaencode   = str_replace("t", "%74", $salsaencode);
    $salsaencode   = str_replace("u", "%75", $salsaencode);
    $salsaencode   = str_replace("v", "%76", $salsaencode);
    $salsaencode   = str_replace("w", "%77", $salsaencode);
    $salsaencode   = str_replace("x", "%78", $salsaencode);
    $salsaencode   = str_replace("y", "%79", $salsaencode);
    $salsaencode   = str_replace("z", "%7A", $salsaencode);
    $salsaencodest = str_replace(")", "", $salsaencode);
    return $salsaencodest;
}
function fs($str)
{
    $str   = htmlspecialchars(trim($str));
    $texto = $str;
    $texto = str_replace("INSERT", "IN-SER-T", $texto);
    $texto = str_replace("DELETE", "DE-LE-TE", $texto);
    $texto = str_replace("TRUNCATE", "TRUN-CA-TE", $texto);
    $texto = str_replace("SELECT", "SE-LEC-T", $texto);
    $texto = str_replace("ALTER", "AL-TER", $texto);
    $texto = str_replace("UPDATE", "UP-DA-TE", $texto);
    $texto = str_replace("inert", "IN-SER-T", $texto);
    $texto = str_replace("delete", "DE-LE-TE", $texto);
    $texto = str_replace("truncate", "TRUN-CA-TE", $texto);
    $texto = str_replace("select", "SE-LEC-T", $texto);
    $texto = str_replace("alter", "AL-TER", $texto);
    $texto = str_replace("update", "UP-DA-TE", $texto);
    $texto = str_replace("script", "", $texto);
    $texto = str_replace("SCRIPT", "", $texto);
    $texto = str_replace("onion", "", $texto);
    $texto = str_replace("www", "", $texto);
    $texto = str_replace("http://", "", $texto);
    $texto = str_replace("https://", "", $texto);
    $texto = str_replace("<", "", $texto);
    $texto = str_replace(">", "", $texto);
    $texto = str_replace("/", "", $texto);
    $texto = str_replace("(", "", $texto);
    $str   = str_replace(")", "", $texto);
    return $str;
}
function rmdominio($link)
{
    if (preg_match("/^(http:\/\/|www.)/i", $link)) {
        $vlrtexto = preg_replace("/^(http:\/\/)*(www.)*/is", "", $link);
    } else {
        $vlrtexto = $link;
    }
    $vlrtexto = explode(".", $vlrtexto);
    return $vlrtexto[0];
}
function noticia($str)
{
    $str   = htmlspecialchars(trim($str));
    $texto = $str;
    $texto = str_replace("/noticia?=", "", $texto);
    $texto = str_replace("/perfil?=", "", $texto);
    $texto = str_replace("/convite?=", "", $texto);
    $texto = str_replace("/panel/salsa-editar-noticia?=", "", $texto);
    $str   = str_replace(")", "", $texto);
    return $str;
}
$noticiaid    = $_SERVER["REQUEST_URI"];
$noticia      = noticia($noticiaid);
$noticiafinal = fs($noticia);
if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $noticiafinal))
    $noticiafinal = 0;
else
    $noticiafinal = $noticiafinal;
