<?php

/*
*interface de gestion des méthodes de lancements de sorts, pour les personnages: mages
*/
  interface iSorts extends iActions
    {
      public function bouleDeFeu(Personnage $personnageVersus);

      public function eclair(Personnage $personnageVersus);
    }

?>
