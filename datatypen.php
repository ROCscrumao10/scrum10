<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>datatypen</title>
</head>
<?php
    $naam = "Carl";
    $straat = "Kruislaan 111";
    $woonplaats = "Utrecht";
    $naw = $naam . " " . $straat . " " . $woonplaats;
    echo "Gegevens: $naw";
    echo <<<TEKST
    <br>Salarisspecificatie van $naam: 2000 euro
    <br>Maand: November
    <br>Jaar: 2020
TEKST;
    $dollars = 999.99;
    $koers = 1.2;
    $euros = $dollars * $koers;
    echo "<br>Bedrag in euro's is: $euros";

?>
<body>
</body>
</html>
