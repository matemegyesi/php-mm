<?php

namespace Acme\Iskola;

class Diak{
    private $vnev;
    private $knev;
    private $email;
    private $szuletett;

    public function __construct(string $vnev, string $knev, string $email, DateTime $szuletett){
        $this->vnev = $vnev;
        $this->knev = $knev;
        $this->email = $email;
        $this->szuletett = $szuletett;
    }
}

?>