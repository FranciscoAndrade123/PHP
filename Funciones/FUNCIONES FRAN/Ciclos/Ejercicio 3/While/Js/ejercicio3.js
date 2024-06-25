// Parámetros
let resultado;
let mostrar;

function tabla5(paNumero, paMultiplicar){
    paNumero = paNumero;
    paMultiplicar = paMultiplicar;
    mostrar = "";

    if(paNumero === 1 && paMultiplicar === 5){
        while(paNumero <= paMultiplicar){
            resultado = paNumero * paMultiplicar;
            mostrar += paNumero + "X" + paMultiplicar + "=" + resultado + " En parametros\n";
            paNumero++;
        }
    } else{
        mostrar = "Error";
    }
    return mostrar;
}
 
//expresion

const tabla5Exp = function(paNumero, paMultiplicar){
    paNumero = paNumero;
    paMultiplicar = paMultiplicar;
    mostrar = "";

    if(paNumero === 1 && paMultiplicar === 5){
        while(paNumero <= paMultiplicar){
            resultado = paNumero * paMultiplicar;
            mostrar += paNumero + "X" + paMultiplicar + "=" + resultado + " En expresion\n";
            paNumero++;
        }
    } else{
        mostrar = "Error";
    }
    return mostrar;
}