<?php

require_once 'Voiture.php';

/* 
 * Création des objets $voiture pour afficher les données.  
 */

$voiture1 = new Voiture();
$voiture1->setType('Seat Ibiza Cupra');
$voiture1->setEnergie('Diesel');
$voiture1->setBoiteVitesse('Séquentielle');
$voiture1->setTransmission('4x4');
$voiture1->setEtat('Shut Off');


$voiture2 = new Voiture();
$voiture2->setType('Renault Clio');
$voiture2->setEnergie('Essence');
$voiture2->setBoiteVitesse('Manuelle');
$voiture2->setTransmission('2x4');
$voiture2->setEtat('Shut Off');


$voiture3 = new Voiture();
$voiture3->setType('BMW i8');
$voiture3->setEnergie('Electrique');
$voiture3->setBoiteVitesse('Automatique');
$voiture3->setTransmission('4x4');
$voiture3->setEtat('Shut Off');