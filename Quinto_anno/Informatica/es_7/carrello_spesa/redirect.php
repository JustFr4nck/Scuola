<?php
session_start();

if (!isset($_GET["id"])) {
    header("Location: prodotti.php");
    exit;
}

$id = (int) $_GET["id"];


if (!isset($_SESSION["carrello"]) || !is_array($_SESSION["carrello"])) {
    $_SESSION["carrello"] = [];
}

if (!in_array($id, $_SESSION["carrello"])) {
    $_SESSION["carrello"][] = $id;
}


header("Location: carrello.php");
exit;