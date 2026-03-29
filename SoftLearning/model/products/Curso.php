<?php

include_once(__DIR__ . '/Product.php');

class Curso extends Product {

    protected bool $certificado;
    protected string $temario;
    protected int $duracion;

    public function __construct(int $id, string $name, string $autor, float $preu, bool $certificado, string $temario, int $duracion) {
        parent::__construct($id, $name, $autor, $preu);

        $this->certificado = $certificado;
        $this->temario = $temario;
        $this->duracion = $duracion;
    }

    public function getCertificado(): bool {
        return $this->certificado;
    }

    public function getTemario(): string {
        return $this->temario;
    }

    public function getDuracion(): int {
        return $this->duracion;
    }

    public function setCertificado(bool $certificado): void {
        $this->certificado = $certificado;
    }

    public function setTemario(string $temario): void {
        $this->temario = $temario;
    }

    public function setDuracion(int $duracion): void {
        $this->duracion = $duracion;
    }

    public function toString(): string {
        return parent::toString() . "," . $this->certificado . "," . $this->duracion . "." . $this->temario;
    }

    public function getDetails(): string {
        
    }

}
