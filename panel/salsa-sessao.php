<?php
if ($_SESSION['spanel'] !== 1) {
    echo "<script>window.location.href='/me';</script>";
    exit;
}

