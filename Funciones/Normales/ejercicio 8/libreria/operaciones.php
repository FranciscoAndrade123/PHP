<?php
function sueldoPersona($paDias,$paValorDia){
    $paDias = $paDias;
    $paValorDia = $paValorDia;
    $sueldoPersona =  $paDias * $paValorDia;
    return $sueldoPersona;
}

function saludPersona($paDias,$paValorDia){
    $paDias = $paDias;
    $paValorDia = $paValorDia;
    $sueldo = sueldoPersona($paDias,$paValorDia) ;
    $salud =  $sueldo * 0.12;
    return  $salud;
}

function  pensionPersona( $paDias, $paValorDia){
    $paDias =  $paDias;
    $paValorDia =  $paValorDia;
    $sueldo = sueldoPersona( $paDias, $paValorDia); 
    $pension =  $sueldo * 0.16;
    return  $pension;
}

function arlPersona( $paDias, $paValorDia){
    $paDias =  $paDias;
    $paValorDia =  $paValorDia;
      $sueldo = sueldoPersona( $paDias, $paValorDia) ;
      $arl =  $sueldo * 0.052;
    return  $arl;
}

function deduciplePersona( $paDias, $paValorDia){
    $paDias =  $paDias;
    $paValorDia =  $paValorDia;
      $deducible = saludPersona( $paDias, $paValorDia) + pensionPersona( $paDias, $paValorDia) +  arlPersona( $paDias, $paValorDia);
    return  $deducible;
}

    function totalSueldo( $paDias, $paValorDia){
        $paDias =  $paDias;
        $paValorDia =  $paValorDia;
          $total = sueldoPersona( $paDias, $paValorDia) - deduciplePersona( $paDias, $paValorDia);
        return  $total;
    }
 
?>