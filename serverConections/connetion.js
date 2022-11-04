const express = require('express');
const mysql = require('mysql');

var conexion= mysql.createConnection({
    host : 'localhost',
    user : 'root',
    password : '',
    database : 'prueba'

});
//Domotica#3245
conexion.connect(function(error){
    if(error){
        throw error;
    }
    else{
        console.log("Conexion exitosa")
    }

});


conexion.query('INSERT INTO modos (ID_TARJ,hab1,hab2,hab3,modo) VALUES (1,1,2,1,1) ', function(error, results, fileds){
    if(error)
    throw error;
    results.forEach(result => {
        console.log(result);
    });
})


conexion.end();

// const conectar  =() =>{
//     conexion.connect(err => {
//         if(err) throw  err 
//         console.log("Conectado a la DB");
//     })

// }





// const consultarEstado=(ID_TARJ,hab1,hab2,hab3,modo) =>{
//     //conectar();
//     let  query = "INSERT INTO estados (ID_TARJ,hab1,hab2,hab3,modo)" + "VALUES('"+1+"','"+1+"','"+1+"','"+1+",'"+1+"')"
//     conexion.query(query,function(err,result,filed) {
//         if (err) throw err
//         console.log(result);

//     })
// }

// module.exports ={
//     conectar,
//     consultarEstado

// }