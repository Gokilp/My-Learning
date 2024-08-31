setTimeout(()=>{
  console.log("hi");
  setTimeout(()=>{
    console.log("Good Programming");
    setTimeout(()=>{
         console.log("Good Morning");
    },5000)
  },2000)
},1000)



function Step3 (){
     console.log("Good Morning")
}

function Step2(){
    console.log(" Good Programming");
   setTimeout(Step3,5000)
}

function Step1(){
    console.log("hi");
    setTimeout(Step2,2000);
}

setTimeout(Step1,1000)
  

                  // Promises 

function setTimeoutpromisfied (duration)
{
    return new Promise ((resolve)=>{

        setTimeout(resolve,duration)
     
     });
}

setTimeoutpromisfied(1000).then( ()=>{
   console.log("Hi");
   return setTimeoutpromisfied(2000).then(()=>{
      console.log("Good Morning");
   return setTimeoutpromisfied(5000).then(()=>{
       console.log("Good  programming");
   });
    });
});


      // Async and Await 

function setTimeoutpromisfied(ms){
    return new Promise ((resolve)=>{
       setTimeout(resolve,ms);
 });
}


async function slove(){

await setTimeoutpromisfied(1000);
  console.log("hi");

await setTimeoutpromisfied(2000)
  console.log("Hi there ");

await setTimeoutpromisfied(5000)
 console.log("Hi World Programing ")


} 

slove();
