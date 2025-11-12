<?php 
session_start();

if(isset($_POST["piatti"]) && isset($_POST["quantita"]) && isset($_POST["tables"])){

    $_SESSION["plates"] = $_POST["piatti"];
    $_SESSION["qta"] = $_POST["quantita"];
    $_SESSION["tavoli"] = $_POST["tables"];
    
}
else{
    header("location:management.php");
}

?>




<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ordine completato</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-10 rounded-2xl shadow-lg text-center max-w-md">
      <h1 class="text-2xl font-semibold text-green-600 mb-4">
        ✅ Ordine effettuato con successo!
      </h1>
      <p class="text-gray-700 mb-6">
        Il tuo ordine è stato inviato correttamente al cameriere.
      </p>
      <a
        href="cameriere.php"
        class="inline-block bg-indigo-600 text-white px-6 py-2 rounded-xl shadow hover:bg-indigo-700 transition duration-200"
      >
        Torna alla gestione ordini
      </a>
    </div>
  </body>
</html>