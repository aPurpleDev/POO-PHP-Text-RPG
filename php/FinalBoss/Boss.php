<?php
/*
*Classe de <NPCC> hors-namespacing pour tester
*/
namespace finalBoss;

	class Boss
	{
		public $finalBossName;

		public function __construct($finalBossName="CThun")
		{
			$this->$finalBossName = $finalBossName;
		}
	}

?>
