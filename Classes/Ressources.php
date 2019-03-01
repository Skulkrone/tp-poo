<?php

/**
 * Description of Ressources
 * Dans la classe Ressources, je définis les couleurs disponibles pour les voitures en créant différentes constantes.
 * @author Skulkrone
 */
class Ressources {
    const Couleur_1 = "Red";
    const Couleur_2 = "Blue";
    const Couleur_3 = "Black";
    const Couleur_4 = "Yellow";
    const Couleur_5 = "Orange";
    const Couleur_6 = "Green";
    const Couleur_7 = "White";
    const Couleur_8 = "Pink";
    const Couleur_9 = "Grey";
    
    protected $couleur1;
    protected $couleur2;
    protected $couleur3;
    protected $couleur4;
    protected $couleur5;
    protected $couleur6;
    protected $couleur7;
    protected $couleur8;
    protected $couleur9;
    
    function getCouleur1() {
        return $this->couleur1 . self::Couleur_1;
    }

    function getCouleur2() {
        return $this->couleur2 . self::Couleur_2;
    }

    function getCouleur3() {
        return $this->couleur3 . self::Couleur_3;
    }

    function getCouleur4() {
        return $this->couleur4 . self::Couleur_4;
    }

    function getCouleur5() {
        return $this->couleur5 . self::Couleur_5;
    }

    function getCouleur6() {
        return $this->couleur6 . self::Couleur_6;
    }

    function getCouleur7() {
        return $this->couleur7 . self::Couleur_7;
    }

    function getCouleur8() {
        return $this->couleur8 . self::Couleur_8;
    }

    function getCouleur9() {
        return $this->couleur9 . self::Couleur_9;
    }
    
    function setCouleur1($couleur1) {
        $this->couleur1 = $couleur1;
    }

    function setCouleur2($couleur2) {
        $this->couleur2 = $couleur2;
    }

    function setCouleur3($couleur3) {
        $this->couleur3 = $couleur3;
    }

    function setCouleur4($couleur4) {
        $this->couleur4 = $couleur4;
    }

    function setCouleur5($couleur5) {
        $this->couleur5 = $couleur5;
    }

    function setCouleur6($couleur6) {
        $this->couleur6 = $couleur6;
    }

    function setCouleur7($couleur7) {
        $this->couleur7 = $couleur7;
    }

    function setCouleur8($couleur8) {
        $this->couleur8 = $couleur8;
    }

    function setCouleur9($couleur9) {
        $this->couleur9 = $couleur9;
    }
}
