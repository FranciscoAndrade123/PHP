//parametros

let  mostrar 
function saberEdad(paEdad){
    paEdad = paEdad
    let mayorEdad = 17
    if(paEdad>mayorEdad){
         mostrar = "Eres mayor de edad en parametros"
    }else{
        mostrar = "Eres menor de edad parametros "
    }
     return(mostrar)

}

//expresion
const saberEdadExpre = function(paEdad){
    paEdad = paEdad
    let mayorEdad = 17
    if(paEdad>mayorEdad){
         mostrar = "Eres mayor de edad en expresion "
    }else{
        mostrar = "Eres menor de edad expresion "
    }
     return(mostrar)
}