<?php


$host = "localhost";
$gebruiker = "root";
$wachtwoord = "";
$dbnaam = "dbfestival";

$con = new PDO("mysql:host=$host;dbname=$dbnaam", $gebruiker, $wachtwoord);

?>