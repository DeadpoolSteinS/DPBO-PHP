<?php
include "FootballTeam.php";

$team1 = new FootballTeam();
$team1->setName("FC Barcelona");
$team1->setOrigin("Spain");
$team1->setYear("1899");
$team1->setPlayers(array("Ter Stegen", "Gerard Pique", "Sergio Busquets"));
$team1->addPlayer("Dani Alves");

$team2 = new FootballTeam("Liverpool FC", "United Kingdom", "1892", array("Alisson", "Virgil van Dijk", "Sadio Mane"));
$team2->addPlayer("Mohamed Salah");

$team1->showTeam();
echo "<br>";
$team2->showTeam();
?>