<?php

require ('vendor/autoload.php');
include ('template.html');
use App\Armes\Epee;
use App\Armes\Baton;
use App\Armes\Arc;
use App\Personnages\Guerrier;
use App\Personnages\Mage;
use App\Personnages\Paladin;
use App\Personnages\Roublard;
use App\NPC\Boss;
use App\FinalBoss;

	echo "Instanciation d'une épée" . '<br>';
	$excalibur = new Epee("Excalibur","Legendaire",100);
	var_dump($excalibur);
	echo '<br>';
	echo '<br>';

	echo "Instanciation d'un baton" . '<br>';
	$antonidas = new Baton("Antonidas","Epic",50);
	var_dump($antonidas);
	echo '<br>';
	echo '<br>';

	echo "Instanciation d'un arc" . '<br>';
	$longhorn = new Arc("Longhorn","Epic",75);
	var_dump($longhorn);
	echo '<br>';
	echo '<br>';

	echo "Instanciation d'un Guerrier" . '<br>';
	$aragorn = new Guerrier("Aragorn",100);
	var_dump($aragorn);
	echo '<br>';
	echo '<br>';

	echo "Instanciation d'un Mage" . '<br>';
	$gandalf = new Mage("Gandalf",75);
	var_dump($gandalf);
	echo '<br>';
	echo '<br>';

	echo "Instanciation d'un Paladin" . '<br>';
	$boromir = new Paladin("Boromir",150);
	var_dump($boromir);
	echo '<br>';
	echo '<br>';

	echo "Instanciation d'une Roublarde" . '<br>';
	$sylvanas = new Roublard("Sylvanas",90);
	var_dump($sylvanas);
	echo '<br>';
	echo '<br>';

	echo "Quelques simulations de combat" . '<br>';
	$sylvanas->attaquer($boromir);
	$boromir->sedeplacer();
	echo '<br>';

	echo "Instanciation d'un NPC du namespace NPC" . '<br>';
	$nefarian = new Boss();
	var_dump($nefarian);
	echo '<br>';
	echo '<br>';

	echo "Instanciation d'un NPC du namespace finalBoss" . '<br>';
	$cthun = new Boss();
	var_dump($cthun);
	echo '<br>';

?>
