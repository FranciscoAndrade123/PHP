<?php
function salario($dias,$valordia) {
    $diask=$dias;
    $vdias=$valordia;
    $total_salario= $diask*$vdias;
    return $total_salario;

};
function arl($dias,$valordia) {
    $pago_arl = salario($dias,$valordia)*0.052;
    return $pago_arl;
};
function subtrans($dias,$valordia) {
    $salarioMin= 1600000;
    $salariotrans=salario($dias,$valordia);
    $subtransporte=0;
    if ($salariotrans<=2*$salarioMin) {
        $subtransporte=114000;
    } else {
        $subtransporte=0;
    }
    return $subtransporte;
};
function salud($dias,$valordia) {
    $pago_salud=salario($dias,$valordia)*0.12;
    return $pago_salud;
};
function pension($dias,$valordia) {
    $pago_pension=salario($dias,$valordia)*0.16;
    return $pago_pension;   
};
function pagototal($dias,$valordia) {
    $pago_total = salario($dias,$valordia)+subtrans($dias,$valordia);
    return $pago_total;
};

function retencion($dias,$valordia) {
    if (salario($dias,$valordia)>7800000) {
        $retencion_total=0.02;
    }if (salario($dias,$valordia)>10400000) {
        $retencion_total=0.04;
    }if (salario($dias,$valordia)>15600000) {
    $retencion_total=0.08;
    }else{
        $retencion_total="No tiene retencion";
    }
    return $retencion_total;
};

$nomina=[[

    'id'=>'1',
    'nombres'=>'keiner andres',
    'apellidos'=>'cano narvaez',
    'cargo'=>'programador',
    'valorDia'=> 100000,'diasTrabajados'=>30,'salario'=>0,
    'subtransporte'=>0,'salud'=>0,'pension'=>0,'arl'=>0,'retencion'=>0,'total_pagar'=>0,
],
[
    'id'=>'2',
    'nombres'=>'alfredo olimpica',
    'apellidos'=>'santa rosa',
    'cargo'=>'coserje',
    'valorDia'=> 50000,'diasTrabajados'=>30,'salario'=>0,
    'subtransporte'=>0,'salud'=>0,'pension'=>0,'arl'=>0,'retencion'=>0,'total_pagar'=>0,
],
[
    'id'=>'3',
    'nombres'=>'jhampier',
    'apellidos'=>'santos ortiz',
    'cargo'=>'programador',
    'valorDia'=> 100000,'diasTrabajados'=>30,'salario'=>0,
    'subtransporte'=>0,'salud'=>0,'pension'=>0,'arl'=>0,'retencion'=>0,'total_pagar'=>0,
],
[
    'id'=>'4',
    'nombres'=>'monica natalia',
    'apellidos'=>'lozada castañeda',
    'cargo'=>'conserje',
    'valorDia'=> 500000,'diasTrabajados'=>30,'salario'=>0,
    'subtransporte'=>0,'salud'=>0,'pension'=>0,'arl'=>0,'retencion'=>0,'total_pagar'=>0,
],
[
    'id'=>'5',
    'nombres'=>'carlos francisco',
    'apellidos'=>'andrade bermeo',
    'cargo'=>'hornero',
    'valorDia'=> 43333,'diasTrabajados'=>30,'salario'=>0,
    'subtransporte'=>0,'salud'=>0,'pension'=>0,'arl'=>0,'retencion'=>0,'total_pagar'=>0,
],
[
    'id'=>'6',
    'nombres'=>'nestor david',
    'apellidos'=>'lozano castañeda',
    'cargo'=>'programador',
    'valorDia'=> 43333,'diasTrabajados'=>30,'salario'=>0,
    'subtransporte'=>0,'salud'=>0,'pension'=>0,'arl'=>0,'retencion'=>0,'total_pagar'=>0,
],
[
    'id'=>'7',
    'nombres'=>'angel',
    'apellidos'=>'farid',
    'cargo'=>'hornero',
    'valorDia'=> 43333,'diasTrabajados'=>30,'salario'=>0,
    'subtransporte'=>0,'salud'=>0,'pension'=>0,'arl'=>0,'retencion'=>0,'total_pagar'=>0,
],
[
    'id'=>'8',
    'nombres'=>'jose santiago',
    'apellidos'=>'ballen',
    'cargo'=>'repartidor',
    'valorDia'=> 43333,'diasTrabajados'=>30,'salario'=>0,
    'subtransporte'=>0,'salud'=>0,'pension'=>0,'arl'=>0,'retencion'=>0,'total_pagar'=>0,
],
[
    'id'=>'9',
    'nombres'=>'zully vanesa',
    'apellidos'=>'camacho',
    'cargo'=>'enfermera',
    'valorDia'=> 43333,'diasTrabajados'=>30,'salario'=>0,
    'subtransporte'=>0,'salud'=>0,'pension'=>0,'arl'=>0,'retencion'=>0,'total_pagar'=>0,
],
[
    'id'=>'10',
    'nombres'=>'sandra milena',
    'apellidos'=>'navaez rodriguez',
    'cargo'=>'docente',
    'valorDia'=> 43333,'diasTrabajados'=>30,'salario'=>0,
    'subtransporte'=>0,'salud'=>0,'pension'=>0,'arl'=>0,'retencion'=>0,'total_pagar'=>0,
],
];
$cantidad=count($nomina);
for($iteracion=0;$iteracion<$cantidad;$iteracion++){
    $valordia=$nomina[$iteracion]['valorDia'];
    $diastrabajados=$nomina[$iteracion]['diasTrabajados'];
    $nomina[$iteracion]['salario']=salario($diastrabajados,$valordia);
    $nomina[$iteracion]['subtransporte']=subtrans($diastrabajados,$valordia);
    $nomina[$iteracion]['salud']=salud($diastrabajados,$valordia);
    $nomina[$iteracion]['pension']=pension($diastrabajados,$valordia);
    $nomina[$iteracion]['arl']=arl($diastrabajados,$valordia);
    $nomina[$iteracion]['total_pagar']=pagototal($diastrabajados,$valordia);
    $nomina[$iteracion]['retencion']=retencion($diastrabajados,$valordia);
};
foreach ($nomina as $valor) {
    echo implode(", ",$valor)."<br><br>";
}
?>