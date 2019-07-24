<?php
namespace App\Armes;
/*
*Composant des personnages:Guerrier, Paladin et Voleur
*/
class Epee extends Armes
	{
				public function __construct($nomArme="Epee", $rareteArme="Rare",$degatsArme="10")
				{
					$this->nomArme = $nomArme;
					$this->rareteArme = $rareteArme;
					$this->degatsArme = $degatsArme;
				}

				public function getNomArme()
				{
					return $this->nomArme;
				}

				public function getRareteArme()
				{
					return $this->rareteArme;
				}

				public function getDegatsArme()
				{
					return $this->degatsArme;
				}

				public function setNomArme($nomArme)
				{
					$this->nomArme = $nomArme;
				}

				public function setRareteArme($rareteArme)
				{
					$this->rareteArme = $rareteArme;
				}

				public function setDegatsArme($degatsArme)
				{
					$this->degatsArme = $degatsArme;
				}
	}

?>
