<?php

/**
 * @author Alberto Urbaez (Beto) <albertourbaez20@gmail.com>
 * @version 1.0.0
 * ============================================================================
 *  ______                          _                              
 * |  ____|                        (_)                             
 * | |__     _   _   _ __     ___   _    ___    _ __     ___   ___ 
 * |  __|   | | | | | '_ \   / __| | |  / _ \  | '_ \   / _ \ / __|
 * | |      | |_| | | | | | | (__  | | | (_) | | | | | |  __/ \__ \
 * |_|       \__,_| |_| |_|  \___| |_|  \___/  |_| |_|  \___| |___/
 *                                                                 
 * ============================================================================
 */

// ===========================
// funciones anonimas
// ===========================
//(function ($param){ echo "$param";})('hola');

//( function($param) { echo "logica a realizar";} ) ( 'parametro' );
#ejemplo
/*
$var1 = [
    "atr1" => 12,
    "atr2" => (function($param){ return "$param";})('hola'),
    "atr3" => 12,
];

//echo $var1;
var_dump($var1);
*/

// ===========================
// funciones asignadas a variables
// ===========================
/*
$funtion = function($param){
    echo "$param";
};
*/
//$funtion('test');

// ===========================
// funciones como parametros
// ===========================
/*
function f2($function, $parameter)
{
    $function($parameter);
}

$f1 = function($param){ echo $param; };
f2($f1,'beto');
*/
// ===========================
// funciones que retornan funciones
// ===========================
/*
function f()
{
    return function($param){ echo "$param";};
};

$a = f();
$a('hola mundo');
*/

/*
// ===========================
// function basica
// ===========================
function prueba($v1, $v2)
{
    $suma = ($v1 + $v2);
    return $suma;
}

$print = prueba(34,30);
var_dump($print);

var_dump(prueba(4,3));
*/


// ===========================
// function con parametros y argumentos
// ===========================
/*
function prueba(string $v1, int $v2)
{
    switch ($v2) {
        case 1:
            $var = "ingreso en el 1 - $v1";
            break;
        case 2:
            $var = "ingreso en el 2 - $v1";
            break;
        case 3:
            $var = "ingreso en el 3 - $v1";
            break;
        case 4:
            $var = "ingreso en el 4 - $v1";
            break;
        default:
            $var = "no cumple la condicion";
            break;
    }
    return $var;
}
$print = prueba('hola mundo', 7);
var_dump($print);
*/