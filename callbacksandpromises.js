// call backs

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
  
