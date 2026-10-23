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

function letrarep($comentario){
   $letrarep="";
   /////////
}
