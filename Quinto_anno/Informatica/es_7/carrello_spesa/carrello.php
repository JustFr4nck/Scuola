<?php
session_start();

class Prodotti
{
    public $id;
    public $nome;
    public $prezzo;
    public function __construct($id, $nome, $prezzo) {
        $this->id = $id;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
    }
}


$prodotti = [
    1 => new Prodotti(1, "laptop", 800),
    2 => new Prodotti(2, "iphone", 900),
    3 => new Prodotti(3, "monitor", 700),
    4 => new Prodotti(4, "keyboard", 299),
    5 => new Prodotti(5, "mouse", 63),
    6 => new Prodotti(6, "tv", 1200),
    7 => new Prodotti(7, "eReader", 129),
    8 => new Prodotti(8, "alexa", 27),
    9 => new Prodotti(9, "smartwatch", 299),
];

if (empty($_SESSION["carrello"])) {
    echo "<p class='text-center mt-10 text-gray-600'>Il carrello è vuoto.</p>";
    exit;
}

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
        foreach ($carrello as $id) {
            if (isset($prodotti[$id])) {
                $p = $prodotti[$id];
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