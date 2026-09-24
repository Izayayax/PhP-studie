<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht3</title>
</head>
<body>
    
<?php

$movies = [
    "movie1",
    "movie2",
    "movie3",
    "movie4",
    "movie5"
];

?>
<ul>
<?php foreach ($movies as $movie) {
    echo "<li>$movie</li>";
} ?>
</ul>
</body>
</html>