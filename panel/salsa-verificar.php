<?php
if (rank >= rmin)
{
	echo "<script>window.location.href='/panel/salsa-bemvindo';</script>";
    $_SESSION['spanel'] = 1;
    $spainel = 1;
}
if (isset($spainel)) {
    if ($spainel == 1) {
        echo "<script>window.location.href='/panel/salsa-bemvindo';</script>";
        $_SESSION['spanel'] = 1;
        exit;
    }
} else {
    if ($cur !== 0) if (rank >= rmin) $spainel = 1;
    else $spainel = 0;
    if ($spainel !== 1) {
        echo "<script>window.location.href='/me';</script>";
        $_SESSION['spanel'] = 0;
        exit;
    } elseif ($spainel == 1) {
        echo "<script>window.location.href='/panel/salsa-bemvindo';</script>";
        $Spanel = 1;
        $_SESSION['spanel'] = 1;
        exit;
    }
}
if (rank >= rmin) {
    if (rank == 5) $_SESSION['prank'] = 5;
    if (rank == 7) $_SESSION['prank'] = 7;
    if (rank == 8) $_SESSION['prank'] = 8;
    if (rank == 9) $_SESSION['prank'] = 9;
    if (rank == 10) $_SESSION['prank'] = 10;
    if (rank > 10) $_SESSION['prank'] = 10;
} else {
    echo "<script>window.location.href='/me';</script>";
    $_SESSION['spanel'] = 0;
    exit;
}
?>