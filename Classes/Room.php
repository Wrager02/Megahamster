<?php


class Room {
    private $price;
    private $name;

    public function __construct(string $name, float $price) {
        $this->price = $price;
        $this->name = $name;
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

    public function __toString() : string {
        return $this->getName() . ' ' . $this->getPrice() . '$';
    }
}