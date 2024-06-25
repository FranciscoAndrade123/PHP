<?php

 function salarioPersonaYtransporte($paSalario){
    $paSalario=$paSalario;
     $salarioMin = 1400000;
     $subTrans=162000;
     
    if($paSalario>$salarioMin*2){
        $paSalario=$paSalario + $subTrans ;
    }else{
        $paSalario=$paSalario+ 0  ;
    }
    return $paSalario;
}

function salud($paSalario){
     $salario = salarioPersonaYtransporte($paSalario); 
     $salud = $salario * 0.12;
    return $salud;
}

function pension($paSalario){
     $salario = salarioPersonaYtransporte($paSalario); 
     $pension = $salario * 0.16;
    return $pension;
}

function arl($paSalario){
     $salario = salarioPersonaYtransporte($paSalario); 
     $arl = $salario * 0.052;
    return $arl;
}

function deducible($paSalario){
     $deducible =  salud($paSalario) + pension($paSalario) + arl($paSalario);
    return $deducible;
}

function retencion($paSalario){
    $paSalario=$paSalario;
     $retencion =  salarioPersonaYtransporte($paSalario);
     $salarioMin = 1400000;
    if($retencion>$salarioMin*4){
        $retencion=$retencion * 0.04 . " Con retención";
        return $retencion;
    }else{
        $retencion="Sin retención";
        return $retencion;
    }
}

function totalPagar($paSalario){
     $salario = salarioPersonaYtransporte($paSalario); 
     $deducciones = deducible($paSalario);
     $total = $salario - $deducciones;
    return $total;
}




?>