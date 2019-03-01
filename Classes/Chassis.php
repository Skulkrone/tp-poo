<?php
require_once 'Ressources.php';
/**
 * Description of Châssis
 * J'ai étendu la class Ressources dans la classe abstraite Moteur car dans la classe Voiture, impossible de l'implémenter...
 * Elle ne peut implémenter que des Interfaces.
 * @author Skulkrone
 */
abstract class Châssis extends Ressources {
    
    protected $transmission;
      
    public function getTransmission() {
        return $this->transmission;
    }

    public function setTransmission($transmission) {
        $this->transmission = $transmission;
    }
}
