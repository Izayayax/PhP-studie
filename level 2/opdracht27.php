<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht26</title>
</head>
<body>
<?php 
    $producten = [
        ['product' => 'muis', 'prijs' => 200 ],
        ['product' => 'toetsenbord', 'prijs' => 150],
        ['product' => 'IEM', 'prijs' => 500],
        ['product' => 'computer', 'prijs' => 2000]
    ];
    
$gefilterd = array_filter($producten, function($item) {
    return $item['prijs'] <= 300;
});

foreach($gefilterd as $product) {
    echo "<p>" . $product['product'] . " - $" . $product['prijs'] . "</p>";
}

?>