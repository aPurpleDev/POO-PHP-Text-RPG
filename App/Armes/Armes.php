<?php
namespace App\Armes;
use App\Interfaces\iArmes;

//include ('php/interfaces/iarmes.php');

/*
*Abstraction de l'attribut arme des personnages
*/

abstract class Armes implements iArmes
	{
		public $nomArme;
    public $rareteArme;
    protected $degatsArme;
	}

?>
