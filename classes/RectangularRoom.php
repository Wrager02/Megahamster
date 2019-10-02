<?php


class RectangularRoom extends Room {
    private $length;
    private $width;

    public function __construct(string $name, float $price, float $length, float $width) {
        parent::__construct($name, $price);
        $this->length = $length;
        $this->width = $width;
    }

    /**
     * @return float
     */
    public function getLength() : float {
        return $this->length;
    }

    /**
     * @return float
     */
    public function getWidth() : float {
        return $this->width;
    }

    public function calcArea() : float {
        return $this->width * $this->length;
    }

    public function __toString() : string {
        return parent::getName() . ' ' . parent::getPrice() . '$';
    }


    public function toHTML() : string {
        return
            "<tr>" .
                "<td>" . parent::getName() . "</td>" .
                "<td>" . parent::getPrice() . "</td>" .
                "<td>" . $this->getLength() . "</td>" .
                "<td>" . $this->getWidth() . "</td>" .
                "<td></td>" .
                "<td>" . $this->calcArea() . "</td>" .
            "</tr>";
    }
}