
const figlet = require('figlet');
const inquirer = require('inquirer');
const readLineSync = require('readline-sync')
const chalk = require('chalk');
var logo = figlet('Human Brands', function(err, data) {
  if (err) {
      console.log('Something went wrong...');
      console.dir(err);
      return;
  }
  console.log(data)
});

let userRes;
let clientes = [];
let coincidencias = [];

console.log(chalk.yellow(figlet.textSync('Human Brands', { horizontalLayout: 'full' })));
while(userRes !== '0') {
  console.log('1.- Agregar cliente');
  console.log('2.- Listar clientes que contengan "RE"');
  console.log('0.- Salir');
  userRes = readLineSync.question("Seleccione una opcion: ");

  switch(userRes){
    case '1':
      let cliente;
      while(cliente !== '0') {     
        console.log('-------Agregar Cliente-----');
        console.log('Para regresar al menu principal teclee "0" y enter')
        cliente = readLineSync.question("Ingrese el nombre del nuevo cliente por favor: ");
        switch(cliente) {        
          default:      
            clientes.push(cliente);

            console.clear();
            console.log('|  Clientes  |');
            console.log('--------------');
            clientes.forEach(element => 
              console.log( '|' + element + '|')              
            );

        }
      }
    break;
    case '2':
      let listado;
          clientes.forEach(element => {
            if(element.includes('RE') || element.includes('Re') || element.includes('rE') || element.includes('re'))
            {
              coincidencias.push(element);          
              console.log(coincidencias)  
            }
          });   
          console.log('-------Listado de clientes con "RE, Re, re, rE"-----');
          console.log('|  Clientes  |');
          console.log('--------------');
          
          
            coincidencias.forEach(element => 
              console.log( '|' + element + '|')              
            ); 
            
        

      
    break;
  }

}

