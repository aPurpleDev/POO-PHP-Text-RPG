<?php
/*
*Classe concrète: Paladin
*/
	class Paladin extends Personnage implements iAttaque
		{
					public function __construct($nomPersonnage="Paladin", $viePersonnage="150")
					{
						$this->nomPersonnage = $nomPersonnage;
						$this->armePersonnage = new Epee();
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
						$this->armePersonnage = new Epee($nomArme, $rareteArme, $degatsArme);
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
