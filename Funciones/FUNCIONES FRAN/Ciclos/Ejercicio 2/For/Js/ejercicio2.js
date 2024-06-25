// Parámetros
let resultado = "";
function pareEimparFor(paNumero, paContar){
    paNumero = paNumero;
    paContar = paContar;
    
    if(paNumero === 1 && paContar === 5){
        for(let numero = paNumero ; numero <= paContar ; numero++){
            if(numero%2 === 0){
                resultado +=  numero + " Es par en parametros For " + "\n";
            }else{
                resultado +=  numero + " Es impar en parametros For " + "\n";
            }
        }
        return(resultado);
    }else{
        return "No se puede realizar el ejercicio";
    }
}

//expresion

const pareEimparForExp= function(paNumero, paContar){  
    paNumero = paNumero;
    paContar = paContar;
    resultado =  ""

    if(paNumero === 1 && paContar === 5){
        for(let numero = paNumero ; numero <= paContar ; numero++){
            if(numero%2 === 0){
                resultado +=  numero + " Es par en expresion  For " + "\n";
            }else{
                resultado +=  numero + " Es impar en expresion For " + "\n";
            }
        }
        return(resultado);
    }else{
        return "No se puede realizar el ejercicio";
    }

}