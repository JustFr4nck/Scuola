

<?php
session_start();
$_SESSION["logged"] = false;
$_SESSION["cameriere"] = "";

$errore = "";
$cameriere1 = "Antonio";
$pw1 = "forzaNapoli1234";

$cameriere2 = "Paolo";
$pw2 = "dioPerdonaGianniNo";

$cameriere3 = "Ilaria";
$pw3 = "ehiehiehiCalamai";

if(isset($_POST["username"]) && isset($_POST["password"]))
    if(($_POST["username"] == $cameriere1 && $_POST["password"] == $pw1) || ($_POST["username"] == $cameriere2 && $_POST["password"] == $pw2) || ($_POST["username"] == $cameriere3 && $_POST["password"] == $pw3)){
        $errore = "";
        $_SESSION["logged"] = true;
        $_SESSION["cameriere"] = $_POST["username"];
        header("location:management.php");
        
    }
    else{
        $errore =  "Credenziali errate";
        $_SESSION["logged"] = false;
    }


?>

<?php 
$errore = "";
$cameriere1 = "antonio";
$pw1 = "forzaNapoli1234";

$cameriere2 = "paolo";
$pw2 = "dioPerdonaGianniNo";

$cameriere3 = "ilaria";
$pw3 = "ehiehiehiCalamai";

if(isset($_POST["username"]) && isset($_POST["password"]))
    if(($_POST["username"] == $cameriere1 && $_POST["password"] == $pw1) || ($_POST["username"] == $cameriere2 && $_POST["password"] == $pw2) || ($_POST["username"] == $cameriere3 && $_POST["password"] == $pw3)){
        header("location:management.php");
    }
    else{
        $errore =  "Credenziali errate";
    }
?>

<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <form method="POST" 
      class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm space-y-6">

      <h2 class="text-2xl font-semibold text-center text-gray-800">Accedi</h2>

      <div>
        <label for="username" class="block text-sm font-medium text-gray-700">Email o Username</label>
        <input type="text" id="username" name="username" required
          class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2" />
      </div>

      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" id="password" name="password" required
          class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2" />
      </div>

      <button type="submit"
        class="w-full bg-indigo-600 text-white py-2 rounded-xl hover:bg-indigo-700 transition duration-200">
        Login
      </button>

      <?php if (!empty($errore)): ?>
        <p class="text-center text-red-600 bg-red-100 border border-red-300 rounded-lg p-2 mt-2">
          <?php echo $errore; ?>
        </p>
      <?php endif; ?>

    </form>

  </body>
</html>