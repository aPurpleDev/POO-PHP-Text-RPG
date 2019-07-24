<?php
namespace App\Interfaces;
use App\Personnages;
/*
*Interface pour les méthodes des personnages
*/
  interface iActions
  {
    public function getNomPersonnage();

    public function getArmePersonnage();

    public function getViePersonnage();

    public function setNomPersonnage($nomPersonnage);

    public function setArmePersonnage($nomArme, $rareteArme, $degatsArme);

    public function fuir();
  }

?>
