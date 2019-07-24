<?php
namespace App\Personnages;
Use App\Interfaces\iActions;
Use App\Interfaces\iAttaque;
Use \App\Armes\Epee;
/*
*Classe concrète Guerrier
*/
	class Guerrier implements iAttaque
	{
					public function __construct($nomPersonnage="Guerrier", $viePersonnage="100")
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
						/*
						$personnageVersus->viePersonnage -= $this->armePersonnage->getDegatsArme();
						echo $this->nomPersonnage . " attaque " . $personnageVersus->nomPersonnage . " et lui retire " . $this->armePersonnage->getDegatsArme() . " points de vie" . '<br>';
						*/
						echo "test";
					}

					public function fuir()
					{
						echo $this->nomPersonnage . " fuis le combat. Le lâche!" . '<br>' ;
					}
		}
?>
