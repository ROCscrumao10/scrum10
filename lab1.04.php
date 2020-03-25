<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>lab1.02</title>
</head>
<h3>php lab 1.4</h3>
<?php
$naam = "Karim";
$nederlands = "8.5";
$engels = "7.7";
$rekenen = "6.7";
$programmeren = "8.5";
$databases = "9.4";
$naam1 = "Sophie";
$nederlands1 = "8.9";
$engels1 = "9.7";
$rekenen1 = "9.7";
$programmeren1 = "9.5";
$databases1 = "9.2";
$gemiddeld = round(($programmeren + $databases + $rekenen + $engels + $nederlands) / 5,1);
$gemiddeld1 = round(($programmeren1 + $databases1 + $rekenen1 + $engels1 + $nederlands1) / 5,1);
$gemiddeldvanbeide = round(($gemiddeld + $gemiddeld1) / 2, 1);
echo"<table border ='1'>
    <caption>
        <strong>Rapport</strong>
    </caption>
    <thead>
        <tr>
            <th>Naam</th><th>Nederlands</th><th>Engels</th>
            <th>Rekenen</th><th>Programmeren</th>
            <th>Databases</th>
            <th>Gemiddeld</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>$naam</td><td>$nederlands</td><td>$engels</td>
            <td>$rekenen</td><td>$programmeren</td>
            <td>$databases</td><td>$gemiddeld</td>
        </tr>
        <tr>
            <td>$naam1</td><td>$nederlands1</td><td>$engels1</td>
            <td>$rekenen1</td><td>$programmeren</td>
            <td>$databases1</td><td>$gemiddeld1</td>
        </tr>
    </tbody
    <tfoot>
        <tr>
            <td colspan='6'>Groep gemiddeld</td><td>$gemiddeldvanbeide</td>
        </tr>
    </tfoot>
    </table>";
?>
<body>
</body>
</html>
