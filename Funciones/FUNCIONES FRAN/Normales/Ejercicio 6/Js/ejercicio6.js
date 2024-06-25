// con parametros
function porcentaje1(not1){
    let resul1
    not1 = not1
    resul1 = not1 * 0.3
    return resul1
}

function porcentaje2(not2){
    let resul2
    not2= not2
    resul2 = not2* 0.3
    return resul2
}

function porcentaje3(not3){
    let resul3
    not3 = not3
    resul3 = not3 * 0.4
    return resul3
}

function sumaDePromedio(not1,not2,not3){
    not1=not1
    not2=not2
    not3=not3
    let suma 
    suma =  porcentaje1(not1) + porcentaje2(not2) + porcentaje3(not3)
    return suma
}


// expresion
const  porcentaje1Exp = function(not1){
    let resul1
    not1 = not1
    resul1 = not1 * 0.3
    return resul1
}

const porcentaje2Exp = function(not2){
    let resul2
    not2= not2
    resul2 = not2* 0.3
    return resul2
}


const porcentaje3Exp = function(not3){
    let resul3
    not3 = not3
    resul3 = not3 * 0.4
    return resul3
}


const sumaDePromedioExp = function(not1,not2,not3){
    not1=not1
    not2=not2
    not3=not3
    let suma 
    suma =  porcentaje1Exp(not1) + porcentaje2Exp(not2) + porcentaje3Exp(not3)
    return suma
}

