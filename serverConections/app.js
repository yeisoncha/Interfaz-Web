
const fetch = require("node-fetch");
const connection= require("./connetion")


fetch("https://regres.in/api/users?page=2")
.then((respuesta)=> {
    return respuesta.json()
}).then((resp)=>{
    console.log(resp.data);
        resp.data.forEach(element => {
            connection.consultarEstado(element.ID_TARJ,element.hab1,element.hab2,element.hab3,element.modo)
            
        });
    
    connection.consultar

})