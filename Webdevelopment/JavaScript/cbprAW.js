function Sqrt(a)
{
  console.log(a*a)
}

function Cube(a)
{
    console.log(a*a*a);

function calcutor(a , Callback)
{
    Callback(10);
}

calcutor(2, (a)=>{
    console(a*a)
})

const hello = () => {
    console.log("hello world");
}

setTimeout(hello, 2000)

function getData( dataId,getNextData) // getNextData store in function
{
    setTimeout(()=>{
       console.log(" Data id",dataId);
     if(getNextData) //
         getNextData();
    },2000);
}

// callbacks hells
console.log(" getting an Data 1");
getData(1,()=>{
    console.log(" getting data 2");
    getData(2, ()=>{
        console.log(" Getting for an Data 3");
        getData(3);
    });
});

promises

let promises = new Promise((reslove, reject) => {

    console.log(" learning promise")
  reject(" Happens some thing Wrong ")

});

function getData(dataId, getNextData) {
  return new Promise((reslove, reject) => {
    setTimeout(() => {
    //   console.log("dataId", dataId);
    //   reslove("success");

    reject("error")
      if (getNextData) getNextData();
    }, 5000);
  });
}

const getPromise = () => {
  return new Promise((resolve, reject) => {
    console.log(" Hello world Programing");
    resolve("success");
  });
};

let promise = getPromise();

promise.then(()=>{
    console.log(" succefully reached ");
});

const getPromise = (value) => {
  return new Promise((resolve, reject) => {
    if (value !==0) {
      console.log(" Hello");
      resolve("Success");
    } else {
      reject("Error");
    }
  });
};

let value =0;
let Result = getPromise(value);


Result.then(() => {
  console.log("hey Success");
});

Result.catch(() => {
  console.log(" not every ");
});
