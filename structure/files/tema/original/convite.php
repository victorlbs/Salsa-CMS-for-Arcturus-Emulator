<?php
if ($cur != null || $sessao != null || usuario != null)
{
      echo "<script>window.location.href='/me?=já_está_registrado';</script>";
      exit;
 }
$vlsalsa = 1;
$qra = "SELECT * FROM users WHERE username='" . $noticiafinal . "' ORDER BY id DESC LIMIT 1";
if ($ra = mysqli_query($conn, $qra)) {
    $existe = mysqli_num_rows($ra);
    if ($existe == $vlsalsa) {
        $ST = $qra;
        $QR = mysqli_query($conn, $ST) or die(mysqli_error($conn));
        while ($FUNCTION = $QR->fetch_assoc()) {
            if ($FUNCTION['ip_current'] == $_SERVER['REMOTE_ADDR']) {
                $remove = "UPDATE users SET referidos = referidos-1 WHERE username = '" . $FUNCTION['username'] . "'";
                $conn->query($remove);
                echo "<script>window.location.href='/registro?=erro';</script>";
            } elseif ($FUNCTION['ip_current'] != $_SERVER['REMOTE_ADDR']) {
                $remove = "UPDATE users SET referidos = referidos+1 WHERE username = '" . $FUNCTION['username'] . "'";
                $conn->query($remove);
                echo "<script>window.location.href='/registro?=sucesso';</script>";
            }
        }
    }
} else {
    echo "<script>window.location.href='/registro?=nao-encontrado';</script>";
}