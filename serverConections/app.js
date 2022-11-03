
const fetch = require("node-fetch");
const connection= require("./connetion")

fetch("https://domoticafiet.online/")
.then((respuesta)=> {
    return respuesta.json()
}).then((resp)=>{
    console.log(resp);
    console.log(resp.page);
    console.log(resp.data[0].email);
    AudioContext.conectar();

})