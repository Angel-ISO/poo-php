<?php

$productos=[
    [
        'nombre'=>'tablet',
        'precio'=>200,
        'disponible'=> true
    ],
    [
        'nombre'=>'smartphone',
        'precio'=>300,
        'disponible'=> true
    ],
    [
        'nombre'=>'monitor',
        'precio'=>400,
        'disponible'=> false
    ],

]
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <h1>Productos</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Disponible</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($productos as $producto) {
                echo '<tr>';
                echo '<td>'. $producto['nombre']. '</td>';
                echo '<td>'. $producto['precio']. '</td>';
                echo '<td>'. $producto['disponible']. '</td>';
                echo '</tr>';
            }
           ?>
        </tbody>
    
</body>
</html>