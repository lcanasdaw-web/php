<?php

include_once(__DIR__ . '/Product.php');

class Libro extends Product {

    protected string $tema;
    protected int $any_pub;

    public function __construct(int $id, string $name, string $autor, float $preu, string $tema, int $any_pub) {
        parent::__construct($id, $name, $autor, $preu);
        $this->tema = $tema;
        $this->any_pub = $any_pub;
    }

    public function getTema(): string {
        return $this->tema;
    }

    public function getAny_pub(): int {
        return $this->any_pub;
    }

    public function setTema(string $tema): void {
        $this->tema = $tema;
    }

    public function setAny_pub(int $any_pub): void {
        $this->any_pub = $any_pub;
    }

    public function toString(): string {
        return parent::toString() . "," . $this->tema . "," . $this->any_pub;
    }

    public function getDetails(): string {
        
    }

}
