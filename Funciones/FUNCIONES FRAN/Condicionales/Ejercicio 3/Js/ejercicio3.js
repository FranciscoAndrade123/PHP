//parametros
let mostrar
function diferenciarNumeros(paNum1,paNum2){
   paNum1=paNum1
   paNum2=paNum2
   mostrar = mostrar
   if(paNum1==paNum2){
      mostrar = "Los dos números son iguales en parametros"
   }else{
     if(paNum1>paNum2){
        mostrar = "El número 1 es mayor en parametros"
     }else{
        mostrar = "El número 2 es mayor en parametros"
     }
   }
   return(mostrar)
}

//expresion

const diferenciarNumerosExp = function(paNum1,paNum2){
   paNum1=paNum1
   paNum2=paNum2
   if(paNum1==paNum2){
      mostrar = "Los dos números son iguales en expresion"
   }else{
     if(paNum1>paNum2){
        mostrar = "El número 1 es mayor en expresion"
     }else{
        mostrar = "El número 2 es mayor en expresion"
     }
   }
   return(mostrar)
}