// Parámetros
let resultado = "";

function paresImpares(paNumero, paContar) {
    paNumero = paNumero;
    paContar = paContar;

    if (paNumero == 1 && paContar == 5) {
        while (paNumero <= paContar) {
            if (paNumero % 2 == 0) {
                resultado += paNumero + " es par en parametros " + "\n";
            } else {
                resultado += paNumero + " es impar en parametros " + "\n";
            }
            paNumero++;
        }
        return resultado;
    } else {
        return "No se puede realizar el ejercicio";
    }
}

//expresion

const  paresImparesExp = function(paNumero, paContar){
    paNumero = paNumero;
    paContar = paContar;
    resultado = "";

    if (paNumero == 1 && paContar == 5) {
        while (paNumero <= paContar) {
            if (paNumero % 2 == 0) {
                resultado += paNumero + " es par en expresion " + "\n";
            } else {
                resultado += paNumero + " es impar en expresion " + "\n";
            }
            paNumero++;
        }
        return resultado;
    } else {
        return "No se puede realizar el ejercicio";
    }

}