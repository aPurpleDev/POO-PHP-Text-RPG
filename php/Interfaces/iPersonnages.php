<?php

interface iPersonnages
{
  public function getNomPersonnage();

  public function getArmePersonnage();

  public function getViePersonnage();

  public function setNomPersonnage($nomPersonnage);

  public function setArmePersonnage($nomArme, $rareteArme, $degatsArme);

  public function attaquer(Personnage $personnageVersus);

  public function fuir();
}

 ?>
