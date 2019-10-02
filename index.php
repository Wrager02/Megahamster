<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Megahamster</title>
</head>
<body>
<?php

require 'classes/Room.php';
require 'classes/RectangularRoom.php';
require("classes/OctagonalRoom.php");

$rooms = [
        new RectangularRoom("The room", 49, 40, 50),
        new RectangularRoom("The flat", 149, 40, 50),
        new OctagonalRoom("The pit", 69, 40)
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
    </tr>
EOT;

foreach ($rooms as $room) {
    echo $room->toHTML();
}

echo "</table>";
?>
</body>
</html>