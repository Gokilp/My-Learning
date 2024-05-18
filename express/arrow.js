const arr1 = [1,2,3,4,5];
console.log(arr1);

const arr2  = arr1.map((n)=>{
   return n*2;
});

console.log(arr2);

const arr3 = arr1.map((n)=>{
   return n*3;
});
console.log(arr3);
const arr4 = arr1.map((n)=>{
   return n*4;
});
console.log(arr4);
const arr5 = arr4.map((n)=>{
   return n*5
});

console.log(arr5);


// flitering 

const arr1 = [1,2,3,4,5,6,7,8,9,10];

const divby2 = arr1.filter((n)=>{
     if(n%2==0)
      return true;
    else 
    return false;

});

console.log(divby2);
const divby1 = arr1.filter((n)=>{
   if(n%2!=0)
      return true;
});

console.log(divby1);


console.log(divby1);