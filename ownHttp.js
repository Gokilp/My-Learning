const express = require('express')
const app = express()

// create own http server 


// route Handling (1)
app.get("/home", function(req, res) {
    res.send("hello home");
});

// route Handling (2)
app.get("/About", function(req, res) {
    res.send("hello User");
});

// Listen porting number
app.listen(3000,()=>{
    console.log("port is listen");
})
