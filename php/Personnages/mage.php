<?php

class Mage extends Personnage
	{

				public function __construct($nomPersonnage="Mage", $viePersonnage="75")
				{
					$this->nomPersonnage = $nomPersonnage;
					$this->armePersonnage = new Baton();

					$this->viePersonnage = $viePersonnage;
				}

				public function getNomPersonnage()
				{
					return $this->nomPersonnage;
				}

				public function getArmePersonnage()
				{
					return $this->armePersonnage;
				}

				public function getViePersonnage()
				{
					return $this->viePersonnage;
				}

				public function setNomPersonnage($nomPersonnage)
				{
					$this->nomPersonnage = $nomPersonnage;
				}

				public function setArmePersonnage($nomArme, $rareteArme, $degatsArme)
				{
					$this->armePersonnage = new Baton($nomArme, $rareteArme, $degatsArme);
				}

				public function attaquer(Personnage $personnageVersus)
				{
					$personnageVersus->viePersonnage -= $this->armePersonnage->degatsArme;
				}

				public function fuir()
				{
					echo $this->nomPersonnage . " fuis le combat. Le lâche!" . '<br>' ;
				}

				public function bouleDeFeu(Personnage $personnageVersus)
				{
						$personnageVersus->viePersonnage -= ($this->armePersonnage->getDegatsArme() + 10);
						echo $this->nomPersonnage . " envoie une boule de feu magique avec +10 dégats à " . $personnageVersus->nomPersonnage . " ." . '<br>' ;
				}
	}
	?>
