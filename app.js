
const express = require('express');

// Set up the express app
const app = express();
const PORT = 5000;


// get users
app.get("/users/:id", (req,res) => {

    // Website you wish to allow to connect
    res.setHeader('Access-Control-Allow-Origin', '*');

    // Request methods you wish to allow
    res.setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, PATCH, DELETE');

    // Request headers you wish to allow
    res.setHeader('Access-Control-Allow-Headers', 'X-Requested-With,content-type');

    // Set to true if you need the website to include cookies in the requests sent
    // to the API (e.g. in case you use sessions)
    res.setHeader('Access-Control-Allow-Credentials', true);

    console.log("Devolviendo usuario con id: " + req.params.id)
    
    const userId = req.params.id

    //simulacion consulta en la db
    nombre = ""
    if (userId == 1){
        nombre = "Santiago"

    }else if (userId == 2){
        nombre = "Juan"
    }
    
    res.json(nombre)

    //res.end()
})


app.listen(PORT, () => {
  console.log(`server running on port ${PORT}`)
});







