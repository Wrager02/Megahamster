<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Megahamster</title>
</head>
<body>
<?php
require ("Classes/room.php");
$rooms[] = new Room("The room", 49);
$rooms[] = new Room("The flat", 149);
$rooms[] = new Room("The pit", 69);

echo <<<EOT
<h1>Megahamster</h1>
<table>
    <tr>
        <th>Produkt</th>
        <th>Preis</th>
    </tr>
EOT;

foreach ($rooms as $room) {
echo <<<EOT
<tr>
    <td>{$room->getName()}</td>
    <td>{$room->getPrice()}</td>
</tr>
EOT;
}

echo "</table>";
?>
</body>
</html>