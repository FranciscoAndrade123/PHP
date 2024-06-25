//parametros
let resultado
let mostrar

function tabla5For(paNumero,paMulti){
    paNumero=paNumero
    paMulti=paMulti
    mostrar = ""

    if(paNumero === 1 && paMulti ===5 ){
        for(let numero = paNumero; numero <= paMulti ; numero++){
            resultado = numero * paMulti;
            mostrar += numero + "X" + paMulti + "=" + resultado + " En parametros\n"
        }
    }else{
        mostrar = "error"
    }
    return (mostrar)
}

//expresion

const tabla5ForExp = function(paNumero,paMulti){
    paNumero=paNumero
    paMulti=paMulti
    mostrar = ""

    if(paNumero === 1 && paMulti ===5 ){
        for(let numero = paNumero; numero <= paMulti ; numero++){
            resultado = numero * paMulti;
            mostrar += numero + "X" + paMulti + "=" + resultado + " En expresion\n"
        }
    }else{
        mostrar = "error"
    }
    return (mostrar)
}