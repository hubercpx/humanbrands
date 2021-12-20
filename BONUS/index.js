
const figlet = require('figlet');
const inquirer = require('inquirer');
const readLineSync = require('readline-sync')
const chalk = require('chalk');



let numeros = [];
let numero;
var contador = 1;
console.log(chalk.yellow(figlet.textSync('Human Brands', { horizontalLayout: 'full' })));

while(contador <= 10) {
    numero = readLineSync.question("Ingrese el numero ("+ contador +"): ");
    numeros.push(numero);
    console.log(numeros);
    contador =contador + 1;
}

maximo = Math.max.apply(null, numeros);
minimo = Math.min.apply(null, numeros)
console.log('El mayor numero es: ' + maximo);
console.log('El menor numero es: ' + minimo);
