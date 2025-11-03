<?php
session_start();


if (empty($_SESSION["carrello"])) {
    echo "<p class='text-center mt-10 text-gray-600'>Il carrello è vuoto.</p>";
    exit;
}

$prodotti = $_SESSION["prodotti"];
$carrello = $_SESSION["carrello"];
$totale = 0;
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Carrello</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="max-w-3xl mx-auto p-6 bg-white rounded-2xl shadow mt-10">
        <h1 class="text-3xl font-bold mb-6 text-center">Il tuo carrello</h1>

        <?php
        foreach ($prodotti as $p) {
            if (in_array($p->id, $carrello)) {
                echo "
                <div class='border-b py-4 flex justify-between items-center'>
                    <div>
                        <h3 class='text-xl font-semibold'>{$p->nome}</h3>
                        <p class='text-gray-600'>€" . number_format($p->prezzo, 2, ',', '.') . "</p>
                    </div>
                </div>";
                $totale += $p->prezzo;
            }
        }
        ?>

        <div class="text-right mt-6 font-bold text-xl">
            Totale: €<?= number_format($totale, 2, ',', '.') ?>
        </div>

        <div class="text-center mt-6">
            <a href="svuota.php" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-lg transition">Svuota carrello</a>
            <a href="prodotti.php" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg transition ml-2">Continua lo shopping</a>
        </div>
    </div>
</body>
</html>
<?php
session_start();
session_destroy();
header("Location: prodotti.php");
exit;