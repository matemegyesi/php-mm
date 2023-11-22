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

    public function getVnev(): string{
        return $this->vnev;
    }
    public function getKnev(): string{
        return $this->knev;
    }
    public function getEmail(): string{
        return $this->email;
    }
    public function getSzuletett(): DateTime{
        return $this->szuletett;
    }
    public function getTeljesNev(): string{
        return $this->vnev . " " . $this->knev;
    }
    public function getSzuletettISO(): string{
        return $this->szuletett->format(DateTime::ATOM);
    }
}

?>