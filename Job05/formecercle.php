<?php
// Classe de base Forme
class Forme {
    public function aire() {
        return 0;
    }
}

// Classe Rectangle qui hérite de Forme
class Rectangle extends Forme {
    private $largeur;
    private $hauteur;

    public function __construct($largeur, $hauteur) {
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
    }

    // Surcharge de la méthode aire()
    public function aire() {
        return $this->largeur * $this->hauteur;
    }
}

// Instanciation d'un rectangle et affichage de son aire
$rectangle = new Rectangle(10, 5);
echo "Aire du rectangle : " . $rectangle->aire() . " unités carrées\n";
?>
