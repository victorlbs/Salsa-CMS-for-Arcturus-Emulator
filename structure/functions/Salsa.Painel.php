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
class SalsaPainel
{
    static function banir_usuario($conn)
    {
        if (isset($_POST['fnvlr'])) {
            $vlr1    = fs($_POST['vlr1']);
            $vlr2    = fs($_POST['vlr2']);
            $vlr3    = fs($_POST['vlr3']);
            $vlsalsa = 1;
            $ban     = "SELECT * FROM users WHERE username='" . $vlr1 . "'";
            $lg = mysqli_query($conn, $ban) or die(mysqli_error($conn));
            if ($ra = mysqli_query($conn, $ban)) {
                $existe = mysqli_num_rows($ra);
                if ($existe == $vlsalsa) {
                    $query2 = mysqli_query($conn, $ban) or die(mysqli_error($conn));
                    while ($row2 = $query2->fetch_assoc()) {
                        $tm = strtotime("+" . $vlr3 . " days");
                        echo '<div class="alert alert-success" role="alert">';
                        echo 'Banido com sucesso, <b>';
                        echo $vlr1 . '</b> ficará banido até <b>';
                        echo date('d/m/Y H:i', $tm);
                        $ate = date('d/m/Y H:i', $tm);
                        echo '</b></div>';
                        $fnsalsa = "INSERT INTO `bans` (`user_id`, `ip`, `machine_id`, `user_staff_id`, `timestamp`, `ban_expire`, `ban_reason`, `type`, `cfh_topic`, `value`, `bantype`) VALUES ('" . $row2['id'] . "', '" . $row2['ip_current'] . "', '', '" . id . "', '" . strtotime("Now") . "', '" . $tm . "', '" . $vlr2 . "', 'account', '-1', '0', '0');";
                        $conn->query($fnsalsa);
                    }
                } else {
                    echo '<div class="alert alert-danger" role="alert">';
                    echo 'O usuário informado não existe.';
                    echo '<br><a href="' . $_SERVER["REQUEST_URI"] . '">Tentar novamente</a>';
                    echo '</div>';
                }
            }
        }
    }
    static function desbanir_usuario($conn)
    {
        if (isset($_POST['fnvlr'])) {
            $vlr1 = fs($_POST['vlr1']);
            $ban  = "SELECT * FROM users WHERE username='" . $vlr1 . "'";
            $query2 = mysqli_query($conn, $ban) or die(mysqli_error($conn));
            while ($row2 = $query2->fetch_assoc()) {
                $fnsalsa = "DELETE FROM `bans` WHERE `bans`.`user_id` = " . $row2['id'] . "";
                $conn->query($fnsalsa);
            }
            echo '<div class="alert alert-success" role="alert">';
            echo 'Desbanido com sucesso.';
            echo '</div>';
        }
    }
    static function contas_fakes($conn)
    {
        if (isset($_POST['fnvlr'])) {
            $vlr1 = fs($_POST['vlr1']);
            $ban  = "SELECT * FROM users WHERE username='" . $vlr1 . "'";
            $query2 = mysqli_query($conn, $ban) or die(mysqli_error($conn));
            while ($row2 = $query2->fetch_assoc()) {
                $ip = $row2['ip_current'];
                echo '<div class="alert alert-success" role="alert">';
                $qr = "SELECT * FROM users WHERE ip_current='" . $ip . "'";
                if ($r = mysqli_query($conn, $qr)) {
                    $itens = mysqli_num_rows($r);
                    echo 'O usuário ' . $vlr1 . ' possui ';
                    echo $itens;
                    mysqli_free_result($r);
                }
                echo ' contas fakes, sendo elas: <br>';
                $ipzada = $qr;
                $query3 = mysqli_query($conn, $ipzada) or die(mysqli_error($conn));
                while ($row5 = $query3->fetch_assoc()) {
                    echo $row5['username'] . '<br>';
                }
                echo '<br><a href="' . $_SERVER["REQUEST_URI"] . '">Tentar novamente</a>';
                echo '</div>';
            }
        }
    }
    static function publicar_noticia($conn)
    {
        if (isset($_POST['fnvlr'])) {
            $vlr1    = $_POST['news'];
            $vlr2    = fs($_POST['vlr2']);
            $vlr3    = fs($_POST['vlr3']);
            $vlr4    = $_POST['vlr4'];
            $vlr5    = fs($_POST['vlr5']);
            $fnsalsa = "INSERT INTO `cms_news` (`title`, `image`, `shortstory`, `longstory`, `author`, `date`, `type`, `roomid`, `look`, `noticia_ativa`) VALUES ('" . $vlr2 . "', '" . $vlr4 . "', '" . $vlr3 . "', '" . $vlr1 . "', '" . usuario . "', '" . strtotime("Now") . "', '1', '1', '" . roupanova . "', '" . $vlr5 . "');";
            $conn->query($fnsalsa);
            echo '<div class="alert alert-success" role="alert">';
            echo 'A notícia foi publicada com sucesso.';
            echo '</div>';
        }
    }
    static function dar_emblema($conn)
    {
        if (isset($_POST['fnvlr'])) {
            $vlr1 = fs($_POST['vlr1']);
            $vlr2 = fs($_POST['vlr2']);
            $q    = "SELECT * FROM users WHERE username='" . $vlr1 . "'";
            $query3 = mysqli_query($conn, $q) or die(mysqli_error($conn));
            while ($row5 = $query3->fetch_assoc()) {
                $fnsalsa = "INSERT INTO `users_badges` (`user_id`, `slot_id`, `badge_code`) VALUES ('" . $row5['id'] . "', '0', '" . $vlr2 . "');";
                $conn->query($fnsalsa);
            }
            echo '<div class="alert alert-success" role="alert">';
            echo 'O usuário recebeu o emblema com sucesso.';
            echo '<img src="' . urlemblemas . '/' . $vlr2 . '.gif">';
            echo '</div>';
        }
    }
    static function dar_pontospromocao($conn)
    {
        if (isset($_POST['fnvlr'])) {
            $vlr1 = fs($_POST['vlr1']);
            $q    = "SELECT * FROM users WHERE username='" . $vlr1 . "'";
            $query3 = mysqli_query($conn, $q) or die(mysqli_error($conn));
            while ($row5 = $query3->fetch_assoc()) {
                $fnsalsa = "UPDATE users SET pontos_promocao = pontos_promocao+1 WHERE username = '" . $vlr1 . "'";
                $conn->query($fnsalsa);
            }
            echo '<div class="alert alert-success" role="alert">';
            echo 'O usuário recebeu um ponto de promoção com sucesso.';
            echo '</div>';
        }
    }
    static function premiar_usuario($conn)
    {
        if (isset($_POST['fnvlr'])) {
            $vlr1    = fs($_POST['vlr1']);
            $q       = "SELECT * FROM users WHERE username='" . $vlr1 . "'";
            $vlsalsa = 0;
            $query3 = mysqli_query($conn, $q) or die(mysqli_error($conn));
            while ($row5 = $query3->fetch_assoc()) {
                $ban = "SELECT * FROM users_badges WHERE user_id='" . $row5['id'] . "' and badge_code='" . premiar_codigo_emblema . "1'";
                $lg = mysqli_query($conn, $ban) or die(mysqli_error($conn));
                if ($ra = mysqli_query($conn, $ban)) {
                    $existe = mysqli_num_rows($ra);
                    if ($existe == $vlsalsa) {
                        $fnsalsa2 = "INSERT INTO `users_badges` (`user_id`, `slot_id`, `badge_code`) VALUES ('" . $row5['id'] . "', '0', '" . premiar_codigo_emblema . "1');";
                        $conn->query($fnsalsa2);
                        $fnsalsa = "UPDATE users SET pontos_evento = pontos_evento+1 WHERE username = '" . $vlr1 . "'";
                        $conn->query($fnsalsa);
                        $fnsalsa4 = "UPDATE users SET credits = credits+" . premiar_creditos . " WHERE username = '" . $vlr1 . "'";
                        $conn->query($fnsalsa4);
                        $fnsalsa5 = "UPDATE  users_settings SET amout = amount+" . premiar_diamantes . " WHERE user_id = '" . $row5['id'] . "' and type='5'";
                        $conn->query($fnsalsa5);
                        echo '<div class="alert alert-success" role="alert">';
                        echo 'O usuário recebeu o emblema de nível <b>' . $resultado . '</b>, recebeu ' . premiar_diamantes . ' diamantes, ' . premiar_creditos . ' créditos e um ponto de evento no Hall da Fama';
                        echo '</div>';
                    } else {
                        $premiar      = $row5['pontos_evento'];
                        $premiarsalsa = 1;
                        $resultado    = $premiar + $premiarsalsa;
                        $fnsalsa3     = "INSERT INTO `users_badges` (`user_id`, `slot_id`, `badge_code`) VALUES ('" . $row5['id'] . "', '0', '" . premiar_codigo_emblema . "" . $resultado . "');";
                        $conn->query($fnsalsa3);
                        $fnsalsa4 = "UPDATE users SET credits = credits+" . premiar_creditos . " WHERE username = '" . $vlr1 . "'";
                        $conn->query($fnsalsa4);
                        $fnsalsa = "UPDATE users SET pontos_evento = pontos_evento+1 WHERE username = '" . $vlr1 . "'";
                        $conn->query($fnsalsa);
                        $fnsalsa5 = "UPDATE  users_settings SET amout = amount+" . premiar_diamantes . " WHERE user_id = '" . $row5['id'] . "' and type='5'";
                        $conn->query($fnsalsa5);
                        echo '<div class="alert alert-success" role="alert">';
                        echo 'O usuário recebeu o emblema de nível <b>NV' . $resultado . '</b>, recebeu ' . premiar_diamantes . ' diamantes, ' . premiar_creditos . ' créditos e um ponto de evento no Hall da Fama';
                        echo '</div>';
                    }
                }
            }
        }
    }
    static function dar_cargo($conn)
    {
        if (isset($_POST['fnvlr'])) {
            $vlr1    = fs($_POST['vlr1']);
            $vlr2    = fs($_POST['vlr2']);
            $fnsalsa = "UPDATE users SET rank ='" . $vlr2 . "' WHERE username = '" . $vlr1 . "'";
            $conn->query($fnsalsa);
            echo '<div class="alert alert-success" role="alert">';
            echo 'O usuário recebeu o cargo com sucesso.';
            echo '</div>';
        }
    }
    static function ativardstv_promocao($conn)
    {
        if (isset($_POST['fnvlr'])) {
            $vlr1    = fs($_POST['vlr1']);
            $vlr2    = fs($_POST['vlr2']);
            $fnsalsa = "UPDATE cms_news SET noticia_ativa ='" . $vlr2 . "' WHERE id = '" . $vlr1 . "'";
            $conn->query($fnsalsa);
            echo '<div class="alert alert-success" role="alert">';
            if ($vlr2 == 0) {
                echo 'A promoção não está mais ativa.';
            } elseif ($vlr2 == 1) {
                echo 'A promoção agora está ativa.';
            }
            echo '</div>';
        }
    }
    static function remover_emblema($conn)
    {
        if (isset($_POST['fnvlr'])) {
            $vlr1 = fs($_POST['vlr1']);
            $vlr2 = fs($_POST['vlr2']);
            $q    = "SELECT * FROM users WHERE username='" . $vlr1 . "'";
            $query3 = mysqli_query($conn, $q) or die(mysqli_error($conn));
            while ($row5 = $query3->fetch_assoc()) {
                $rmemblema = "DELETE FROM `users_badges` WHERE `users_badges`.`user_id` ='" . $row5['id'] . "' and badge_code='" . $vlr2 . "'";
                $conn->query($rmemblema);
            }
            echo '<div class="alert alert-success" role="alert">';
            echo 'O emblema foi removido do ' . $vlr1 . ' com sucesso.';
            echo '<img src="' . urlemblemas . '/' . $vlr2 . '.gif">';
            echo '</div>';
        }
    }
    static function editar_noticia($conn)
    {
        if (isset($_POST['fnvlr'])) {
            $vlr1    = $_POST['news'];
            $vlr2    = fs($_POST['vlr2']);
            $vlr3    = fs($_POST['vlr3']);
            $vlr4    = $_POST['vlr4'];
            $vlr6    = fs($_POST['id']);
            $fnsalsa = "UPDATE `cms_news` SET `title` = '" . $vlr2 . "', `image` = '" . $vlr4 . "', `shortstory` = '" . $vlr2 . "', `longstory` = '" . $vlr1 . "', `author` = '" . usuario . "' WHERE `cms_news`.`id` = '" . $vlr6 . "';";
            $conn->query($fnsalsa);
            echo '<div class="alert alert-success" role="alert">';
            echo 'A notícia foi editada com sucesso.';
            echo '</div>';
        }
    }
}
