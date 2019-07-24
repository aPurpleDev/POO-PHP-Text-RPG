<?php
namespace App\Personnages;
Use App\Interfaces\iSorts;
Use App\Armes\Baton;
/*
*Classe concrète: Mage
*/
	class Mage extends Personnage implements iSorts
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

					public function fuir()
					{
						echo $this->nomPersonnage . " fuis le combat. Le lâche!" . '<br>' ;
					}

					public function bouleDeFeu(Personnage $personnageVersus)
					{
							$personnageVersus->viePersonnage -= ($this->armePersonnage->getDegatsArme() + 10);
							echo $this->nomPersonnage . " envoie une boule de feu magique avec +10 dégats à " . $personnageVersus->nomPersonnage . " ." . '<br>' ;
					}

					public function eclair(Personnage $personnageVersus)
					{
							$personnageVersus->viePersonnage -= ($this->armePersonnage->getDegatsArme() + 20);
							echo $this->nomPersonnage . " envoie un éclair magique avec +20 dégats à " . $personnageVersus->nomPersonnage . " ." . '<br>' ;
					}
		}
?>
