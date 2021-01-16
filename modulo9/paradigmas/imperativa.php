<?php
$titulo = "Paradigma Imperativa (Espagueti)";
$autos = [
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

if (isset($_REQUEST['search']) || !empty($_REQUEST['search'])) {
    $search = $_REQUEST['search'];
    foreach ($autos as $key => $auto) {
        $pos = strpos($auto['slug'], $search); # verifica si el valor es igual al parametro enviado (true , false)
        if ($pos === false) { # condicion que verifica si la variable es false
            unset($autos[$key]); # remueve el arreglo de la variable principal
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
</head>
<body>
<h1> <?php echo $titulo; ?></h1>
<form method="GET">
    <input type="search" name="search">
    <input type="submit" value="Buscar">
</form>
<table border="1">
    <thead>
        <tr>
            <th>MARCA</th>
            <th>MODELO</th>
        </tr>
    </thead>
    <tbody>
        <?php        
            foreach ($autos as $au) {
                echo "<tr>";
                echo "<td>".$au['marca']."</td>";
                echo "<td>".$au['modelo']."</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
</body>
</html>