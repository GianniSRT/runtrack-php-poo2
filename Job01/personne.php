<?php
class Personne {
    protected $age;

    public function __construct($age = 14) {
        $this->age = $age;
    }

    public function afficherAge() {
        echo "Âge: " . $this->age . " ans\n";
    }

    public function bonjour() {
        echo "Hello\n";
    }

    public function modifierAge($nouvelAge) {
        $this->age = $nouvelAge;
    }
}

class Eleve extends Personne {
    public function allerEnCours() {
        echo "Je vais en cours\n";
    }

    public function afficherAge() {
        echo "J’ai " . $this->age . " ans\n";
    }
}

class Professeur {
    private $matiereEnseignee;

    public function __construct($matiereEnseignee) {
        $this->matiereEnseignee = $matiereEnseignee;
    }

    public function enseigner() {
        echo "Le cours va commencer\n";
    }
}

// Instanciation des objets
$personne1 = new Personne();
$eleve1 = new Eleve();

// Affichage de l'âge par défaut de l'élève
$eleve1->afficherAge();
?>
