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
    [
        'nombre'=>'tv',
        'precio'=>500,
        'disponible'=> true
    ]

]



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
    <h1>Productos</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Disponible</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($productos as $producto):?>
           <tr>
                  <td> <?php echo $producto['nombre']; ?> </td>
                  <td> <?php echo $producto['precio']; ?> </td>
                  <td> <?php echo $producto['disponible']? 'Disponible': 'no disponible'; ?> </td>
            </tr>
            <?php endforeach;?>
           
        </tbody>
    
</body>
</html>


