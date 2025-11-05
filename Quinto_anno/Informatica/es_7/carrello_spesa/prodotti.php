<?php

/*
Carrello spesaCrea un piccolo e-commerce simulato con i file:prodotti.php
Mostra una lista di prodotti (id, nome, prezzo).
Ogni prodotto ha un pulsante “Aggiungi al carrello” che invia l’ID del prodotto a carrello.php.
carrello.php
Avvia la sessione.
Se riceve un ID prodotto, lo aggiunge all’array $_SESSION["carrello"].
Visualizza l’elenco dei prodotti nel carrello con quantità e totale.
Mostra anche un link “Svuota carrello” che distrugge la sessione.
checkout.php (facoltativo, livello avanzato)
Mostra un riepilogo e conferma l’ordine.
Dopo la conferma, svuota la sessione e ringrazia l’utente.
Estensione possibile:
Permetti di aggiornare le quantità.
Usa una tabella MySQL per i prodotti (integrazione con DB).
Memorizza il carrello in cookie se la sessione scade.
*/
session_start();

class Prodotti
{

    public $id;
    public $nome;
    public $prezzo;

    public function __construct($id, $nome, $prezzo)
    {

        $this->id = $id;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
    }
}

$prodotto1 = new Prodotti(1, "laptop", 800);
$prodotto2 = new Prodotti(2, "iphone", 900);
$prodotto3 = new Prodotti(3, "monitor", 700);
$prodotto4 = new Prodotti(4, "keyboard", 299);
$prodotto5 = new Prodotti(5, "mouse", 63);
$prodotto6 = new Prodotti(6, "tv", 1200);
$prodotto7 = new Prodotti(7, "eReader", 129);
$prodotto8 = new Prodotti(8, "alexa", 27);
$prodotto9 = new Prodotti(9, "smartwatch", 299);

$_SESSION["prodotti"] = [

    $prodotto1,
    $prodotto2,
    $prodotto3,
    $prodotto4,
    $prodotto5,
    $prodotto6,
    $prodotto7,
    $prodotto8,
    $prodotto9,
];

$inc = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">

    <div class="text-center my-8">
        <h1 class="text-3xl font-bold">I nostri prodotti</h1>
    </div>
    <div>Carrello: <?php
        if(isset($_SESSION["carrello"])){
            foreach ($_SESSION["carrello"] as $value) {
            $inc++;
        }
        }
        echo  $inc;
        
    ?></div>
    <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 p-6">
        <?php
        foreach ($_SESSION["prodotti"] as $product) {
            echo "<form action='redirect.php' method='get' class='bg-white rounded-2xl shadow p-6 flex flex-col items-center hover:shadow-lg transition-shadow'>
                    <h3 class='text-xl font-semibold mb-2'>{$product->nome}</h3>
                    <h5 class='text-gray-600 text-lg mb-4'>€" . number_format($product->prezzo, 2, ',', '.') . "</h5>
                    <button type='submit' class='bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg transition-colors'>
                        Add to cart
                    </button>
                    <input type='hidden' name='id' value='{$product->id}'>
                </form>";
        }
        ?>
    </div>

</body>

</html>