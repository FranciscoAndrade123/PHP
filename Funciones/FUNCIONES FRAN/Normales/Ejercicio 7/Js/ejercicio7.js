//en parametros
let palado1; //globales
let palado2; //globales

function areasCuadrado(palado1) {
    palado1 = palado1
    let areaCuadrado = palado1 * palado1;
    areaCuadrado= "El area del cuadrado en parametros es " + areaCuadrado
    return(areaCuadrado)
}

function areasRectangulo(palado1,palado2){
    palado1 = palado1
    palado2 = palado2
    let areaRectangulo = palado1 * palado2
    areaRectangulo = "El area del rectangulo en parametros es " + areaRectangulo
    return( areaRectangulo)
}

function areasTriagulo(palado1,palado2){
    palado1 = palado1
    palado2 = palado2
    let areaTriangulo = (palado1*palado2)/2
    areaTriangulo = "El area del triangulo en parametros es " + areaTriangulo
    return(areaTriangulo)
}

//la condicional  en parametros
function saberArea(palado1, palado2, paArea) {
    palado1 = palado1;
    palado2 = palado2;
    paArea = paArea;
    let area;
    if (paArea == "Cuadrado") {
        area = areasCuadrado(palado1);
    } else if (paArea == "Rectangulo") {
        area = areasRectangulo(palado1, palado2);
    } else if (paArea == "Triangulo") {
        area = areasTriagulo(palado1, palado2);
    } else {
        area = "Error, esta area geometrica no se encuentra";
    }
    return area;
}


// expresion 
const areasCuadradoConst= function(palado1){
    palado1 = palado1
    let areaCuadrado = palado1 * palado1;
    return("El area del cuadrado en expresion es " + areaCuadrado)

}

const  areasRectanguloConst = function(palado1,palado2){
    palado1 = palado1
    palado2 = palado2
    let areaRectangulo = palado1 * palado2
    return("El area del rectangulo en expresion es " + areaRectangulo)
}


const  areasTriaguloConst =  function(palado1,palado2){
    palado1 = palado1
    palado2 = palado2
    let areaTriangulo = (palado1*palado2)/2
    return("El area del triangulo en expresion es " + areaTriangulo)

}

//la condicional  en expresion
const saberAreasConst =  function (palado1, palado2, paArea){
    palado1 = palado1;
    palado2 = palado2;
    paArea = paArea;
    let area;

    if (paArea == "Cuadrado") {
        area = areasCuadradoConst(palado1);
    } else if (paArea == "Rectangulo") {
        area = areasRectanguloConst(palado1, palado2);
    } else if (paArea == "Triangulo") {
        area = areasTriaguloConst(palado1, palado2);
    } else {
        area = "Error, esta area geometrica no se encuentra";
    }
    return area;
}

