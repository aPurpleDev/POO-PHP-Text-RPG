<?php
namespace App\Personnages;
use App\Interfaces\iActions;

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
