<?php
namespace Acme\Geometry\Math\Rectangle;

class Rectangle{
    private float $a;
    private float $b;

    public function __construct(float $a, float $b){
        $this->a = $a;
        $this->b = $b;
    }

    public function getSideA(): float{
        return $this->a;
    }
    public function getSideB(): float{
        return $this->b;
    }
    public function getArea(): float{
        return $this->a*$this->b;
    }
    public function getPerimeter(): float{
        return ($this->a+$this->b) * 2;
    }
}
?>