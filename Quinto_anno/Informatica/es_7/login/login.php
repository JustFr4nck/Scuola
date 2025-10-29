<?php
session_start();

$realUn = "admin";
$realPw = 1234;

if(isset($_POST["username"]) && isset($_POST["pw"]) && $_POST["username"] === $realUn && $_POST["realPw"] === $realPw){

    $_SESSION["user"] = $realUn;
    $_SESSION["pw"] = $realPw;
    
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center font-sans">

    <form action="front.php" method="post" class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-sm">
        <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Login</h1>

        <div class="mb-4">
            <label for="username" class="block text-gray-700 font-medium mb-2">Inserisci username:</label>
            <input type="text" id="username" name="username"
                class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div class="mb-6">
            <label for="pw" class="block text-gray-700 font-medium mb-2">Inserisci password:</label>
            <input type="password" id="pw" name="pw"
                class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <button
            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow transition-all">
            Conferma
        </button>
    </form>

</body>

</html>