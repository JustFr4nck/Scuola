<?php


function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$nome = sanitize_input($_POST["name"]);
$email = sanitize_input($_POST["email"]);
$message = sanitize_input($_POST["message"]);

$error = false;

if (!preg_match("/^[a-zA-ZÀ-ÿ ']+$/u", $nome)) {
    echo "ERRORE: NOME NON VALIDO<br>";
    $error = true;
}


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "ERRORE: EMAIL INVALIDA<br>";
    $error = true;
}

if (strlen($message) > 300) {
    echo "ERRORE: MESSAGGIO TROPPO LUNGO<br>";
    $error = true;
}

if (!$error) {
    echo "<strong>Dati ricevuti correttamente!</strong><br>";
    echo "Nome: $nome<br>";
    echo "Email: $email<br>";
    echo "Messaggio: $message<br>";
}

header("Location: thankyou.php");

?>