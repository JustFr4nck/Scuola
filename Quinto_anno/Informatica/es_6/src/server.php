<?php 
    

    $nome = $_GET["name"];
    $email = $_GET["email"];
    $message = $_GET["message"];

    function sanitize_input($nome) {
        $nome = preg_replace("/[a-zA-Z\s]+$/","", $nome);
        return $nome;
    }

    $nome = sanitize_input($nome);
    if(preg_match("/[a-zA-Z\s]/", $nome)){

        echo "ERRORE: NOME NON VALIDO";
    }

    if(!filter_var(trim($email), FILTER_SANITIZE_EMAIL)){

        echo "ERRORE: EMAIL INVALIDA";
    };
    if(strlen($message) > 300){

        echo "ERRORE: MESSAGGIO TROPPO LUNGO";
    }
?>