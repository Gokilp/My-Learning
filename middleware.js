
// not simple http 

// const express = require ('express');
// const app = express();

// function isAge(age)
// {
//     if(age>18)
//      return true;
//     else 
//     return false;
// }


// app.get("/ride",function(req,res){
  
//     const age = parseInt(req.query.age, 10);

//     co

//     if (!isNaN(age) && isAge(age)) {
//           res.json({
//             msg : "your Ride the Bike"
//           })
//         }else{
//             res.status(411).json({
//                 msg:"Sorry are your not of age yet"
//             })
//         }
    
//     })

// app.listen(3000,()=>{
//     console.log("port Listen in 3000");
// })

// Using Middle Ware 


const express = require ('express');
const app = express();

function isAgeMiddleware(req,res,next)
{
    const age = req.query.age;
    if(age>=18)
    {
        next();
    }else{
        res.json({
            msg:"Sorry your are not of  age  yet"
        })
    }
}

app.use(isAgeMiddleware)

app.get("/ride",isAgeMiddleware,function(req,res,){
   res.json({
     msg:" you Can Ride the Bike"
   })
    
    })

app.listen(3000,()=>{
    console.log("port Listen in 3000");
})
