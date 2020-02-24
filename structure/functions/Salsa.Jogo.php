<?php
error_reporting(E_ALL); 
ini_set('display_errors', 'On'); 
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
class SalsaSSo {
    static function sso($conn) {
        $sso = strtotime("Now");
        $ssonome = "Salsa-";
        $ssofix = rand(1, 999);
        $ssoss = $sso - $ssofix;
        $ssofinal = "" . $ssonome . "" . $ssoss . "-" . usuario . "-" . md5($sso) . "";
        $m = "UPDATE users SET auth_ticket='" . $ssofinal . "' WHERE username='" . usuario . "'";
        $conn->query($m);
        echo $ssofinal;
    }
}
