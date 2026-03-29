<?php

include_once( __DIR__ . '/Person.php');
class Supplier extends Person {
    protected int $workerId;
    protected string $Supplier_Business;     
    protected string $DeliveryTime; 
    
    public function __construct(string $name, string $surname, string $ident, string $birthday, string $email, string $phone, string $address, 
                int $workerId, string $Supplier_Business, string $DeliveryTime) {
            
            parent::__construct($name, $surname, $ident, $birthday, $email, $phone, $address); //este es el conductor padre, el heredado siempre recibe más parametros que el del padre.
            $this->workerId = $workerId;
            $this->Supplier_Business = $Supplier_Business;
            $this->DeliveryTime = $DeliveryTime;
    }

    public function getWorkerId(): int {
        return $this->workerId;
    }

    public function getSupplier_Business(): string {
        return $this->Supplier_Business;
    }

    public function getDeliveryTime(): string {
        return $this->DeliveryTime;
    }

    public function setWorkerId(int $workerId): void {
        $this->workerId = $workerId;
    }

    public function setSupplier_Business(string $Supplier_Business): void {
        $this->Supplier_Business = $Supplier_Business;
    }

    public function setDeliveryTime(string $DeliveryTime): void {
        $this->DeliveryTime = $DeliveryTime;
    }
    
    public function toString(): string {
            return parent::toString().",".$this->workerId.",".$this->Supplier_Business.",".$this->DeliveryTime;
        }
        
        public function getContactData():string{
            return $this->workerId.",".$this->Supplier_Business.",".$this->DeliveryTime;
        }

}