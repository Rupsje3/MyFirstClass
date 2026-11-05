<?php
include "stoel.php";

$rodeStoel = new Stoel("rood", 60);

echo $rodeStoel->echoKleur() . "<br>";
echo "Zithoogte rode stoel: " . $rodeStoel->echoZithoogte() . "<br>";

$rodeStoel->verstelZithoogte(70);

echo "Zithoogte na verstelling: " . $rodeStoel->echoZithoogte() . "<br>";
?>