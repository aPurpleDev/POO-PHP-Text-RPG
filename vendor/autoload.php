<?php

// autoload.php @generated by Composer

// manually requirement of project classes
require ('php/armes/armes.php');
require ('php/armes/epee.php');
require ('php/armes/baton.php');
require ('php/armes/arc.php');

require ('php/personnages/personnage.php');
require ('php/personnages/guerrier.php');
require ('php/personnages/mage.php');
require ('php/personnages/paladin.php');
require ('php/personnages/roublard.php');
require ('php/personnages/voleur.php');

require ('php/NPC/boss.php');

require_once __DIR__ . '/composer/autoload_real.php';

return ComposerAutoloaderInite76f87c3fe3cb134ca032462a11d1802::getLoader();
