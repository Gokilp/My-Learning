// ASync is an non blocking of code

console.log("Hello.."); //f1
function sync() {
  console.log("step 1"); //f3
  console.log("step 2"); //f4
  console.log("step 3"); //f5
}
sync(); //f2
let a = 100;
let b = 20;
let c = a + b;

//  Settimeout () function  delay of execution of the callback function and  taking time milliseconds

setTimeout(() => console.log("step1"), 0000); //f6
setTimeout(() => console.log("step2"), 2000); //f7
setTimeout(() => console.log("step3"), 1000); //f8

console.log("bye"); //f9

// Setinterval function is print out every second for input given time

setInterval(() => console.log("Hi.."), 2000);
