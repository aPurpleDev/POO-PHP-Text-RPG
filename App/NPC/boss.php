<?php

namespace App\NPC;
/*
*Classe de <NPCC> pour le namespacing</NPCC>
*/
	class Boss
	{
					public $bossName;
					public $bossHealth;

					public function __construct($bossName="Boss", $bossHealth="1000")
					{
						$this->$bossName = $bossName;
						$this->$bossHealth = $bossHealth;
					}

					public function getBossName()
					{
						return $this->bossName;
					}

					public function getBossHealth()
					{
						return $this->bossHealth;
					}

					public function setBossName($bossName)
					{
						$this->bossName = $bossName;
					}

					public function setBossHealth($bossHealth)
					{
						$this->bossHealth = $bossHealth;
					}
		}
?>
