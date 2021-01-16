<?php

/**
 * @author Alberto Urbaez (Beto) <albertourbaez20@gmail.com>
 * @version 1.0.0
 * =============================================================================
 *    _____                       _   _          _                              
 *   / ____|                     | | (_)        (_)                             
 *  | |        ___    _ __     __| |  _    ___   _    ___    _ __     ___   ___ 
 *  | |       / _ \  | '_ \   / _` | | |  / __| | |  / _ \  | '_ \   / _ \ / __|
 *  | |____  | (_) | | | | | | (_| | | | | (__  | | | (_) | | | | | |  __/ \__ \
 *   \_____|  \___/  |_| |_|  \__,_| |_|  \___| |_|  \___/  |_| |_|  \___| |___/
 * =============================================================================                                                                             
 */


//? -----------------------
//? CONDICIÓN IF
//? -----------------------

$verdadero = true;

// variable condicional
$var_condicion = ($verdadero == true) ? "se cumple esto" : "si no se cumple esto";

// La siguiente sentencia se ejecutará siempre
//if($verdadero) echo 'verdadero';

// La siguiente sentencia no se ejecutará nunca
//if($verdadero === false) echo 'false';

// Del siguiente ejemplo se ejecutará el bloque del else
if($verdadero === false) {
  echo 'nunca entra aquí';
  // Recordando que un bloque se delimita por llaves «{}»
}else{
  //echo 'entra en el else';
  // Cambiar el valor de la expresión
  $verdadero = false;
}

// A continuación se evalúan ambas expresiones,
if($verdadero) {
  // nunca entra aquí
}
else if($verdadero === 6) {
  // tampoco entra aquí
}

//? -----------------------
//? CONDICIÓN CASO SWITCH
//? -----------------------
//$verdadero = false;
switch ($verdadero) {
    case false:
      echo 'el valor de $verdadero es false\n';
      $verdaredo = true;
      echo 'ahora el valor de $verdadero es true';
      break;
    case 6:
      echo 'nunca entra aquí';
      break;
    case 'nunca':
      return; // Nunca entra aquí tampoco
    default:
      echo 'por defecto tampoco entrará aquí';
}