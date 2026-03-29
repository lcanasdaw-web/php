<?php
/*
//EJERCICIO 1 
 
$codific=[',','.','_','$','@'];
$frase=$_GET['frase']??'No has puesto nada';

$indexAleatorio=rand(0,count($codific)-1);
//cal agafar un caracter aleatori per intercalar
$caracterInterc=$codific[$indexAleatorio];

print"$caracterInterc<br>";
for($i=0;$i<strlen($frase);$i++){
    if($i<strlen($frase)-1){
        print"$frase[$i]".$caracterInterc;
    }else{
        print "$frase[$i]";
    }
}

//EJERCICIO 2
*/
/*$codigos=['@','.',',','*'];
$cadena="davinci@gmail.com, leonardo";
$indice1=rand(0,count($codigos)-1);
$indice2=rand(0,count($codigos)-1);
$c1=$codigos[$indice1];
$c2=$codigos[$indice2];

print"Codigos a encontrar: $c1  $c2<br>";

$foundc1=false;
$foundc2=false;

for($i=0;$i<strlen($cadena);$i++){
    if($cadena[$i]==$c1){
        $foundc1=true;
        $posc1=$i;
        print $cadena[$i]."$c1<br>";
    }
    if($cadena[$i]==$c2){
        $foundc2=true;
        $posc2=$i;
        print $cadena[$i]."$c2<br>";
    }
    print "$cadena[$i]<br>";
}

if($foundc1==true AND $foundc2==true){
    $dist=$posc1-$posc2;
    if($dist<0){
        $dist=(-1)*$dist;
        $dist--;
    }elseif($dist==0){
        print"Son los mismos caracteres<br>";
    }else{
    $dist--;
    
    }
        print"La distancia es: $dist";
    }else{
        print"No estan los dos caracteres";
    }*/

/*
//EJERCICIO 3

//Inicializacion de variables
$cadena="Esto es una cadena de \t texto \n Esto es otra frase \r";
$resultado="";
//logica
       for($i=0;$i<strlen($cadena);$i++){
           if($cadena[$i]!= " " AND $cadena[$i]!= "\t" AND $cadena[$i]!= "\n" AND $cadena[$i]!="\r"){
            $resultado.= $cadena[$i];               
           }
       }
//presentacion
print $resultado;


//VERSION 2 DEL EJERCICIO 3

$forbidden=[" ", "\t","\n","\r"];
$cadena="Cadena de prova\t per al\n exercici";
$resultat="";
for($i=0;$i<strlen($cadena);$i++){
    $found=false;
    foreach($forbidden as $caracter){
        if($cadena[$i]==$caracter){
            $found=true;
        }
    }
    if(!$found){
        $resultat.=$cadena[$i];
    }
}
print"$resultat";

//EJERCICIO 4


$substituciones=[
  'a'=>['à','á','ä'],
  'e'=>['è','é','ë'],
  'i'=>['í','ì','ï'],
  'o'=>['ó','ò','ö'],
  'u'=>['ù','ú','ü'],
];
$cadena="La ruta nätüral";
$regla=[" "];
$res="";
$cadena_minusculas=strtolower($cadena);
$cadena_inversa=strrev($cadena);
print"$cadena_minusculas<br>$cadena_inversa<br>";

for($i=0;$i<strlen($cadena_minusculas);$i++){
foreach($substituciones as $vocal=>$similar){
    if (in_array($cadena_minusculas[$i], $similar)) {
            $res .= $vocal;
        }else{
            $res.=$cadena_minusculas[$i];
        }
    }
}print "$res";

*/

// VERSION 2

/*
//trim -> elimina todos los espacios
//ltrim -> elimina espacio izquierda
//rtrim -> elimina espacio derecha
 $cadena="     Là      rüta naturaL    ";
 //eliminar espacios al inicio y final
 $cadena_minuscula=trim(strtolower($cadena));
 //eliminar espacios interiores
 $cadena_transformada_sin_espacios=implode('',explode(' ',$cadena_minuscula));
 $forbidden=['ä'=>'a',
     'ë'=>'e',
     'ï'=>'i',
     'ö'=>'o',
     'ü'=>'u',
     'ú'=>'u',
     'à'=>'a',
           
 ];
 //traduccion de la cadena
 $clean_cadena=strtr($cadena_transformada_sin_espacios,$forbidden);
 print"$clean_cadena<br>";
 $cadena_rev=strrev($clean_cadena);
 
 if($clean_cadena === $cadena_rev){
     print "<br>Son palindromas<br>";
 }else{
     print"<br>No son palindormas<br>";
 }*/

//EJERCICIO 5
/*$meses=['ENERO','FEBRERO','MARZO','ABRIL','MAYO','JUNIO','JULIO','AGOSTO','SEPTIEMBRE','OCTUBRE','NOVIEMBRE','DICIEMBRE'];
$alfabeto = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L'];
$caracter_aleat=$alfabeto[rand(0,count($alfabeto)-1)];

foreach($meses as $mes){
        if((stripos($mes,$caracter_aleat) != false)|| ($mes[0]==$caracter_aleat)){
            $resultado[]=$mes;
            print"<br>$mes <br>";
            }
        }
 */

//EJERCICIO 6

/*$password_to_validate='Pa$$w0rd2025';
$especials=preg_match_all('/([^a-zA-Z0-9])/',$password_to_validate);
$majuscules=preg_match_all('/([A-Z])/',$password_to_validate);
$numeros=preg_match_all('/([0-9])/',$password_to_validate);
if(strlen($password_to_validate)>=10 &&
                    $especials >=2 && 
                    $majuscules >=1 && 
                    $numeros>=1){
    print"El password es vàlid <br>";
}else{
    print "El password no es vàlido";
}*/

//EJERCICIO 6v2

/*$password='Pa$w0rd2025*';
$compt_majusculas=0;
$compt_numeros=0;
$compt_no_alfa=0;
$majus=range('A','Z');
$nums=range('0','9');
$car_no_alfa=[','/'.',';'+':','-','_','?','#','*','=','$','@'];

if(strlen($password)>=10){
    //comprobar majus
    for($i=0;$i<strlen($password);$i++){
        if(in_array($password[$i],$majus)){
            $compt_majusculas++;
        }
                if(in_array($password[$i],$nums)){
            $compt_numeros++;
        }
                if(in_array($password[$i],$car_no_alfa)){
            $compt_no_alfa++;
        }
    }
    if($compt_majusculas>=2 && $compt_no_alfa>=2 && $compt_numeros>=1){
        print "Password correcto";    
    }
    else{
        print"Password Incorrecto: min 2 majus, min 2 caract. no alfa i minim un numero";
    }
        
}else{
    print"Password incorrecto: longitud min =10";
}*/

