<html>
<head>
	  <link rel="stylesheet" href="css/main.css">
	</head>
</html>


<?php
/*
*De facto classe test des objets et méthodes
*/
	require ('vendor/autoload.php');

	echo "Instanciation d'une épée" . '<br>';
	$excalibur = new Epee("Excalibur","Legendaire",100);
	echo $excalibur->getNomArme() . '<br>';
	echo $excalibur->getRareteArme() . '<br>';
	echo $excalibur->getDegatsArme() . '<br>';

	echo "Instanciation d'un baton" . '<br>';
	$antonidas = new Baton("Antonidas","Epic",50);
	echo $antonidas->getNomArme() . '<br>';
	echo $antonidas->getRareteArme() . '<br>';
	echo $antonidas->getDegatsArme() . '<br>';

	echo "Instanciation d'un arc" . '<br>';
	$longhorn = new Arc("Longhorn","Epic",75);
	echo $antonidas->getNomArme() . '<br>';
	echo $antonidas->getRareteArme() . '<br>';
	echo $antonidas->getDegatsArme() . '<br>';

	echo "Instanciation d'un Guerrier" . '<br>';
	$aragorn = new Guerrier("Aragorn",100);
	echo $aragorn->getNomPersonnage() . '<br>';
	echo $aragorn->getViePersonnage() . '<br>';
	echo "Listing de l'arme" . '<br>';
	var_dump($aragorn->armePersonnage);
	echo '<br>';

	echo "Instanciation d'un Mage" . '<br>';
	$gandalf = new Mage("Gandalf",75);
	echo $gandalf->getNomPersonnage() . '<br>';
	echo $gandalf->getViePersonnage() . '<br>';
	echo "Listing de l'arme" . '<br>';
	var_dump($gandalf->armePersonnage);
	echo '<br>';

	echo "Quelques simulations de combat" . '<br>';
	$gandalf->bouleDeFeu($aragorn);
	$gandalf->eclair($aragorn);
	$aragorn->attaquer($gandalf);
	$gandalf->fuir();

	echo "Instanciation d'un Paladin" . '<br>';
	$boromir = new Paladin("Boromir",150);
	echo $boromir->getNomPersonnage() . '<br>';
	echo $boromir->getViePersonnage() . '<br>';
	echo "Listing de l'arme" . '<br>';
	var_dump($boromir->armePersonnage);
	echo '<br>';

	echo "Instanciation d'une Roublarde" . '<br>';
	$sylvanas = new Roublard("Sylvanas",90);
	echo $sylvanas->getNomPersonnage() . '<br>';
	echo $sylvanas->getViePersonnage() . '<br>';
	echo "Listing de l'arme" . '<br>';
	var_dump($sylvanas->armePersonnage);
	echo '<br>';

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

	echo "Instanciation d'un NPC" . '<br>';
	$nefarian = new Nonplayable\Boss();
	echo $nefarian->getBossName() . '<br>';
	echo $nefarian->getBossHealth() . '<br>';
	echo '<br>';
?>
