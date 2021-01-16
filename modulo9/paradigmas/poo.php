<?php
/**
 * @author Alberto Urbaez (Beto) <albertourbaez20@gmail.com>
 * @version 1.0.0
 * 
 */
include "./poo_class.php";

$au     = new auto();
$autos = $au->getList();

foreach ($autos as $auto) {
    var_dump($auto);
}