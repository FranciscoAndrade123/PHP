let tienda = [];
let nuevoProducto;
let listaBusquedad=[];


tienda = [
    {producto:'Arroz', tipoProducto: 'granos', tipoUnidad: 'gramos', cantidad:1000, precio:2450}, 
    {producto:'Papa', tipoProducto: 'fruver', tipoUnidad: 'gramos', cantidad:500, precio:1000},
    {producto:'Mora', tipoProducto: 'fruver', tipoUnidad: 'gramos', cantidad:500, precio:1500},
    {producto:'Trucha', tipoProducto: 'carnes', tipoUnidad: 'gramos', cantidad:1000, precio:9000},
    {producto:'Pollo Entero', tipoProducto: 'carnes', tipoUnidad: 'gramos', cantidad:1000, precio:4500},
];

nuevoProducto = {producto:'Res', tipoProducto:'carnes', tipoUnidad:'gramos', cantidad:1000, precio:7500};
tienda.push(nuevoProducto);


for(let iteracion= 0; iteracion< tienda.length; iteracion++){
    console.log(tienda[iteracion]);
    if(tienda[iteracion].tipoProducto === 'fruver'){
        listaBusquedad.push(tienda[iteracion]);
    }
}

console.log(listaBusquedad);
