// Parámetros
let pares = 0;
let impares = 0;
let mostrar = "";
let resultado;

function tablaDel1al5(paTabla,paLimite) {
    paTabla = paTabla;
    paLimite=paLimite
    while (paTabla <= paLimite) {
        let multiplicador = 1;
        while (multiplicador <= 5) {
            resultado = paTabla * multiplicador;

            if (resultado % 2 === 0) {
                mostrar += paTabla + "X" + multiplicador + "=" + resultado + " (Buzz en parametros)\n";
                pares++;
            } else {
                mostrar += paTabla + "X" + multiplicador + "=" + resultado + " (Bass en parametros)\n";
                impares++;
            }

            multiplicador++;
        }

        paTabla++; 
    }

    return mostrar + "Cantidad de pares: " + pares + "\n" + "Cantidad de impares:" + impares;
}


//expresion

const tablaDel1al5Exp= function(paTabla, paLimite) {
    let mostrar = "";
    let pares = 0;
    let impares = 0;
    
    while (paTabla <= paLimite) {
        let multiplicador = 1;
        while (multiplicador <= 5) {
            let resultado = paTabla * multiplicador;

            if (resultado % 2 === 0) {
                mostrar += paTabla + "X" + multiplicador + "=" + resultado + " (Buzz en expresion)\n";
                pares++;
            } else {
                mostrar += paTabla + "X" + multiplicador + "=" + resultado + " (Bass en expresion)\n";
                impares++;
            }

            multiplicador++;
        }

        paTabla++; 
    }

    return mostrar + "Cantidad de pares: " + pares + "\n" + "Cantidad de impares: " + impares;
}


