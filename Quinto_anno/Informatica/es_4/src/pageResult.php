<?php 
session_start();
$price = 0;
$result = 0;

$nome = $_POST["nome"];
$eta = $_POST["eta"];
$frequenza = $_POST["frequenza"];

if ($eta >= 18 && $eta <=64){
    $price = 45;
    $_SESSION["inc"] ++;
} else {
    $price = 35;
    $_SESSION["inc"] ++;
}

switch ($frequenza){
    case "mensile":
        break;
    case "bimestrale":
        $price -= $price /100 * 10;
        break;
    case "trimestrale":
        $price -= $price /100 * 15;
        break; 
    case "annuale":
        $price -= $price /100 * 20;
        break;
}

$_SESSION["Guadagno"] += $price;
if (!isset($_SESSION["righe"])) {
    $_SESSION["righe"] = [];
}
$_SESSION["righe"][] = [
    "nome" => $nome,
    "eta" => $eta,
    "frequenza" => $frequenza,
    "price" => $price
];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <table class="border">
       <tr>
        <td>Dati inseriti nel form</td>
        <td></td>
        <td></td>
        <td class="border">Output prodotto dal server</td>
       </tr>
       <tr class="border">
        <td class="border">Nome</td>
        <td class="border">Età</td>
        <td class="border">Pagamento</td>
        <td class="border">Output</td>
       </tr>

       <?php 
       foreach ($_SESSION["righe"] as $riga) {
           echo "<tr>";
           echo "<td class='border'>{$riga['nome']}</td>";
           echo "<td class='border'>{$riga['eta']}</td>";
           echo "<td class='border'>{$riga['frequenza']}</td>";
           echo "<td class='border'>Il prezzo per un anno è: {$riga['price']} €</td>";
           echo "</tr>";
       }
       ?>
    </table>

   <form action="../index.php" method="post">
      <input type="hidden" name="price" value="<?php echo $price; ?>">
      <button class="border">Salva e torna indietro</button>
   </form>
</body>
</html>


