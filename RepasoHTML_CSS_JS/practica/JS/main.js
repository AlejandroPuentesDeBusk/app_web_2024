//Este es un comentario de Java Script de una linea

/*Este es un 
comentario de varias 
lieas de codigo*/

var nombre = "alejandro puentes";
var nombre_2 = 'edson burciaga';

let = nombre_3 = "Francisco Perez";
let edad = 20;
let estatura = 1.80;
let logico = true;


//mostrar contenido de varibales

console.log("Hello World" + " " +nombre_3)

document.write("<hr><h2>Hola, soy la consola</h2>")

//alert("soy una alerta" + nombre_2)

//Mostrar contenido con .getElementByID


let datos = document.getElementById ('informacion');
datos.innerHTML= "Hola soy un contenido de inner.html <br>";
datos.innerHTML += "<hr><h2>Hola soy otro contenido de inner.html</h2><hr>";
datos.innerHTML += "<hr><h2>Mi edad es: "+ edad +"</h2><hr>";


datos.innerHTML +=`

    <hr>
    <h2>Mi edad es ${edad}</h2>
    <h2> Mi nombres es ${nombre}</h2>
    <hr>
`;

//Condiciones

if (edad>= 18)
    {datos.innerHTML += "<hr><h2>Soy mayor de edad</h2><hr>"}
else 
    {datos.innerHTML += "<hr><h2>Soy menor de edad</h2><hr>"}

//Ciclos

for (let i = 1; i<5; i++)
{
    datos.innerHTML += `<hr><h2>Soy el numero:${i}+ </h2><hr>`;
}

//Whule

let i = 1;
while (i<=5)
{
    datos.innerHTML += `<hr><h2>Soy el numero:${i}+ </h2><hr>`;
    i++;
}


i = 1;
do
{
    datos.innerHTML += `<hr><h2>DoWhile: soy el numero: ${i}+ </h2><hr>`;
    i++;
}
while (i <=5);


//funciones que no reciben parametros y no regresan valor

function suma1(){

    let n1 =2;
    let n2 =3;
    let suma = n1+n2;

    datos.innerHTML += `<hr><h2>La suma 1 es: ${suma} </h2><hr>`;

}

suma1();
//funciones que no recibe parametro y si regresa valor


function suma2(){

    let n1 =2;
    let n2 =3;
    let suma = n1+n2;

    return suma;

}

let sum =suma2();
datos.innerHTML += `<hr><h2>La suma 2 es: ${sum} </h2><hr>`;

//funciones que si reciben parametros pero no regresan valor 


function suma3(numero1, numero2){

    let n1 =numero1;
    let n2 = numero2;
    let suma = n1+n2;

    datos.innerHTML += `<hr><h2>La suma 3 es: ${suma} </h2><hr>`;

}

suma3(3,4);



//funciones que si reciben parametros y si regresan valor


function suma4(numero1, numero2){

    let n1 =numero1;
    let n2 = numero2;
    let suma = n1+n2;

    return suma;

}


datos.innerHTML += `<hr><h2>La suma 4 es: ${suma4(10,20)} </h2><hr>`;


//Arreglos



let animales = [];

animales[0] = "Perro"
animales[1] = -"Gallina"
animales[4] = "Perico"


let animales2 = ["Leon", "Tigre", "Elefante"];

for(let i = 0; i<animales.length; i++){

    datos.innerHTML += `<hr><h2>EL animal es: ${animales2[i]} </h2><hr>`;


}


animales2.forEach(element =>{
    datos.innerHTML += `<hr><h2>EL animal es: ${element} </h2><hr>`;
})