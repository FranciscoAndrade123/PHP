   //con parametros
   let anioAct=2024
   let calcular
   let mostrar

   function calcularEdad(paAnioNac){
    paAnioNac = paAnioNac
    calcular= anioAct - paAnioNac
    if(calcular>17){
        mostrar= "Es mayor de edad  calculando tu edad en parametros"
    }else{
      mostrar= "Es menor de edad  calculando tu edad en parametros "
    }
    return(mostrar);
   }

   //con expresion
   const calcularEdadExp = function(paAnioNac){
   paAnioNac = paAnioNac
    calcular= anioAct - paAnioNac
    if(calcular>17){
        mostrar= "Es mayor de edad  calculando tu edad en expresion"
    }else{
      mostrar= "Es menor de edad  calculando tu edad en expresion "
    }
    return(mostrar);
   }