<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Favourite subject</title>
</head>

<body>
    <div class="flex flex-col h-screen justify-center items-center bg-blue-300">
        <form class=" flex flex-col justify-center items-center bg-blue-500 p-7 rounded-lg" action="src/pages/repost.php" method="post">
            <div class="mb-3">
                <label for="nome" class="text-blue-300 font-bold">Inserisci nome:</label>
                <input required class="border rounded" type="text" name="nome" id="nome" placeholder="nome">
            </div>
            <div class="mb-3">
                <label for="cognome" class="text-blue-300 font-bold">Inserisci nome:</label>
                <input required class="border rounded" type="text" name="cognome" id="cognome" placeholder="cognome">
            </div>
            <div>
                <div>
                    <input required type="radio" name="materia" id="informatica" value="informatica">
                    <label class="text-blue-300 font-bold" for="informatica">Informatica</label>
                </div>
                <div>
                    <input required type="radio" name="materia" id="sistemi" value="sistemi e reti">
                    <label class="text-blue-300 font-bold" for="sistemi">Sistemi e reti</label>
                </div>
                <div>
                    <input required type="radio" name="materia" id="tpsit" value="tpsit">
                    <label class="text-blue-300 font-bold" for="tpsit">Tpsit</label>
                </div>
            </div>
            <button type="submit" class=" text-white bg-red-600 rounded px-5 py-2 hover:bg-red-400 action:bg mt-3">Invia</button>
        </form>
    </div>

</body>

</html>

<?php


?>