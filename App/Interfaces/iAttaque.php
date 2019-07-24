<?php

/*
*Interface spécifiques aux personnages capables d'attaquer (non-sorts)
*/
  interface iAttaque extends iActions
  {
    public function attaquer(Personnage $personnageVersus);
  }

?>
