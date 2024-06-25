//parametros
let resultado
let mostrar

function tablaDel9For(paNumero,paMulti){
    paNumero = paNumero;
    paMulti = paMulti;
    mostrar = "";

    if(paNumero === 1 && paMulti === 9){
        for(let numero = paNumero ; numero <= 5 ; numero++){
            resultado = numero * paMulti 
            if(resultado%2 === 0){
                mostrar += numero + "X" + paMulti + "=" + resultado + " Es par en parametros For  \n" 
            }else{
                mostrar += numero + "X" + paMulti + "=" + resultado + " Es impar en parametros For \n"
            }
        }
    }else{
        mostrar = "Error"
    }
    return(mostrar)
}

//exrpesion

const  tablaDel9ForExp = function(paNumero,paMulti){
    paNumero = paNumero;
    paMulti = paMulti;
    mostrar = "";

    if(paNumero === 1 && paMulti === 9){
        for(let numero = paNumero ; numero <= 5 ; numero++){
            resultado = numero * paMulti 
            if(resultado%2 === 0){
                mostrar += numero + "X" + paMulti + "=" + resultado + " Es par en expresion For  \n" 
            }else{
                mostrar += numero + "X" + paMulti + "=" + resultado + " Es impar en expresion For \n"
            }
        }
    }else{
        mostrar = "Error"
    }
    return(mostrar)
}