<?php

//--------***VARIABLES GLOBALES***--------- //
$personas = []; // el array principal
$nomina = []; // el array para almacenar la nomina 
$salarioMin = 1600000;
$numeroRegistros;
$mostrar;
$mostrarRetencion;

//--------***FUNCIONES***--------- //

// Función para calcular salario
function funcionSalario($paValorDia, $paDias) {
    return $paDias * $paValorDia;
}

// Función que calcula el subsidio de transporte
function funcionSubtrans($paSalario, $salarioMin) {
    global $mostrar;
    if ($paSalario < $salarioMin * 2) {
        $mostrar = "Si se aplica el subsidio de transporte";
        return 120000;
    } else {
        $mostrar = "No se aplica el subsidio de transporte";
        return 0;
    }
}

// Función que calcula la salud
function funcionSalud($paSalario) {
    return $paSalario * 0.12;
}

// Función que calcula la pension
function funcionPension($paSalario) {
    return $paSalario * 0.16;
}

// Función que calcula el arl
function funcionArl($paSalario) {
    return $paSalario * 0.052;
}

// Función que calcula el deducible
function funcionDeducible($paSalario) {
    return funcionSalud($paSalario) + funcionPension($paSalario) + funcionArl($paSalario);
}

// Función que calcula la retencion del salario
function funcionRetener($paSalario, $salarioMin) {
    global $mostrarRetencion;
    if ($paSalario > $salarioMin * 12) {
        $mostrarRetencion = "Retención del 0.08";
        return $paSalario * 0.08;
    } elseif ($paSalario > $salarioMin * 8) {
        $mostrarRetencion = "Retención del 0.04";
        return $paSalario * 0.04;
    } elseif ($paSalario > $salarioMin * 6) {
       
        return $paSalario * 0.02;
    } else {
        $mostrarRetencion = "No aplica retención";
        return 0;
    }
}

// Función que calcula el total
function funcionTotal($paSalario, $paSubTrans, $paRetencion) {
    return $paSalario + $paSubTrans - funcionDeducible($paSalario) - $paRetencion;
}

//--------***REGISTRO DE PERSONAS***--------- //
$personas = [
    ['id' => 1079175835, 'nombre' => 'Sarita', 'apellido' => 'Medina', 'cargo' => 'Gerente', 'valorDia' => 70000, 'diasTrabajado' => 30],
    ['id' => 1897563421, 'nombre' => 'Karol', 'apellido' => 'Bermeo', 'cargo' => 'Empleado', 'valorDia' => 70000, 'diasTrabajado' => 40],
    ['id' => 1335098765, 'nombre' => 'Manuel', 'apellido' => 'Chala', 'cargo' => 'Contador', 'valorDia' => 30000, 'diasTrabajado' => 50],
    ['id' => 1240975434, 'nombre' => 'Daniel', 'apellido' => 'Andrade', 'cargo' => 'Instructor', 'valorDia' => 40000, 'diasTrabajado' => 60],
    ['id' => 1234567865, 'nombre' => 'Carlos', 'apellido' => 'Ceron', 'cargo' => 'Doctor', 'valorDia' => 10000, 'diasTrabajado' => 70],
    ['id' => 1234567886, 'nombre' => 'Natalia', 'apellido' => 'Cepeda', 'cargo' => 'Bombero', 'valorDia' => 50000, 'diasTrabajado' => 80],
    ['id' => 1232456787, 'nombre' => 'Samuel', 'apellido' => 'Sanchez', 'cargo' => 'Obrero', 'valorDia' => 120000, 'diasTrabajado' => 90],
    ['id' => 1233235648, 'nombre' => 'Heilin', 'apellido' => 'Sofia', 'cargo' => 'Soldador', 'valorDia' => 330000, 'diasTrabajado' => 10],
    ['id' => 1542356759, 'nombre' => 'Karen', 'apellido' => 'Rodriguez', 'cargo' => 'Profesor', 'valorDia' => 127000, 'diasTrabajado' => 20],
    ['id' => 1234865320, 'nombre' => 'Sofia', 'apellido' => 'Moreno', 'cargo' => 'Empleado', 'valorDia' => 3470000, 'diasTrabajado' => 45]
];

// Crear el numero de objetos del registro
$numeroRegistros = count($personas);

for ($iteracion = 0; $iteracion < $numeroRegistros; $iteracion++) {
    $trabajador = $personas[$iteracion]; // permite recorrer todo el registro
    $salarioCalculado = funcionSalario($trabajador['valorDia'], $trabajador['diasTrabajado']); // calcula el salario de la persona
    $subTransCalculada = funcionSubtrans($salarioCalculado, $salarioMin);
    $retencionCalculada = funcionRetener($salarioCalculado, $salarioMin);
    $saludCalculada = funcionSalud($salarioCalculado);
    $pensionCalculada = funcionPension($salarioCalculado);
    $arlCalculada = funcionArl($salarioCalculado);
    $deducibleCalculada = funcionDeducible($salarioCalculado);
    $totalCalculada = funcionTotal($salarioCalculado, $subTransCalculada, $retencionCalculada);

    $nomina[] = [
        'id' => $trabajador['id'],
        'nombre' => $trabajador['nombre'],
        'apellido' => $trabajador['apellido'],
        'cargo' => $trabajador['cargo'],
        'salario' => $salarioCalculado,
        'subTransporte' => $subTransCalculada,
        'retencion' => $retencionCalculada,
        'salud' => $saludCalculada,
        'pension' => $pensionCalculada,
        'arl' => $arlCalculada,
        'deducible' => $deducibleCalculada,
        'total' => $totalCalculada,
    ];

    echo "ID: " . $trabajador['id'] . "<br>" .
        "Nombre: " . $trabajador['nombre'] . "<br>" .
        "Apellido: " . $trabajador['apellido'] . "<br>" .
        "Cargo: " . $trabajador['cargo'] . "<br>" .
        "Salario: " . $salarioCalculado . "<br>" .
        "Subsidio de transporte: " . $subTransCalculada . "<br>" .
        "Retención: " . $retencionCalculada . "<br>" .
        "Salud: " . $saludCalculada . "<br>" .
        "Pensión: " . $pensionCalculada . "<br>" .
        "ARL: " . $arlCalculada . "<br>" .
        "Deducible: " . $deducibleCalculada . "<br>" .
        "Total: " . $totalCalculada . "<br><br>";
}

?>
