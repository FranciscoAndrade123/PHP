// ----parametros----
  //funcion de multiplicar
  function multiplicacion(panum1,panum2){
    panum1=panum1
    panum2=panum2
    let resultado = panum1 * panum2
    return resultado
  }


  //funcion de dividir
  function division(panum1,panum2){
    panum1=panum1
    panum2=panum2
    let resultado=panum1/panum2
    return resultado
  }

//funcion de ambas  en parametros
function multiYdivi(panum1,panum2,signo){
    panum1=panum1
    panum2=panum2
    signo=signo
    let funcion
    if(signo== "*"){
         funcion =  multiplicacion(panum1,panum2) 
    }else{
        if(signo == "/"){
          funcion = division(panum1,panum2)
        }else{
            funcion = "ERROR"
        }
    }
    return funcion
}

// ----expreseion----

  //funcion de multiplicar
  const  multiplicacionExp = function(panum1,panum2){
    panum1=panum1
    panum2=panum2
    let resultado = panum1 * panum2
    return resultado
  }

  //funcion de dividir
  const divisionExp =  function(panum1,panum2){
    panum1=panum1
    panum2=panum2
    let resultado = panum1 * panum2
    return resultado
  }

//funcion de ambas  en expresion
const  multiYdiviExp = function(panum1,panum2,signo){
    panum1=panum1
    panum2=panum2
    signo=signo
    let funcion
    if(signo== "*"){
         funcion =  multiplicacion(panum1,panum2) 
    }else{
        if(signo == "/"){
          funcion = division(panum1,panum2)
        }else{
            funcion = "ERROR"
        }
    }
    return funcion
}

