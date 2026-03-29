<?php

include_once (__DIR__ . '/../../model/validations/Check.php');

abstract class Person {

    protected string $name;
    protected string $email;
    protected string $provincia;
    protected string $poblacion;

    //el insert code importa mucho donde se pone
    public function __construct(string $name, string $email, string $provincia, string $poblacion) {
        $this->name = $name;
        $this->email = $email;
        $this->provincia = $provincia;
        $this->poblacion = $poblacion;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getProvincia(): string {
        return $this->provincia;
    }

    public function getPoblacion(): string {
        return $this->poblacion;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setEmail(string $email): bool {
        if (Check::isValidEmail($email) === true) {
            $this->email = $email;
            return true;
        }
        return false;
    }

    public function setProvincia(string $provincia): void {
        $this->provincia = $provincia;
    }

    public function setPoblacion(string $poblacion): void {
        $this->poblacion = $poblacion;
    }

    public function toString(): string {
        return $this->name . "," . $this->email . "," . $this->provincia . "," . $this->poblacion; //hay que acabarlo
    }

    public abstract function getContactData(): string;

    //si no quieres todo de golpe, llamas al getter que tu quieras.
}
