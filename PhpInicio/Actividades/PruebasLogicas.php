<?php

$nota = rand(0,10);
print "<br> NOTA OBTENIDA: ".$nota."<br>";
//if ( $nota > 4 ) {
//    print "Estas Aprobado!";
//}
//else{
//    print "Estas Suspendido!";
//}

if ( $nota < 3 ) {
    print "Has obtenido un Un MO!";
} else if ( $nota < 4 ) {
    print "Has obtenido un Insuficiente!";
} else if ( $nota < 5 ) {
    print "Has obtenido un Suficiente!";
} else if ( $nota < 6 ) {
    print "Has obtenido un Bien!";
} else if ( $nota < 7 ) {
    print "Has obtenido un Notable!";
} else if ( $nota < 9 ) {
    print "Has obtenido un Sobresaliente!";
} else if ( $nota = 10 ) {
    print "Has obtenido un Matricula de Honor!";
}