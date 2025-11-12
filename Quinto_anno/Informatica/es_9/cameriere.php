<?php

session_start();

$piatti = $_SESSION["plates"];
$qta = $_SESSION["qta"];
$tavolo = $_SESSION["tavoli"];



if (isset($_SESSION["tavoloList"])) {
    for ($i=0; $i < count($_SESSION["tavoloList"]); $i++) { 
        if($_SESSION["tavoloList"][$i] == $tavolo){
            
        }
    }
    array_push($_SESSION["tavoloList"], $tavolo);
} else {
    $_SESSION["tavoloList"] = [];
    array_push($_SESSION["tavoloList"], $tavolo);
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I miei tavoli</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <h1>I miei tavoli</h1>

    <?php foreach ($_SESSION["tavoloList"] as $table) {



       echo "<article
        class='max-w-sm mx-auto bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-2xl shadow-md overflow-hidden'>
        <div class='p-5'>
            <header class='flex items-center justify-between mb-3'>
                <h2 class='text-lg font-semibold text-gray-900 dark:text-gray-100'>Tavolo .$table.</h2>
                <button
                    class='px-3 py-1.5 text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 active:scale-95 transition-transform rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-1'>
                    Modifica
                </button>
            </header>

            <ul class='space-y-2 text-gray-700 dark:text-gray-200 text-sm'>
                <li class='flex justify-between border-b border-gray-100 dark:border-gray-700 pb-1'>
                    <span>🍕 Margherita</span>
                    <span>x2</span>
                </li>
                <li class='flex justify-between border-b border-gray-100 dark:border-gray-700 pb-1'>
                    <span>🥤 Cola</span>
                    <span>x3</span>
                </li>
                <li class='flex justify-between border-b border-gray-100 dark:border-gray-700 pb-1'>
                    <span>🍝 Carbonara</span>
                    <span>x1</span>
                </li>
            </ul>

            <div class='mt-4 text-right text-sm font-medium text-gray-900 dark:text-gray-100'>
                Totale: €48,00
            </div>
        </div>
    </article>";
    } ?>

    

    <a href="management.php">torna</a>
</body>

</html>