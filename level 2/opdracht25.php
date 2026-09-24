<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 5</title>
</head>
<body>

<?php

function greet($naam) {
    return "Hallo, $naam!";
}

$namen = ["Jorn", "Emma", "Luca"];

foreach ($namen as $naam) {
	echo "<p>" . greet($naam) . "</p>";
}

?>

</body>
</html>

