//parametros
function areasCuadrados(palado) {
    palado=palado
    let area = palado * palado;
    return area;
}

function saberCuadrados(palado1, palado2, palado3) {
    palado1=palado1
    palado2=palado2
    palado3=palado3
    let area1 = areasCuadrados(palado1);
    let area2 = areasCuadrados(palado2);
    let area3 = areasCuadrados(palado3); 
    let mostrar;

    if (area1 == area2 && area1 == area3) {
        mostrar = "Las tres áreas son iguales";
    } else {
        if (area1 > area2 && area1 > area3) {
            mostrar = "El área del cuadrado 1 es mayor";
        } else {
            if (area2 > area1 && area2 > area3) {
                mostrar = "El área del cuadrado 2 es mayor";
            } else {
                mostrar = "El área del cuadrado 3 es mayor";
            }
        }
    }
    return mostrar;
}

//expresion
const areasCuadradosExp = function(palado){
    palado=palado
    let area = palado * palado;
    return area;
}

const saberCuadradosExp = function(palado1, palado2, palado3){
    palado1=palado1
    palado2=palado2
    palado3=palado3
    let area1 = areasCuadrados(palado1);
    let area2 = areasCuadrados(palado2);
    let area3 = areasCuadrados(palado3); 
    let mostrar;

    if (area1 == area2 && area1 == area3) {
        mostrar = "Las tres áreas son iguales";
    } else {
        if (area1 > area2 && area1 > area3) {
            mostrar = "El área del cuadrado 1 es mayor";
        } else {
            if (area2 > area1 && area2 > area3) {
                mostrar = "El área del cuadrado 2 es mayor";
            } else {
                mostrar = "El área del cuadrado 3 es mayor";
            }
        }
    }
    return mostrar;
}
