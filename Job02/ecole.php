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

class Professeur extends Personne {
    private $matiereEnseignee;

    public function __construct($age, $matiereEnseignee) {
        parent::__construct($age);
        $this->matiereEnseignee = $matiereEnseignee;
    }

    public function enseigner() {
        echo "Le cours va commencer\n";
    }
}

// Instanciation d'un élève et exécution des méthodes demandées
$eleve1 = new Eleve();
$eleve1->bonjour();
$eleve1->allerEnCours();

// Modifier l'âge de l'élève à 15 ans
$eleve1->modifierAge(15);
$eleve1->afficherAge();

// Instanciation d'un professeur de 40 ans et exécution des méthodes demandées
$professeur1 = new Professeur(40, "Mathématiques");
$professeur1->bonjour();
$professeur1->enseigner();
?>
