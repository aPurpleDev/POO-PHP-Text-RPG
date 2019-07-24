<html>
<head>
	  <link rel="stylesheet" href="css/main.css">
	</head>
</html>


<?php
require ('vendor/autoload.php');

use App\Armes\Epee;
echo "Instanciation d'une épée" . '<br>';
	$excalibur = new Epee("Excalibur","Legendaire",100);
	var_dump($excalibur);
	echo '<br>';
	echo '<br>';

use App\Armes\Baton;
	echo "Instanciation d'un baton" . '<br>';
	$antonidas = new Baton("Antonidas","Epic",50);
	var_dump($antonidas);
	echo '<br>';
	echo '<br>';

use App\Armes\Arc;
	echo "Instanciation d'un arc" . '<br>';
	$longhorn = new Arc("Longhorn","Epic",75);
	var_dump($longhorn);
	echo '<br>';
	echo '<br>';

use App\Personnages\Guerrier;
	echo "Instanciation d'un Guerrier" . '<br>';
	$aragorn = new Guerrier("Aragorn",100);
	var_dump($aragorn);
	echo '<br>';
	echo '<br>';

use App\Personnages\Mage;
	echo "Instanciation d'un Mage" . '<br>';
	$gandalf = new Mage("Gandalf",75);
	var_dump($gandalf);
	echo '<br>';
	echo '<br>';

use App\Personnages\Paladin;
	echo "Instanciation d'un Paladin" . '<br>';
	$boromir = new Paladin("Boromir",150);
	var_dump($boromir);
	echo '<br>';
	echo '<br>';

use App\Personnages\Roublard;
	echo "Instanciation d'une Roublarde" . '<br>';
	$sylvanas = new Roublard("Sylvanas",90);
	var_dump($sylvanas);
	echo '<br>';
	echo '<br>';

/*
*De facto classe test des objets et méthodes
*/

/*
	echo "Quelques simulations de combat" . '<br>';
	$sylvanas->attaquer($boromir);
	$boromir->fuir($sylvanas);

	echo "Instanciation d'un Voleur" . '<br>';
	$nicolas = new Voleur("Nicolas",40);
	echo $nicolas->getNomPersonnage() . '<br>';
	echo $nicolas->getViePersonnage() . '<br>';
	echo "Listing de l'arme" . '<br>';
	var_dump($nicolas->armePersonnage);
	echo '<br>';

	echo "Instanciation d'un NPC du namespace Nonplayable" . '<br>';
	$nefarian = new Nonplayable\Boss();
	var_dump($nefarian);
	echo '<br>';

	echo "Instanciation d'un NPC du namespace finalBoss" . '<br>';
	$cthun = new finalBoss\Boss();
	var_dump($cthun);
	echo '<br>';*/
?>
