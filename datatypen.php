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

    printf("<br />Bedrag in euro's: %.2f", $euros)

    ?>
