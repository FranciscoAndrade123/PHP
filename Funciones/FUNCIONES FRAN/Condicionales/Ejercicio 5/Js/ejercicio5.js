//parametros
function calcularMayoriaDeEdad(paEdad){ 
   paEdad=paEdad
   let anioAct = 2024
   let edad = anioAct - paEdad
   let mostrar

   if(edad>17){
     mostrar= " cumple con la mayoria de edad en parametros"
   }else{
     mostrar= " no cumple con la mayoria de edad en parametros"
   }
   return mostrar
}

function edadesPersonas(paAño1,paAño2,paAño3){
    paAño1=paAño1
    paAño2=paAño2
    paAño3=paAño3
    let edad1  = "La primera persona"
    let edad2 = "La segunda  persona" 
    let edad3 = "La tercera  persona"
    let promedio
    let aviso

    console.log(edad1 + calcularMayoriaDeEdad(paAño1))
    console.log(edad2  + calcularMayoriaDeEdad(paAño2))
    console.log(edad3  + calcularMayoriaDeEdad(paAño3))

    promedio= (calcularMayoriaDeEdad(paAño1)+calcularMayoriaDeEdad(paAño2)+edad3  + calcularMayoriaDeEdad(paAño3))/3

    if(promedio>17){
        aviso = "El promedio de las edades si cumple la mayoria de edad en parametros"
        return aviso
    }else{
        aviso = "El promedio de las edades no cumple la mayoria de edad en parametros"
        return aviso
    }
}

//expresion
const calcularMayoriaDeEdadExp = function(paEdad){
   paEdad=paEdad
   let anioAct = 2024
   let edad = anioAct - paEdad
   let mostrar

   if(edad>17){
     mostrar= " cumple con la mayoria de edad en expresión" 
   }else{
     mostrar= " no cumple con la mayoria de edad en expresión"
   }
   return mostrar
}

const edadesPersonasExp = function(paAño1,paAño2,paAño3){
    paAño1=paAño1
    paAño2=paAño2
    paAño3=paAño3
    let edad1  = "La primera persona"
    let edad2 = "La segunda  persona" 
    let edad3 = "La tercera  persona"
    let promedio
    let aviso

    console.log(edad1 + calcularMayoriaDeEdadExp(paAño1))
    console.log(edad2  + calcularMayoriaDeEdadExp(paAño2))
    console.log(edad3  + calcularMayoriaDeEdadExp(paAño3))

    promedio= (calcularMayoriaDeEdadExp(paAño1)+calcularMayoriaDeEdadExp(paAño2)+edad3  + calcularMayoriaDeEdadExp(paAño3))/3

    if(promedio>17){
        aviso = "El promedio de las edades si cumple la mayoria de edad en expresión"
        return aviso
    }else{
        aviso = "El promedio de las edades no cumple la mayoria de edad en expresión"
        return aviso
    }
}

