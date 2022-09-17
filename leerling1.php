<?php 
require_once('Leerling.php');

$leerling = new Leerling("teus", 18, "web3A");

$leerling->setLeeftijd(20);

echo $leerling->getLeeftijd();

?>