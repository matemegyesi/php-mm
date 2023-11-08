<?php
namespace Acme\Geometry\Math\Square;

class Square{
    private float $a;
    
    public function __construct($a){
        $this->a = $a;
    }

    public function getSide(): float{
        return $this->a;
    }
    public function getArea(): float{
        return $this->a*$this->a;
    }
    public function getPerimeter(): float{
        return $this->a*4;
    }
}
?>