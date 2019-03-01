<?php

/**
 * Description of Moteur
 * Interface parente qui va agir surla classe Voiture (Enfant)
 * @author Skulkrone
 */
interface Moteur {
    
    public function Go();
    public function Stop();
    public function Energy();
    public function Speed();
    
}
