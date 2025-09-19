<?php

$arr = [];
$printInTab = "";
$sum = 0;

for ($i = 0; $i <= 100; $i++) {

    if ($i % 3 === 0) {

        array_push($arr, $i);
        $sum += $i;

    }
}

foreach ($arr as $val) {

    $printInTab .= "<td class='border border-black w-10 text-center'>$val</td>";
}
?>



<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ValueTable</title>
    <link rel="stylesheet" href="./public/main.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div>
        <nav class="flex flex-col items-center justify-center border bg-gray-200 h-20">
            <h1 class="text-3xl font-bold text-red-600">VERIFICA MULTIPLI DI 3 FINO A 100</h1>
        </nav>
        <div class="flex flex-col items-center pt-40">
            <table class="bg-blue-200">
                <tr>
                    <?php echo $printInTab ?>
                </tr>
            </table>
            <div class="pt-10">
                <h3 class="font-bold">Numero valori: <?php echo count($arr) ?> </h3>
                <h3 class="font-bold">Media: <?php echo $sum / (count($arr)) ?> </h3>
            </div>

        </div>

    </div>


</body>



</html>