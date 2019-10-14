<?php

namespace Wrager02\Megahamster\Classes;

abstract class Room {
    private $price;
    private $name;
    private $specialEquipment;

    public function __construct(string $name, float $price, array $specialEquipment) {
        $this->price = $price;
        $this->name = $name;
        $this->specialEquipment = $specialEquipment;
    }

    /**
     * @return string
     */
    public function getName() : string {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPrice() : float {
        return $this->price;
    }

    /**
     * @return array
     */
    public function getSpecialEquipment() : array {
        return $this->specialEquipment;
    }

    public function specialEquipmentToString() : string {
        $r = '';
        foreach ($this->specialEquipment as $equipment) {
            $r = $r . $equipment . ',<br>';
        }
        return substr($r, 0, strlen($r)-5);
    }

    public abstract function calcArea() : float ;
    public abstract function toHTML() : string ;
}