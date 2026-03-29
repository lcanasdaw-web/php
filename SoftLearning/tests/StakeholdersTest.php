 <?php

include_once (__DIR__ . '/../model/stakeholders/Employee.php');
include_once (__DIR__ . '/../model/stakeholders/Person.php');
include_once (__DIR__ . '/../model/stakeholders/Client.php');
include_once (__DIR__ . '/../model/stakeholders/Supplier.php');

$c = new Client("Joan","jgarcia@gmail.com", "Barcelona", "Viladecans",1,"Gómez");

print "<br>".$c->toString()."<br>";
$c->setApellido("Garcilaso");
print "<br>".$c->toString()."<br>";

print"<br> Validar Mail Actual<br>";
print"<br> Email Actual : ".$c->getEmail()."<br>";
if($c->setEmail("jgao.m") ===true){
    print "<br>Email Actualizado:".$c->getEmail()."<br>";
}else{
    print "<br>El email no se ha podido actualizar porque no es valido<br>";
}

$e = new Employee("David", "García", "53971916-R", "27-06-2007", "dgg.davidgarcia@gmail.com", "622319016", "Carrer Alzina", 101, "Programación", "Software Engineer");


$s = new Supplier("Antonio", "García", "59915803-M", "16-04-1975", "agm.holabuenas@gmail.com", "722319028", "Carrer Alzina", 303, "Lidl", "30-45 days");
