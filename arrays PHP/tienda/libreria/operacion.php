<?php

$tienda = [];
$nuevoProducto = [];
$listaBusquedad = [];


$tienda = [
    ['producto' => 'Arroz', 'tipoProducto' => 'granos', 'tipoUnidad' => 'gramos', 'cantidad' => 1000, 'precio' => 2450], 
    ['producto' => 'Papa', 'tipoProducto' => 'fruver', 'tipoUnidad' => 'gramos', 'cantidad' => 500, 'precio' => 1000],
    ['producto' => 'Mora', 'tipoProducto' => 'fruver', 'tipoUnidad' => 'gramos', 'cantidad' => 500, 'precio' => 1500],
    ['producto' => 'Trucha', 'tipoProducto' => 'carnes', 'tipoUnidad' => 'gramos', 'cantidad' => 1000, 'precio' => 9000],
    ['producto' => 'Pollo Entero', 'tipoProducto' => 'carnes', 'tipoUnidad' => 'gramos', 'cantidad' => 1000, 'precio' => 4500],
];

// Nuevo producto a añadir
$nuevoProducto = ['producto' => 'Res', 'tipoProducto' => 'carnes', 'tipoUnidad' => 'gramos', 'cantidad' => 1000, 'precio' => 7500];
$tienda[] = $nuevoProducto; 


foreach ($tienda as $producto) {
   
    echo "Producto: " . $producto['producto'] . "<br>";
    echo "Tipo de Producto: " . $producto['tipoProducto'] . "<br>";
    echo "Tipo de Unidad: " . $producto['tipoUnidad'] . "<br>";
    echo "Cantidad: " . $producto['cantidad'] . "<br>";
    echo "Precio: " . $producto['precio'] . "<br><br>";
    
  
    if ($producto['tipoProducto'] === 'fruver') {
        $listaBusquedad[] = $producto;
    }
}


echo "Lista de productos 'fruver':<br>";
foreach ($listaBusquedad as $producto) {
    echo "Producto: " . $producto['producto'] . "<br>";
 
}

?>

