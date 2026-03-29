<?php

include_once (__DIR__ . '/../model/products/Product.php');
include_once (__DIR__ . '/../model/products/Curso.php');
include_once (__DIR__ . '/../model/products/Libro.php');
include_once (__DIR__ . '/../model/products/Software.php');

$l = new Libro(101, "lucho", "pichon", 38.8, "windowsserver", 1989);

print "<br><h1>DATOS:</h1>";


print "<br>".$l->toString()."<br>";
print"<br>".$l->setId(102)."<br>";
print "<br>".$l->setName("Lucho");
print"<br>".$l->setAutor("pichan") ."<br>";
print"<br>".$l->setTema("linux") ."<br>";
print"<br>".$l->setPreu(87.9) ."<br>";

print "<br><h1>Reversa:</h1>";

print "<br>".$l->toString()."<br>";

print "<hr>";
$s = new Software(101, "lucho", "pichon", 38.8, "wserver2012", 2012, "4564-4545-5454-6974", "v2");

print "<br><h1>DATOS:</h1>";


print "<br>".$s->toString()."<br>";
print"<br>".$s->setId(102)."<br>";
print "<br>".$s->setName("Lucho");
print"<br>".$s->setAutor("pichan") ."<br>";
print"<br>".$s->setPreu(87.9) ."<br>";
print"<br>".$s->setSistops("linux") ."<br>";
print"<br>".$s->setRelease_date(1987)."<br>";


print "<br><h1>Reversa:</h1>";

print "<br>".$s->toString()."<br>";

print "<hr>";

$c = new Curso(101, "lucho", "pichon", 38.8, false , "sistemas", 20);

print "<br>".$c->toString()."<br>";
print "<br>".$c->setCertificado(true) ."<br>";
if($c->getCertificado()== false){
    print"<br>Valor False";
}else{
    print"<br>valor true";
}
print "<br>".$c->getCertificado()."<br>";
print "<br>".$c->getDuracion() ."<br>";
print "<br>".$c->getTemario()."<br>";
