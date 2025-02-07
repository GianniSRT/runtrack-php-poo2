<?php
class Rectangle {
    private $longueur;
    private $largeur;

    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    // Assesseurs (Getters)
    public function getLongueur() {
        return $this->longueur;
    }

    public function getLargeur() {
        return $this->largeur;
    }

    // Mutateurs (Setters)
    public function setLongueur($longueur) {
        $this->longueur = $longueur;
    }

    public function setLargeur($largeur) {
        $this->largeur = $largeur;
    }

    // Méthode pour calculer le périmètre
    public function perimetre() {
        return 2 * ($this->longueur + $this->largeur);
    }

    // Méthode pour calculer la surface
    public function surface() {
        return $this->longueur * $this->largeur;
    }
}

class Parallelepipede extends Rectangle {
    private $hauteur;

    public function __construct($longueur, $largeur, $hauteur) {
        parent::__construct($longueur, $largeur);
        $this->hauteur = $hauteur;
    }

    // Assesseur et mutateur pour hauteur
    public function getHauteur() {
        return $this->hauteur;
    }

    public function setHauteur($hauteur) {
        $this->hauteur = $hauteur;
    }

    // Méthode pour calculer le volume
    public function volume() {
        return $this->surface() * $this->hauteur;
    }
}

// Instanciation d'un rectangle
$rectangle = new Rectangle(10, 5);
echo "Périmètre du rectangle : " . $rectangle->perimetre() . " unités\n";
echo "Surface du rectangle : " . $rectangle->surface() . " unités carrées\n";

// Instanciation d'un parallélépipède
$parallelepipede = new Parallelepipede(10, 5, 8);
echo "Volume du parallélépipède : " . $parallelepipede->volume() . " unités cubiques\n";
?>
