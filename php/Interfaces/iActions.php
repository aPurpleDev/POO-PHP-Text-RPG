<?php

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
