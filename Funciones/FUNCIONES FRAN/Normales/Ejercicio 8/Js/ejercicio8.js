//parametros
function sueldoPersona(paDias,paValorDia){
    paDias = paDias
    paValorDia = paValorDia
    let sueldoPersona =  paDias * paValorDia
    return sueldoPersona
}

function saludPersona(paDias,paValorDia){
    paDias = paDias
    paValorDia = paValorDia
    let sueldo = sueldoPersona(paDias,paValorDia) 
    let salud = sueldo * 0.12
    return salud
}

function  pensionPersona(paDias,paValorDia){
    paDias = paDias
    paValorDia = paValorDia
    let sueldo = sueldoPersona(paDias,paValorDia) 
    let pension = sueldo * 0.16
    return pension
}

function arlPersona(paDias,paValorDia){
    paDias = paDias
    paValorDia = paValorDia
    let sueldo = sueldoPersona(paDias,paValorDia) 
    let arl = sueldo * 0.052
    return arl
}

function deduciplePersona(paDias,paValorDia){
    paDias = paDias
    paValorDia = paValorDia
    let deducible = saludPersona(paDias,paValorDia) + pensionPersona(paDias,paValorDia) +  arlPersona(paDias,paValorDia)
    return deducible
}

function totalSueldo(paDias,paValorDia){
    paDias = paDias
    paValorDia = paValorDia
    let total = sueldoPersona(paDias,paValorDia) - deduciplePersona(paDias,paValorDia)
    return total
}


 //expresion
 const sueldoPersonaExp  = function(paDias,paValorDia){
    paDias = paDias
    paValorDia = paValorDia
    let sueldoPersona =  paDias * paValorDia
    return sueldoPersona
}

 const  saludPersonaExp = function(paDias,paValorDia){
    paDias = paDias
    paValorDia = paValorDia
    let sueldo = sueldoPersonaExp(paDias,paValorDia) 
    let salud = sueldo * 0.12
    return salud
 }

 const   pensionPersonaExp = function(paDias,paValorDia){
    paDias = paDias
    paValorDia = paValorDia
    let sueldo = sueldoPersonaExp(paDias,paValorDia) 
    let pension = sueldo * 0.16
    return pension
 }

 const   arlPersonaExp = function(paDias,paValorDia){
    paDias = paDias
    paValorDia = paValorDia
    let sueldo = sueldoPersonaExp(paDias,paValorDia) 
    let arl = sueldo * 0.052
    return arl
 }

 const   deduciplePersonaExp = function(paDias,paValorDia){
    paDias = paDias
    paValorDia = paValorDia
    let deducible = saludPersonaExp(paDias,paValorDia) + pensionPersonaExp(paDias,paValorDia) +  arlPersonaExp(paDias,paValorDia)
    return deducible
 }

 const  totalSueldoExp = function(paDias,paValorDia){
    paDias = paDias
    paValorDia = paValorDia
    let total = sueldoPersonaExp(paDias,paValorDia) - deduciplePersonaExp(paDias,paValorDia)
    return total
 }
 

