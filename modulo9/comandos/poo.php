<?php
    include "../paradigmas/poo_class.php";
    $au = new auto();
    $search = $au->getList();
    echo "==============EJEMPLO DE POLIMORFISMO MUNDOSE================\n";
    foreach ($search as $ser) {
        echo "{$ser->marca} => {$ser->modelo} \n";
    }