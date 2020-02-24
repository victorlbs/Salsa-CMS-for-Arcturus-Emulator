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
class SalsaDado
{
    static function usuarios_online($conn)
    {
        $qr = "SELECT * FROM users WHERE online='1'";
        if ($r = mysqli_query($conn, $qr)) {
            $online = mysqli_num_rows($r);
            echo $online;
            mysqli_free_result($r);
        }
    }
    static function usuarios_registrados($conn)
    {
        $qr = "SELECT * FROM users";
        if ($r = mysqli_query($conn, $qr)) {
            $reg = mysqli_num_rows($r);
            echo $reg;
            mysqli_free_result($r);
        }
    }
    static function items($conn)
    {
        $qr = "SELECT * FROM items";
        if ($r = mysqli_query($conn, $qr)) {
            $itens = mysqli_num_rows($r);
            echo $itens;
            mysqli_free_result($r);
        }
    }
    static function conversas($conn)
    {
        $qr = "SELECT * FROM chatlogs_room";
        if ($r = mysqli_query($conn, $qr)) {
            $itens = mysqli_num_rows($r);
            echo $itens;
            mysqli_free_result($r);
        }
    }
    static function banimentos($conn)
    {
        $qr = "SELECT * FROM bans";
        if ($r = mysqli_query($conn, $qr)) {
            $itens = mysqli_num_rows($r);
            echo $itens;
            mysqli_free_result($r);
        }
    }
    static function unicoid()
    {
        $id    = time();
        $unico = md5($id);
        echo $unico;
    }
}
