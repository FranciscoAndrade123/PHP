//parametros
function nota1(panot){
    panot=panot
    let resultado=panot*0.2
    return resultado
}
function nota2(panot){
    panot=panot
    let resultado=panot*0.35
    return resultado
}
function nota3(panot){
    panot=panot
    let resultado=panot*0.45
    return resultado
}

function total(panot1, panot2, panot3) {
    let resultado1 = nota1(panot1);
    let resultado2 = nota2(panot2);
    let resultado3 = nota3(panot3);
    let total = resultado1 + resultado2 + resultado3;
    let mostrar;

    if (total > 4.5) {
        mostrar = "La nota es superior en parametros";
    } else if (total > 3.5) {
        mostrar = "La nota es buena en parametros";
    } else if (total >= 3.0) {
        mostrar = "La nota es media en parametros";
    } else {
        mostrar = "La nota es mala en parametros";
    }

    return mostrar;
}


//expresion

const nota1Exp = function(panot){
    panot=panot
    let resultado=panot*0.2
    return resultado
}



const nota2Exp = function(panot){
    panot=panot
    let resultado=panot*0.35
    return resultado
}

const nota3Exp = function(panot){
    panot=panot
    let resultado=panot*0.45
    return resultado
}


const totalExp = function(panot1, panot2, panot3){
    let resultado1 = nota1Exp(panot1);
    let resultado2 = nota2Exp(panot2);
    let resultado3 = nota3Exp(panot3);
    let total = resultado1 + resultado2 + resultado3;
    let mostrar;

    if (total > 4.5) {
        mostrar = "La nota es superior en expresión";
    } else if (total > 3.5) {
        mostrar = "La nota es buena en expresión";
    } else if (total >= 3.0) {
        mostrar = "La nota es media en expresión";
    } else {
        mostrar = "La nota es mala en expresión";
    }

    return mostrar;
    
}




