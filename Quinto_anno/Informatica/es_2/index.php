<?php
$arr = [];
$assArr = [
    "p1" => "",
    "p2" => "",
    "p3" => "",
    "p4" => "",
    "p5" => "",
    "p6" => "",
    "p7" => "",
    "p8" => "",
    "p9" => "",
    "p10" => "",
];

for ($i = 0; $i < 10; $i++) {

    $arr[$i] = random_int(1, 1000);
}

function printAll($arr)
{
    for ($i = 0; $i < 10; $i++) {

        echo $arr[$i], " ";

    }
    return;
}

function media($arr){

    $sum = 0;

    for ($i = 0; $i < 10; $i++) {

        $sum += $arr[$i];

    }

    echo $sum / count($arr);
    return;
}

function reversePrintAll($arr)
{
    $arrReversed = array_reverse($arr);
    for ($i = 0; $i < 10; $i++) {

        echo $arrReversed[$i], " ";

    }
    return;
}

function associativArr($arr, $assArr){

    $index = 0;

    foreach ($assArr as $x => $y){

        if($arr[$index] % 2 === 0){
        $assArr[$x] = $arr[$index];
        echo "___", $x, ": ", $assArr[$x];
        }
        $index++;
    }


}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrazyArray</title>
</head>

<body>
    <h4>Numeri presenti: <?php printAll($arr); ?></h4>
    <h4>Numero minimo: <?php echo min($arr) ?></h4>
    <h4>Numero massimo: <?php echo max($arr) ?></h4>
    <h4>Media valori: <?php media($arr)?></h4>
    <h4>Numeri presenti senso opposto: <?php reversePrintAll($arr) ?></h4>
    <h4>Numeri pari: <?php associativArr($arr, $assArr) ?></h4>
</body>

</html>