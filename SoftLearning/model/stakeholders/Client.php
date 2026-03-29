<?php

include_once( __DIR__ . '/Person.php');
class Client extends Person{ //esto significa que Employee hereda todo lo del person.
        protected int $Id_client;     
        protected string $Apellido;     
        
        public function __construct(string $name, string $email, string $provincia, string $poblacion, 
                int $Id_client, string $Apellido) {
            
            parent::__construct($name, $email, $provincia, $poblacion); //este es el conductor padre, el heredado siempre recibe más parametros que el del padre.
            $this->Id_client = $Id_client;
            $this->Apellido = $Apellido;
        }
        
        public function getId_client(): int {
            return $this->Id_client;
        }

        public function getApellido(): string {
            return $this->Apellido;
        }
        
        public function setId_client(int $Id_client): void {
            $this->Id_client = $Id_client;
        }

        public function setApellido(string $Apellido): void {
            $this->Apellido = $Apellido;
        }
    
    public function toString(): string {
            return parent::toString().",".$this->Id_client.",".$this->Apellido;
        }

    public function getContactData(): string {
        
    }
}