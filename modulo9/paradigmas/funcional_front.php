<?php include "./funcional_back.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paradigma Funcional</title>
</head>
<body>
<h1> Paradigma Funcional</h1>
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
        <?php $list = (!empty($_GET['search'])) ? getList($_GET['search']) : getList() ; ?>
        <?php foreach ($list as  $auto) : ?>
            <tr>
                <td><?php echo $auto['marca']; ?></td>
                <td><?php echo $auto['modelo']; ?></td>
            </tr> 
        <?php endforeach ?>
    </tbody>
</table>
</body>
</html>