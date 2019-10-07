<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Megahamster</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
<?php

require 'classes/Room.php';
require 'classes/RectangularRoom.php';
require("classes/OctagonalRoom.php");

$rooms = [
        new RectangularRoom("The room", 49, 80, 50, []),
        new RectangularRoom("The flat", 149, 120, 80, ['Food jars']),
        new OctagonalRoom("The pit", 69, 20, ['Hamster training gloves', 'Hamster punching sack'])
];

echo <<<EOT
<h1>Megahamster</h1>
<table>
    <tr>
        <th>Produkt</th>
        <th>Preis</th>
        <th>Länge</th>
        <th>Breite</th>
        <th>Seite</th>
        <th>Fläche</th>
        <th>Zusatzausstattung</th>
    </tr>
EOT;

foreach ($rooms as $room) {
    echo $room->toHTML();
}

echo "</table>";
?>
</body>
</html>