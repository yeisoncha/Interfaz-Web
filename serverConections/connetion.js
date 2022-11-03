var connection = require('mysql');
var conexion= connection.createConnection({
    host : 'localhost',
    user : 'u628361878_lab3',
    password : 'Domotica#3245',
    database : 'u628361878_laboratorio3'

});

const conectar  =() =>{
    conexion.connect(err => {
        if(err) throw  err 
        console.log("Conectado a la DB");
    })

}


const consultarEstado(estado)

module.exports ={
    conectar

}