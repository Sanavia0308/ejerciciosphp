<?php
function usuarioOk($usuario, $contraseña) :bool {
   if ( strlen($usuario)>8 && $contraseña ==strrev($usuario)){
      return true;
   }
   return false;
}
function contarp($comentario){
   $contador=0;
   $palabras=0;
   for($i=0;$i<strlen($comentario); $i++){
      $contador++;
      if ($comentario[$i]==" "){
         $contador=0;
         $palabras++;
      }
   }
   return $palabras+1;
}

function letraMasrepetida ($cadenaletras){
    $cadena = mb_str_split($cadenaletras);
    $vecesMax = 0;
    $letraMax = ''; 
    $tamaño = count($cadena);
    for ($i=0; $i<$tamaño; $i++ ) {
        $veces = 1;
        $letrai = $cadena[$i];
        for ($j=$i+1; $j<$tamaño; $j++ ){
            if ( $letrai == $cadena[$j]){
                $veces++;
            }
        }
        if ( $veces > $vecesMax){
                $letraMax = $letrai;
                $vecesMax = $veces;
        }
      }
    return $letraMax;  
}

function palabraMasrepetida ($cadena){
    $palabras = str_word_count($cadena,1);
    $palabrasveces = array_count_values($palabras);
   
    asort($palabrasveces);
    return array_key_last($palabrasveces); 
 }
