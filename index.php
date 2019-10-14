<?php
use Wrager02\Megahamster\Classes\RectangularRoom as RectangularRoom;
use Wrager02\Megahamster\Classes\OctagonalRoom as OctagonalRoom;

require "Classes/Room.php";
require "Classes/RectangularRoom.php";
require "Classes/OctagonalRoom.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Megahamster</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
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
    <?php
    $rooms = [
        new RectangularRoom("The room", 49, 80, 50, []),
        new RectangularRoom("The flat", 149, 120, 80, ['Food jars']),
        new OctagonalRoom("The pit", 69, 20, ['Hamster training gloves', 'Hamster punching sack'])
    ];

    foreach ($rooms as $room) {
        echo $room->toHTML();
    }
    ?>
</table>
</body>
</html>