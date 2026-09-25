<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$gegevens = [
    'naam' => 'Iza',
    'leeftijd' => 24,
    'woonplaats' => 'Nederland'
];
?>
<h1><?= "{$gegevens['naam']}"?></h1>
<p> Mijn leeftijd is <?="{$gegevens['leeftijd']}" ?></p>
<p> Ik kom uit <?= "{$gegevens['woonplaats']}" ?><p>
</body>
</html>
