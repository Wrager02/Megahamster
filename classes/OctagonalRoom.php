<?php


class OctagonalRoom extends Room {
    private $side;

    public function __construct(string $name, float $price, float $side) {
        parent::__construct($name, $price);
        $this->side = $side;
    }

    /**
     * @return float
     */
    public function getSide() : float {
        return $this->side;
    }

    public function calcArea() : float {
        return 2 * (sqrt(2) + 1) * pow($this->side, 2);
    }

    public function __toString() : string {
        return parent::getName() . ' ' . parent::getPrice() . '$';
    }


    public function toHTML() : string {
        return
            "<tr>" .
                "<td>" . parent::getName() . "</td>" .
                "<td>" . parent::getPrice() . "</td>" .
                "<td></td>" .
                "<td></td>" .
                "<td>" . $this->getSide() . "</td>" .
                "<td>" . $this->calcArea() . "</td>" .
            "</tr>";
    }
}