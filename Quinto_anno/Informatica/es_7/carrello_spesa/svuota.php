<?php 
    session_start();

    $_SESSION["carrello"] = array();
    header("location:prodotti.php");

?>