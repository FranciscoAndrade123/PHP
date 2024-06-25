//parametros
function salarioPersonaYtransporte(paSalario){
    paSalario=paSalario
    let salarioMin = 1400000
    let subTrans=162000
    if(paSalario>salarioMin*2){
        paSalario=paSalario + subTrans + " Con subsidio de transporte"
    }else{
        paSalario=paSalario+ 0 + " sin subsidio de transporte"
    }
    return paSalario
}

function salud(paSalario){
    let salario = parseFloat(salarioPersonaYtransporte(paSalario)); 
    let salud = salario * 0.12;
    return salud;
}

function pension(paSalario){
    let salario = parseFloat(salarioPersonaYtransporte(paSalario)); 
    let pension = salario * 0.16;
    return pension;
}

function arl(paSalario){
    let salario = parseFloat(salarioPersonaYtransporte(paSalario)); 
    let arl = salario * 0.052;
    return arl;
}

function deducible(paSalario){
    let deducible =  salud(paSalario) + pension(paSalario) + arl(paSalario)
    return deducible
}

function retencion(paSalario){
    paSalario=paSalario
    let retencion =  parseFloat(salarioPersonaYtransporte(paSalario))
    let salarioMin = 1400000
    if(retencion>salarioMin*4){
        retencion=retencion * 0.04 + " Con retención"
        return retencion
    }else{
        retencion="Sin retención"
        return retencion
    }
}

function totalPagar(paSalario){
    let salario = parseFloat(salarioPersonaYtransporte(paSalario)); 
    let deducciones = deducible(paSalario);
    let total = salario - deducciones;
    return total;
}






//expresion
const  salarioPersonaYtransporteExp = function(paSalario){
    paSalario=paSalario
    let salarioMin = 1400000
    let subTrans=162000
    if(paSalario>salarioMin*2){
        paSalario=paSalario + subTrans + " Con subsidio de transporte"
    }else{
        paSalario=paSalario+ 0 + " sin subsidio de transporte"
    }
    return paSalario
}

const  saludExp = function(paSalario){
    let salario = parseFloat(salarioPersonaYtransporte(paSalario)); 
    let salud = salario * 0.12;
    return salud;
}

const  pensionExp = function(paSalario){
    let salario = parseFloat(salarioPersonaYtransporte(paSalario)); 
    let pension = salario * 0.16;
    return pension;
}

const   arlExp =function(paSalario){
    let salario = parseFloat(salarioPersonaYtransporte(paSalario)); 
    let arl = salario * 0.052;
    return arl;
}

const   deducibleExp = function(paSalario){
    let deducible =  salud(paSalario) + pension(paSalario) + arl(paSalario)
    return deducible
}

const   retencionExp = function(paSalario){
    paSalario=paSalario
    let retencion =  parseFloat(salarioPersonaYtransporte(paSalario))
    let salarioMin = 1400000
    if(retencion>salarioMin*4){
        retencion=retencion * 0.04 + " Con retención"
        return retencion
    }else{
        retencion="Sin retención"
        return retencion
    }
}

const   totalPagarExp = function(paSalario){
    let salario = parseFloat(salarioPersonaYtransporte(paSalario)); 
    let deducciones = deducible(paSalario);
    let total = salario - deducciones;
    return total;
}

