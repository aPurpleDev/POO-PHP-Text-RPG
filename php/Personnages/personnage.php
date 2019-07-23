<?php

include ('php/interfaces/iactions.php');
include ('php/interfaces/iattaque.php');
include ('php/interfaces/isorts.php');

/*
*Abstraction des personnages
*/
abstract class Personnage implements iActions
	{
		public $nomPersonnage;
		public $armePersonnage;
		protected $viePersonnage;
	}

?>
