<?php
session_start();
if (isset($_COOKIE['visitas'])){
  $visitas=$_COOKIE['visitas']+1;
}else {
  $visitas=1;
}
setcookie('visitas',$visitas,time()+(30*24*60*60));//un mes
$msg="";

// Entra en el casino --------------------------------
if (isset($_POST['cantidadini'])){
  $_SESSION['disponible']=(int)$_POST['cantidadini'];
}

if (! isset($_SESSION['disponible'])) {
    include "form_bienvenida.php";
    // No continuo despues de mostrar los formularios
    exit();
}



// Si realiza una apuesta ----------------------------------
// llama a procesar apuesta 
if(isset($_POST["apostar"])){
  $cantidad=(int)$_POST["cantidad"];
  $apuesta=$_POST['apuesta'];

  if($cantidad>0 && $cantidad<=$_SESSION['disponible']){
    $msg=procesarApuesta($cantidad, $_SESSION['disponible'],$apuesta);
  }else{
    $msg="Cantidad de apuesta no válida";
  }
}
$disponible=$_SESSION['disponible'];

// Si abandona o ya no le queda dinero -------------------------
 if (isset($_POST["dejar"]) || ($_SESSION["disponible"] == 0) ) {
  include "despedida.php";
  session_destroy();
   exit();
} 
// Muestro el formulario si puede seguir apostando
require_once  "form_apuesta.php";
?>
<?php

/**
 *  FUNCIONES AUXILIARES
 */

function procesarApuesta(int $valorapuesta, int & $saldodisponible, string $apuesta): String {
  $numeroganador=rand(1,100);
  $es_par=($numeroganador%2==0);
  $victoria=false;
  if($es_par==true && $apuesta=="PAR"){
    $victoria=true;
  }elseif($es_par==false && $apuesta=="IMPAR"){
    $victoria=true;
  }
if($victoria==true){
  $saldodisponible+=$valorapuesta;
  $msgresultado="HA SALIDO EL $numeroganador HAS GANADO $valorapuesta y tu saldo actual es $saldodisponible";
}else{
  $saldodisponible-=$valorapuesta;
  $msgresultado="HA SALIDO EL $numeroganador HAS PERDIDO $valorapuesta y tu saldo actual es $saldodisponible";
}

  return $msgresultado;
}

