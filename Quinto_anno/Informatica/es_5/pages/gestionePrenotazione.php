<?php

$prezzo = 0;
$casualCameriere = "";

$camerieri = [
    "Francesco Perrotta",
    "Emma Vyshyvana",
    "Gioele Piemontese",
    "Francesco Secci",
    "Christian Maiolo"
];

function roller($camerieri)
{
    return $camerieri[array_rand($camerieri)];
}

$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$nTavolo = $_POST["nTavolo"];
$orario = $_POST["orario"];
$note = $_POST["note"] || "Nessuna nota";

$piatti = $_POST["piatto"];
$parcheggio = $_POST["parcheggio"];




function calcolaprezzo($piatti, $prezzo)
{
    foreach ($piatti as $piatto) {
        if ($piatto == "antipasto") {
            $prezzo += 5;
        } else if ($piatto == "primo") {
            $prezzo += 6;
        } else if ($piatto == "secondo") {
            $prezzo += 7;
        }
    }
    return $prezzo;
}

function sconto($prezzo, $piatti)
{

    if (in_array("primo", $piatti) && in_array("primo", $piatti)) {

        $prezzo -= ($prezzo / 100) * 10;
        return $prezzo;
    } else if (in_array("primo", $piatti) && in_array("primo", $piatti) && in_array("antipasto", $piatti)) {

        $prezzo -= ($prezzo / 100) * 15;
        return $prezzo;
    } else {
        return $prezzo;
    }
}

function prezzoPark($prezzo, $parcheggio)
{

    if ($parcheggio == "custodito") {

        $prezzo += 5;
        return $prezzo;
    } else if ($parcheggio == "nonCustodito") {

        $prezzo += 3;
        return $prezzo;
    } else {
        return $prezzo;
    }
}

$prezzo = calcolaprezzo($piatti, $prezzo);
$prezzo = sconto($prezzo, $piatti);
$prezzo = prezzoPark($prezzo, $parcheggio);
$casualCameriere = roller($camerieri);
$data = date("d/m/Y");
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <table class="min-w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-orange-400">
                <th class="border border-orange-600 px-4 py-2 text-left">Nome</th>
                <th class="border border-orange-600 px-4 py-2 text-left">Cognome</th>
                <th class="border border-orange-600 px-4 py-2 text-left">Tavolo</th>
                <th class="border border-orange-600 px-4 py-2 text-left">Orario</th>
                <th class="border border-orange-600 px-4 py-2 text-left">Prezzo</th>
                <th class="border border-orange-600 px-4 py-2 text-left">Cameriere</th>
                <th class="border border-orange-600 px-4 py-2 text-left">Data</th>
            </tr>
        </thead>
        <tbody>
            <?php
            echo "<tr class='odd:bg-white even:bg-gray-50'>
                <td class='border border-orange-400 px-4 py-2'>{$nome}</td>
                <td class='border border-orange-400 px-4 py-2'>{$cognome}</td>
                <td class='border border-orange-400 px-4 py-2'>{$nTavolo}</td>
                <td class='border border-orange-400 px-4 py-2'>{$orario}</td>
                <td class='border border-orange-400 px-4 py-2'>€{$prezzo}</td>
                <td class='border border-orange-400 px-4 py-2'>{$casualCameriere}</td>
                 <td class='border border-orange-400 px-4 py-2'>{$data}</td>
                </tr>";
            ?>
        </tbody>
    </table>
</body>

</html>
