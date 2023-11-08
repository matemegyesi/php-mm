<?php
namespace Acme\Geometry\Math\Triangle;

class Triangle{

    private float $a;
    private float $b;
    private float $c;

    public function __construct(float $a, float $b, float $c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getSideA(): float{
        return $this->a;
    }
    public function getSideB(): float{
        return $this->b;
    }
    public function getSideC(): float{
        return $this->c;
    }
    public function getPerimeter(): float{
        return $this->a + $this->b + $this->c;
    }
    public function getArea(): float{
        $s = $this->getPerimeter()/2;
        return sqrt($s*($s-$a)*($s-$b)*($s-$c));
    }
    public function isConstructible(): bool{
        if ($a+$b > $c) {
            return true;
        }else if($a+$c > $b){
            return true;
        }else if($b+$c > $a){
            return true;
        }else{
            return false;
        }
    }

}

?>