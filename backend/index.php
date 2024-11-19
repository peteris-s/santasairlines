<?php

require "Aircraft.php";
require "Airport.php";
/*
echo "Serveris strada";



function addFour($x)    {
    $rezultats = $x + 4;
    echo "<br> $rezultats";

}

addFour(5);
addFour(8);
*/
$manalidmasina = new Aircraft("Airbus", "A220-300", 120, 820);
var_dump($manalidmasina);

echo "<br>";

$manalidmasina = new Airport("RIX", 56.924, 23.971);
var_dump($manalidmasina);