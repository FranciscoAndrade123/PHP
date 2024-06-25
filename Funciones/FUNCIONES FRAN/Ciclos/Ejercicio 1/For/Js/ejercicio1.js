// Parámetros
let resultado = "";

function contar1al5For(paNumero, paContar) {
    paNumero=paNumero;
    paContar=paContar;


    if (paNumero === 1  && paContar === 5) {
        for (let i = paNumero; i <= paContar; i++) {
            resultado += i + " ";
        }
        return resultado;
    } else {
        return "No se puede realizar el ejercicio";
    }
}

//expresion
const  contar1al5ForExp= function(paNumero, paContar) {
    paNumero=paNumero;
    paContar=paContar;

    resultado = ""
    
    if (paNumero === 1  && paContar === 5) {

        for (let i = paNumero; i <= paContar; i++) {
            resultado += i + " ";
        }
        return resultado;
    } else {
        return "No se puede realizar el ejercicio";
    }
}

    
