<?php
//ESTE EJERCICIO ES LA ACTIVIDAD NUMERO 0 DEL MODULO DE PROGRAMACION
//declarar variables
$num1= rand(0,5);
$num2= rand(0,5);
$operacion= rand (0,6);
//presenta los valores
    print "Primer valor es:$num1 y el segundo: $num2. Operacio:$operacion<br><br>";
/*crea un switch, se compone de CASE (numero de accion) y te hace lo que tu le pidas
en caso de que de ese numero de case que has declarado previamente y definido como $operacion
 */
    switch ($operacion){
        case 1:print "Valor Suma: ".($num1+$num2);
            break;
        case 2:print "Valor resta: ".($num1-$num2);
            break;
        case 3:
            /*esto que ves abajo es como invertir un valor, el $temp sirve para guardar un 
            valor temporalmente hasta que lo cambies, dentro de esta operacion ves como el valor temporal almacena el 1,
            despues te dice que el 1 es igual al 2 y al final te sale que el 2 sea igual al temporal, de esta forma se
            INVIERTEN LOS NUMEROS SIN CAMBIARLE EL VALOR (SI NO LO ENTIENDES ME LO COMENTAS Y TE MANDO AUDIO)*/
            $temp = $num1;
            $num1 = $num2;
            $num2 = $temp; 
            print "Valor de $num1 i valor de $num2: $num2";
            break;
        case 4:print "Valor multiplicar: ".($num1*$num2);
            break;
        case 5:
            /*En la siguiente puedes meter un IF para ponerle una condicion,
            en este caso se impone que si el segundo numero es igual a 0 que te muestre que no se puede hacer,
            puedes utilizar el $num2 == 0 o el $num2 !=0 (significa que sea DIFERENTE A 0) */
             if($num2 == 0){
            print "No podemos dividir por 0";}
            else{
                print "Valor cociente: ".($num1/$num2);
                }
            break;
        case 6:
            if($num2 == 0){
            print "No podemos dividir por 0";}
            else{
                print "Valor residuo: ".($num1%$num2);
                }
             break;
             /*el default en este caso no es util porque como hemos puesto que el numero de $operacion sea random entre 0 y 6 y ningun valor esta por encima 6 ni por debajo de 0 no va a saltar,
             en caso que en un futuro hagamos que esto sea un PROMPT (el cuadradito que sale que tienes que escribir un valor) y pongas en este caso 7, te expulsara del SWITCH y acabaras el programa*/
             default: "No esta dentro de la operacion";
    }