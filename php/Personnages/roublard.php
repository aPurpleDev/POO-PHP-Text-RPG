<?php

/*
*Classe concrète: Roublard
*/
class Roublard extends Personnage
	{
				public function __construct($nomPersonnage="Roublard", $viePersonnage="90")
				{
					$this->nomPersonnage = $nomPersonnage;
					$this->armePersonnage = new Arc();
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
					$this->armePersonnage = new Arc($nomArme, $rareteArme, $degatsArme);
				}

				public function attaquer(Personnage $personnageVersus)
				{
					$personnageVersus->viePersonnage -= $this->armePersonnage->getDegatsArme();
					echo $this->nomPersonnage . " attaque " . $personnageVersus->nomPersonnage . " et lui retire " . $this->armePersonnage->getDegatsArme() . " points de vie" . '<br>';
				}

				public function fuir()
				{
					echo $this->nomPersonnage . " fuis le combat. Le lâche!" . '<br>' ;
				}
	}
?>
