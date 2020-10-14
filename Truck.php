<?php
/* 

Après les classes Car et Bicycle, tu dois créer une classe permettant de manipuler un objet camion.
Un camion est un enfant de Vehicle et a des propriétés spécifiques :

sa capacité de stockage.
son chargement, qui est initialement à zéro.
La capacité de stockage doit être saisie au moment de l'Instanciation de l'objet, en plus de la couleur, du nombre de sièges et de l'énergie.
Il a également une méthode qui permet de savoir s’il est plein ou non. Celle-ci retourne in filling quand il n'est pas plein et full quand il est plein.

N'oublie pas les getters et les setters !!

Critères de validation
Le nom de la classe est en anglais et en UpperCamelCase.
La classe contient toutes les propriétés et méthodes demandées.
Les noms des propriétés et des méthodes sont en anglais et en camelCase.
Les visibilités public/private/protected sont correctement définies.
Sur index.php, il est possible d'instancier autant d’objets Truck que désirés, sans provoquer d'erreur.
Sur index.php, les camions avancent, freinent et contrôlent leur chargement sans erreur.
Ton code est disponible sur GitHub.*/

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    
     /**
    * @var integer
    */
    protected $stockCapacity;

    /**
    * @var integer
    */
    protected $load = 0;

    /**
     * @var string
     */
    private $energy ="fuel";

    /**
     * @var int
     */
    private $energyLevel;


    public function __construct(int $stockCapacity, int $energyLevel, string $color, int $nbSeats, string $energy)
    {
    parent::__construct($color, $nbSeats);
    $this->setStockCapacity($stockCapacity);
    $this->setEnergyLevel($energyLevel);
    $this->setEnergy($energy);

    }
   
   public function getStockCapacity(): int
    {
        return $this->stockCapacity;
    }

    public function setStockCapacity(int $stockCapacity): void
    {
        $this->stockCapacity = $stockCapacity;
    } 

    public function getLoad(): int
    {
        return $this->load;
    }

    public function setLoad(int $load): void
    {
        $this->load = $load;
    } 


   public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }


    public function getEnergy(): int
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function isFull(): string
    {
        $sentence = "";
        if ($this->getStockCapacity() < $this->getLoad()){
            $sentence .= "is full";
            return $sentence;
        } else {
        $sentence .= "in filling";
        return $sentence;
        }

    }
}