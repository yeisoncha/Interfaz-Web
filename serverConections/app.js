
const fetch = require("node-fetch");
const connection= require("./connetion")


fetch("https://domoticafiet.online/")
.then((respuesta)=> {
    return respuesta.json()
}).then((resp)=>{
    console.log(resp);
    
    connection.consultar

})