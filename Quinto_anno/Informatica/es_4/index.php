<?php
session_start();
if (!isset($_SESSION["inc"])) {
    $_SESSION["inc"] = 0;
}
if (!isset($_SESSION["Guadagno"])) {
    $_SESSION["Guadagno"] = 0;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex flex-col items-center">
        <form class="flex flex-col items-center" action="src/pageResult.php" method="post">

            <label for="nome">Inserire nome: </label>
            <input class="border" required type="text" name="nome" id="">
            <br>
            <label for="eta">Inserire età: </label>
            <input class="border" required type="number" name="eta" id="" min="14" max="90">
            <br>
            <label>Inserire frequenza: </label>
            <div>
                <div>
                    <input required type="radio" name="frequenza" id="mensile" value="mensile">
                    <label class="text-blue-300 font-bold" for="mensile">mensile</label>
                </div>
                <div>
                    <input required type="radio" name="frequenza" id="bimestrale" value="bimestrale">
                    <label class="text-blue-300 font-bold" for="bimestrale">bimestrale</label>
                </div>
                <div>
                    <input required type="radio" name="frequenza" id="trimestrale" value="trimestrale">
                    <label class="text-blue-300 font-bold" for="trimestrale">trimestrale</label>
                </div>
                <div>
                    <input required type="radio" name="frequenza" id="annuale" value="annuale">
                    <label class="text-blue-300 font-bold" for="annuale">annuale</label>
                </div>
            </div>
            <button class="border">Inserisci</button>
        </form>

        <h2>Guadagni totali: <?php echo $_SESSION["Guadagno"] ?></h2>
        <h2>Persone inserite: <?php echo $_SESSION["inc"] ?></h2>
    </div>

</body>

</html>