<?php 

/**
 * This is a test page
 */  


class Product {
    protected string $name;
    protected string $description;
    protected float $price;

    public function getPrice() {
        return $this->price;
    }
    
}


$product1 = new Product();


?>

<?php 

interface IVehicule
{
    public function accelerer();
    public function freiner();
}

trait Moteur 
{
    function demarrer() {
        echo "Je démarre";
    }
    function arreter() {
        echo "Je m'arrête";
    }
}

trait Klaxonne 
{
    function Klaxon() {
        echo "Je klaxonne !";
    }
}

//On ne peux pas hériter de plusieurs classe, mais par contre, on peux hériter de plusieurs trait.
class Vehicule implements IVehicule {
    protected string $brand;
    protected string $vitesseMax;

    public function __construct(string $brand, float $vitesseMax) {
        
        $this->brand = $brand;
        $this->vitesseMax = $vitesseMax;
    }

    /**
     * Get the value of vitesseMax
     */
    public function getVitesseMax() : float 
    {
        return $this->vitesseMax;
    }
    
    /**
     * Set the value of vitesseMax
     */

    public function setVitesseMax(float $vitesseMax) : self
    {
        if ($vitesseMax > 0) {
            $this->vitesseMax = $vitesseMax;
        }

        return $this;
    }

    public function accelerer():void
    {
        echo "J'accélère";
    }

    public function freiner():void
    {
        echo "Je freine";
    }
}

// Une seul class mère, ici vehicule, plusieurs trait utiliser sur voiture, par exemple moteur et klaxonne.
class Voiture extends Vehicule {

    use Moteur, Klaxonne;
    protected string $nombre_roues;

}

class Bateau extends Vehicule {
    protected string $nombre_cabines;

}

class Avion extends Vehicule{
    protected string $nombre_ailes;

}

$voiture1 = new Voiture('Toyota', 275);
echo $voiture1 ->getVitesseMax();

$voiture2 = new Voiture('Kangoo', 300);
echo $voiture2 ->getVitesseMax();

?>