<?php


include_once( __DIR__ . '/Person.php');
class Employee extends Person{ //esto significa que Employee hereda todo lo del person.
        protected int $empId;     
        protected string $department;     
        protected string $role; 
        
        public function __construct(string $name, string $surname, string $ident, string $birthday, string $email, string $phone, string $address, 
                int $empId, string $department, string $role) {
            
            parent::__construct($name, $surname, $ident, $birthday, $email, $phone, $address); //este es el conductor padre, el heredado siempre recibe más parametros que el del padre.
            $this->empId = $empId;
            $this->department = $department;
            $this->role = $role;
        }
        
        public function getEmpId(): int {
            return $this->empId;
        }

        public function getDepartment(): string {
            return $this->department;
        }

        public function getRole(): string {
            return $this->role;
        }

        public function setEmpId(int $empId): void {
            $this->empId = $empId;
        }

        public function setDepartment(string $department): void {
            $this->department = $department;
        }

        public function setRole(string $role): void {
            $this->role = $role;
        }

        public function toString(): string {
            return parent::toString().",".$this->empId.",".$this->role.",".$this->department;
        }
        
        public function getContactData():string{
            return $this->empId.",".$this->role.",".$this->department.",".$this->role;
        }
        
}
