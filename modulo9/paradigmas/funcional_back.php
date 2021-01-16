<?php
/**
 * @author Alberto Urbaez (Beto) <albertourbaez20@gmail.com>
 * @version 1.0.0
 */

function getAutos()
{
    return [
        [
            "marca"  => "Audi",
            "modelo" => "A5",
            "slug"   => "audi"
        ],
        [
            "marca"  => "Audi",
            "modelo" => "A3",
            "slug"   => "audi"
        ],
        [
            "marca"  => "Audi",
            "modelo" => "A4",
            "slug"   => "audi"
        ],
        [
            "marca"  => "Audi",
            "modelo" => "S3",
            "slug"   => "audi"
        ],
        [
            "marca"  => "Audi",
            "modelo" => "S4",
            "slug"   => "audi"
        ],
        [
            "marca"  => "Audi",
            "modelo" => "TT",
            "slug"   => "audi"
        ],
        [
            "marca"  => "BMW",
            "modelo" => "M235",
            "slug"   => "bmw"
        ],
        [
            "marca"  => "Chevrolet",
            "modelo" => "Rodeo",
            "slug"   => "chevrolet"
        ],
        [
            "marca"  => "Chevrolet",
            "modelo" => "Grand Blazer",
            "slug"   => "chevrolet"
        ],
        [
            "marca"  => "Chevrolet",
            "modelo" => "N200",
            "slug"   => "chevrolet"
        ],
        [
            "marca"  => "Dodge",
            "modelo" => "Dakota",
            "slug"   => "dodge"
        ],
        [
            "marca"  => "Dodge",
            "modelo" => "300",
            "slug"   => "dodge"
        ],
        [
            "marca"  => "Dodge",
            "modelo" => "Caravan",
            "slug"   => "dodge"
        ],
        [
            "marca"  => "Ford",
            "modelo" => "Fusion",
            "slug"   => "ford"
        ],
        [
            "marca"  => "Ford",
            "modelo" => "F350",
            "slug"   => "ford"
        ],
        [
            "marca"  => "Ford",
            "modelo" => "Ranger",
            "slug"   => "ford"
        ]
    ];
}

function getList($search = "")
{
    $autos = getAutos();
    if (!isset($search) || !empty($search) || $search != "") {
        foreach ($autos as $key => $auto) {
            $pos = strpos($auto['slug'], $search);
            if ($pos === false) {
                unset($autos["$key"]);
            }
        }
    }
    return $autos;
}
