<?php

$albums = [
    "Music to Be Murdered By" => 18.99,
    "Marshall Mathers (LP)" => 10.92,
    "The Eminem Show" => 8.99,
    "The Slim Shady" => 8.99
];

echo("Het Album overzicht:".PHP_EOL);
foreach($albums as $albumname => $albumprice){
    echo($albumname . " kost: €".$albumprice.PHP_EOL);
    $albumtotalprice += $albumprice;
}
$amntofalbums = count($albums);
$albumsavrg = round($albumtotalprice / $amntofalbums, 2);
echo("Het totaalbedrag van alle albums is €".$albumtotalprice.PHP_EOL);
echo("De gemiddelde prijs van alle albums is €".$albumsavrg);