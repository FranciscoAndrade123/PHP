<?php
$tienda = [
    [
        'producto' => 'Arroz',
        'tipoProducto' => 'granos',
        'tipoUnidad' => 'granos',
        'cantidad' => '500',
        'precio' => '2450',
    ],
    [
        'producto' => 'papa',
        'tipoProducto' => 'fruver',
        'tipoUnidad' => 'granos',
        'cantidad' => '500',
        'precio' => '1000',
    ],
    [
        'producto' => 'mora',
        'tipoProducto' => 'fruver',
        'tipoUnidad' => 'gramos',
        'cantidad' => '500',
        'precio' => '1500',
    ],
    [
        'producto' => 'trucha',
        'tipoProducto' => 'carnes',
        'tipoUnidad' => 'gramos',
        'cantidad' => '1000',
        'precio' => '9000',
    ],
    [
        'producto' => 'pollo entero',
        'tipoProducto' => 'carnes',
        'tipoUnidad' => 'gramos',
        'cantidad' => '500',
        'precio' => '4500',
    ]
];

$nuevoProducto = [
    'producto' => 'Res',
    'tipoProducto' => 'carnes',
    'tipoUnidad' => 'gramos',
    'cantidad' => '1000',
    'precio' => '7500',
];
       
        $tienda[]= $nuevoProducto;
        $numeroRegistro=count($tienda);
        echo "matriz tienda:<br>";
        foreach ($tienda as $producto) {
            echo implode(", ",$producto)."<br>";
        };
        echo "<br>";
        $listaBusqueda=[];
        for($iteracion=0;$iteracion<$numeroRegistro;$iteracion++){
            if($tienda[$iteracion]['tipoProducto']=='fruver'){
                $listaBusqueda[]= $tienda[$iteracion];
            }else{
                echo'';
            }
        };
        echo "Busqueda por tipo de producto fruver: <br>";
    foreach ($listaBusqueda as $producto) {
        echo implode(", ",$producto)."<br>";
    };

?>