// parametros
let resultado = "";

function contar1al5(paContar, paNumero) {
    paContar = paContar;
    paNumero = paNumero;

    if (paContar == 1 && paNumero == 5) {
        while (paContar <= paNumero) {
            resultado += paContar + " ";
            paContar++;
        }
        return resultado;
    } else {
        return "No se puede realizar el ejercicio";
    }
}


//expresion

const contar1al5Exp = function(paContar, paNumero) {
    paContar = paContar;
    paNumero = paNumero;

    
    resultado = "";

    if (paContar == 1 && paNumero == 5) {
        while (paContar <= paNumero) {
            resultado += paContar + " ";
            paContar++;
        }
        return resultado;
    } else {
        return "No se puede realizar el ejercicio";
    }
};