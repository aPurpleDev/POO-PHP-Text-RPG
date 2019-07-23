<html>
<head>
	  <link rel="stylesheet" href="css/main.css">
	</head>

</html>

<?php

require ('php/armes/armes.php');
require ('php/armes/epee.php');
require ('php/armes/baton.php');
require ('php/armes/arc.php');

require ('php/personnages/personnage.php');
require ('php/personnages/guerrier.php');
require ('php/personnages/mage.php');
require ('php/personnages/paladin.php');
require ('php/personnages/roublard.php');

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

$gandalf = new Mage("Gandalf",75);

echo $gandalf->getNomPersonnage() . '<br>';
echo $gandalf->getViePersonnage() . '<br>';
echo "Listing de l'arme" . '<br>';
var_dump($gandalf->armePersonnage);

echo '<br>';

$gandalf->bouleDeFeu($aragorn);
$aragorn->attaquer($gandalf);
$gandalf->fuir();

$boromir = new Paladin("Boromir",150);

echo $boromir->getNomPersonnage() . '<br>';
echo $boromir->getViePersonnage() . '<br>';
echo "Listing de l'arme" . '<br>';
var_dump($boromir->armePersonnage);
echo '<br>';

$sylvanas = new Roublard("Sylvanas",90);

echo $sylvanas->getNomPersonnage() . '<br>';
echo $sylvanas->getViePersonnage() . '<br>';
echo "Listing de l'arme" . '<br>';
var_dump($sylvanas->armePersonnage);

echo '<br>';

$sylvanas->attaquer($boromir);
$boromir->fuir($sylvanas);
?>
