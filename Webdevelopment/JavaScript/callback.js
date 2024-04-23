function say() {
  console.log("Good Morning");
  sayhello();
}

function sayhello() {
  console.log("good Day");     // good day Good Morning  Good Morning  good day
}


say(sayhello());
