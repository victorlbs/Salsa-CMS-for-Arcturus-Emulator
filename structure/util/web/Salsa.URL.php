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
session_start();
include ''.$_SERVER['DOCUMENT_ROOT'].'/arc.config.php';
$dir = '' . $_SERVER['DOCUMENT_ROOT'] . '/structure/functions/';
$dir = dir($dir);
while ($arquivo = $dir->read()) {
    if ($arquivo == ".." || $arquivo == ".") {
    } else {
        include '' . $_SERVER['DOCUMENT_ROOT'] . '/structure/functions/' . $arquivo . '';
    }
}
$dir->close();
if ($_SERVER["REQUEST_URI"] == "/") header("Location: /index");
if (isset($_GET['url'])) {
    $arquivo = '' . $_SERVER['DOCUMENT_ROOT'] . '/structure/files/tema/' . tema . '/' . $_GET['url'] . '.php';
    if (file_exists($arquivo)) {
        if (manutencao == 1 && $mns == 0) {
            if ($_SERVER["REQUEST_URI"] != "/manutencao") {
                header("Location: /manutencao");
            } else {
                include '' . $_SERVER['DOCUMENT_ROOT'] . '/structure/files/tema/' . tema . '/manutencao.php';
            }
        } elseif (manutencao == 1 && $mns == 1) {
            include '' . $_SERVER['DOCUMENT_ROOT'] . '/structure/files/tema/' . tema . '/' . $_GET['url'] . '.php';
        } else {
            include '' . $_SERVER['DOCUMENT_ROOT'] . '/structure/files/tema/' . tema . '/' . $_GET['url'] . '.php';
        }
    } else {
        include '' . $_SERVER['DOCUMENT_ROOT'] . '/structure/files/tema/' . tema . '/' . $config['404page'] . '.php';
    }
}

   


