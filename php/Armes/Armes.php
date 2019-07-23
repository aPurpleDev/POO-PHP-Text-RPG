<?php

include ('php/interfaces/iarmes.php');

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
