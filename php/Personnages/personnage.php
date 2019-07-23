<?php

include ('php/interfaces/ipersonnages.php');

abstract class Personnage implements iPersonnages
	{
		public $nomPersonnage;
		public $armePersonnage;

		protected $viePersonnage;
	}

	?>
