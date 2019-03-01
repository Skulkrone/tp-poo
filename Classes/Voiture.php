<?php

require_once 'Moteur.php';
require_once 'Chassis.php';

/**
 * Description of Voiture
 * On récupére les fonctions créées dans les classes parentes Chassis et Moteur.
 * @author Skulkrone
 */
class Voiture extends Châssis implements Moteur {

    protected $etat;
    protected $energie;
    protected $boiteVitesse;
    protected $type;
    
    public function Go() {
        $this->setEtat('Fire');
    }

    public function Stop() {
        $this->setEtat('Shut Off');
    }

    public function Energy() {
        $this->setEnergie('Diesel');
    }

    public function Speed() {
        $this->setBoiteVitesse();
    }

    function getEtat() {
        return $this->etat;
    }

    function getEnergie() {
        return $this->energie;
    }

    function getBoiteVitesse() {
        return $this->boiteVitesse;
    }

    function getType() {
        return $this->type;
    }

    function setEtat($etat) {
        $this->etat = $etat;
    }

    function setEnergie($energie) {
        $this->energie = $energie;
    }

    function setBoiteVitesse($boiteVitesse) {
        $this->boiteVitesse = $boiteVitesse;
    }

    function setType($type) {
        $this->type = $type;
    }

}
