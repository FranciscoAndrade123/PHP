//parametros
let resultado
let mostrar

function tablaDel9(paNumero,paMulti){
    paNumero = paNumero;
    paMulti = paMulti;
    mostrar = "";

    if(paNumero === 1 && paMulti === 9){
        while(paNumero<=5){
            resultado = paNumero * paMulti
            if(resultado%2 === 0){
                mostrar += paNumero + "X" + paMulti + "=" + resultado + " Es par en parametros \n" 
            }else{
                mostrar += paNumero + "X" + paMulti + "=" + resultado + " Es impar en parametros \n"
            }
           paNumero++
        }
    }else{
        mostrar = "Error"
    }
    return(mostrar)
}

//expresion
const  tablaDel9Exp = function(paNumero,paMulti){
    paNumero = paNumero;
    paMulti = paMulti;
    mostrar = "";

    if(paNumero === 1 && paMulti === 9){
        while(paNumero<=5){
            resultado = paNumero * paMulti
            if(resultado%2 === 0){
                mostrar += paNumero + "X" + paMulti + "=" + resultado + " Es par en expresion \n" 
            }else{
                mostrar += paNumero + "X" + paMulti + "=" + resultado + " Es impar en expresion \n"
            }
           paNumero++
        }
    }else{
        mostrar = "Error"
    }
    return(mostrar)
}