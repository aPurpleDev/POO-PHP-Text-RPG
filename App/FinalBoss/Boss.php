<?php
/*
*Classe de <NPCC> hors-namespacing pour tester
*/
namespace App\FinalBoss;

	class Boss
	{
		public $finalBossName;

		public function __construct($finalBossName="CThun")
		{
			$this->$finalBossName = $finalBossName;
		}
	}

?>
