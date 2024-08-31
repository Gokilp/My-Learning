function settimeoutpromised (duration){

 return new Promise (function (reslove){

//  setTimeout(reslove,duration);
   console.log(" promised print")

 });
}


function Callback(){
    console.log(" 5 Second Sloved");
}

settimeoutpromised(5000).then(Callback);

// -----------------------  Call back ---------------------------
setTimeout(()=>{

    console.log("Hi");

 setTimeout(()=>{
    console.log("Hello ");

     setTimeout(()=>{
         console.log("Hello World");
     },5000)
 },2000)
},1000)

// Code for write in Promise 


function promised (message,duration){
  
    return new Promise(function (reslove){
 
 setTimeout(()=>{
    console.log(message);
    reslove();
 },duration);
});

}
promised("Hi",1000)
.then(()=>{
    promised("Hello",2000);
})
.then(()=>{
    promised("Hello World",5000);
})


// -------------------------------------------- Call back -------------------------------






setTimeout(()=>{
   console.log("hello");
  
   setTimeout(()=>{
   console.log("hi");
   setTimeout(()=>{
      console.log("hi there");
   },5000);
   },2000)
},1000)

// --------- Promise _ --------------------------------


function settimeoutpromised(message,Time){


    return new Promise ((reslove)=>{

     setTimeout(()=>{
         console.log(message);
         reslove();
     },Time);

    })
}

settimeoutpromised("hi",1000)
.then(()=>{
   settimeoutpromised("Hello",2000)
})
.then(()=>{
      settimeoutpromised("Hello World",5000)
})
