<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Product
 *
 * @author lcanas
 */
abstract class Product {

    protected int $id;
    protected string $name;
    protected string $autor;
    protected float $preu;

    public function __construct(int $id, string $name, string $autor, float $preu) {
        $this->id = $id;
        $this->name = $name;
        $this->autor = $autor;
        $this->preu = $preu;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getAutor(): string {
        return $this->autor;
    }

    public function getPreu(): float {
        return $this->preu;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setAutor(string $autor): void {
        $this->autor = $autor;
    }

    public function setPreu(float $preu): void {
        $this->preu = $preu;
    }

    public function toString(): string {
        return $this->id . "," . $this->name . "," . $this->autor . "," . $this->preu.",";
    }

    public abstract function getDetails(): string;
}
