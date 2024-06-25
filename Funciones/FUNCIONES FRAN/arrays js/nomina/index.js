//--------***VARIABLES GLOBALES***--------- //
let personas = []; //el array principal
let nomina = []; //el array para almacenar la nomina 
let salarioMin=1600000
let numeroRegistros;
let mostrar;
let mostrarRetencion;



//--------***FUNCIONES***--------- //

// Función para calcular salario
const funcionSalario = function(paValorDia, paDias) {
    return paDias * paValorDia;
};
//funcion que calcula el subsidio de transporte
const funcioSubtrans = function(paSalario){
    if(paSalario<salarioMin*2){
        paSalario= paSalario+120000 
        mostrar= "Si se aplica el subsidio de transporte " + paSalario
    }else{
        paSalario= paSalario+0
        mostrar= "No se aplica el subsidio de transporte " 
}
return mostrar
}
// funcion que calcula la salud
const funcionSalud=function(paSalario){
    return paSalario * 0.12
}
// funcion que calcula la pension
const funcionPension=function(paSalario){
    return paSalario * 0.16
}
// funcion que calcula el arl
const funcionArl=function(paSalario){
    return paSalario * 0.052
}
// funcion que calcula el deducible
const funcionDeducible = function(paSalario){
    return funcionSalud(paSalario) + funcionPension(paSalario) + funcionArl(paSalario)
}
//funcion que calcula la retencion del salario
const funcionRetener = function(paSalario) {
    if (paSalario > salarioMin * 12) {
        paSalario = paSalario * 0.08;
        mostrarRetencion = "Retencion de 0.08  " + paSalario;
    } else if (paSalario > salarioMin * 8) {
        paSalario = paSalario * 0.04;
        mostrarRetencion = "Retencion de 0.04 " + paSalario;
    } else if (paSalario > salarioMin * 6) {
        paSalario = paSalario * 0.02;
        mostrarRetencion = "Retencion de 0.02 " + paSalario;
    } else {
        mostrarRetencion = "No aplica retención";
    }
    return mostrarRetencion;
};

// funcion que clacula el total
const funcionTotal=function(paSalario){
    return paSalario - funcionDeducible(paSalario)
}



//--------***REGISTRO DE PERSONAS***--------- //
personas = [
    {id:1079175835 , nombre:'Sarita', apellido:'Medina',cargo:'Gerente',valorDia:70000 ,diasTrabajado:30 },
    {id:1897563421 , nombre:'Karol', apellido:'Bermeo',cargo:'Empleado',valorDia: 700000 ,diasTrabajado: 40 },
    {id:1335098765 , nombre:'Manuel', apellido:'chala',cargo:'Contador',valorDia:30000 ,diasTrabajado:50  },
    {id:1240975434 , nombre:'Daniel', apellido:'Andrade',cargo:'Instructor',valorDia: 40000 ,diasTrabajado:60  },
    {id:1234567865 , nombre:'Carlos', apellido:'Ceron',cargo:'Doctor',valorDia: 10000 ,diasTrabajado: 70 },
    {id:1234567886, nombre:'Natalia', apellido:'Cepeda',cargo:'Bombero',valorDia:50000  ,diasTrabajado: 80 },
    {id:1232456787 , nombre:'Samuel', apellido:'Sanchez',cargo:'Obrero',valorDia: 120000 ,diasTrabajado:90  },
    {id:1233235648 , nombre:'Heilin', apellido:'Sofia',cargo:'Soladador',valorDia: 330000 ,diasTrabajado: 10 },
    {id:1542356759, nombre:'Karen', apellido:'Rodriguez',cargo:'Profesor',valorDia:1270000  ,diasTrabajado:20  },
    {id:1234865320 , nombre:'Sofia', apellido:'Moreno',cargo:'Empleado',valorDia:3470000  ,diasTrabajado: 45 }
];

// Crear  el numero de objetos del registro
numeroRegistros = personas.length;

for (let iteracion = 0; iteracion < numeroRegistros; iteracion++) {
    let trabajador = personas[iteracion]; //permite rescorre toda el registro
    let salarioCalculado = funcionSalario(trabajador.valorDia, trabajador.diasTrabajado); //calcula el salario de la persona
    let subTransCalculada=funcioSubtrans(salarioCalculado);
    let retencionCalculada=funcionRetener(salarioCalculado);
    let saludCalculada = funcionSalud(salarioCalculado);
    let pensionCalculada=funcionPension(salarioCalculado);
    let arlCalculada= funcionArl(salarioCalculado);
    let deducibleCalculada=funcionDeducible(salarioCalculado);
    let totalCalculada=funcionTotal(salarioCalculado);
    nomina.push({
        id: trabajador.id,
        nombre: trabajador.nombre,
        apellido: trabajador.apellido,
        cargo: trabajador.cargo,
        salario: salarioCalculado,
        subTransporte: subTransCalculada,
        retencion: retencionCalculada,
        salud: saludCalculada ,
        pension:  pensionCalculada,
        arl:arlCalculada,
        deducible: deducibleCalculada,
        total:totalCalculada,
    });

    console.log(
        "ID: " + trabajador.id + "\n" +
        "Nombre: " + trabajador.nombre + "\n" +
        "Apellido: " + trabajador.apellido + "\n" +
        "Cargo: " + trabajador.cargo + "\n" +
        "Salario: "  + salarioCalculado + "\n" +
        "Subsidio de transporte: "  + subTransCalculada + "\n" +
        "Retención: "  + retencionCalculada + "\n" +
        "Salud: "  + saludCalculada+ "\n" +
        "Pensión: "  + pensionCalculada + "\n" +
        "ARL: "  + arlCalculada + "\n" +
        "Deducible: "  + deducibleCalculada + "\n" +
        "Total: "  + totalCalculada + "\n" 
    )

}



//console.log(nomina);//imprime el final de todo