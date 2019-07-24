<?php
namespace App\Interfaces;
/*
*Interface de gestion des méthodes des armes
*/
interface iArmes
  {
    public function getNomArme();

    public function getRareteArme();

    public function getDegatsArme();

    public function setNomArme($nomArme);

    public function setRareteArme($rareteArme);

    public function setDegatsArme($degatsArme);
  }

 ?>
