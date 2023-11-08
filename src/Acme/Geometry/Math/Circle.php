<?php
namespace Acme\Geometry\Math\Circle;

class Circle{
    private float $r;
    
    public function __construct($r){
        $this->r = $r;
    }

    public function getRadius(): float{
        return $this->r;
    }
    public function getDiameter(): float{
        return $this->r * 2;
    }
    public function getArea(): float{
        return pow($this->r, 2) * pi();
    }
    public function getCircumference(): float{
        return $this->r*2*pi();
    }
}
?>