<?php

include_once(__DIR__ . '/Product.php');

class Software extends Product {

    protected string $sistops;
    protected string $release_date;
    protected string $serial;
    protected string $version;

    public function __construct(int $id, string $name, string $autor, float $preu, string $sistops, string $release_date, string $serial, string $version) {

        parent::__construct($id, $name, $autor, $preu);
        $this->sistops = $sistops;
        $this->release_date = $release_date;
        $this->serial = $serial;
        $this->version = $version;
    }

    public function getSistops(): string {
        return $this->sistops;
    }

    public function getRelease_date(): string {
        return $this->release_date;
    }

    public function getSerial(): string {
        return $this->serial;
    }

    public function getVersion(): string {
        return $this->version;
    }

    public function setSistops(string $sistops): void {
        $this->sistops = $sistops;
    }

    public function setRelease_date(string $release_date): void {
        $this->release_date = $release_date;
    }

    public function setSerial(string $serial): void {
        $this->serial = $serial;
    }

    public function setVersion(string $version): void {
        $this->version = $version;
    }

    public function toString(): string {
        return parent::toString() . "," . $this->release_date . "," . $this->serial . "," . $this->sistops . "," . $this->sistops . "," . $this->version;
    }

    public function getDetails(): string {
        
    }

}
