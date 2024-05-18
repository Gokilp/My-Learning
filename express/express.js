// express server is an single threaded

// one proceess complete and another proceess do it consider like doctor wait one patientb
// doctor check to the  patient wait and yourname call the patient you vist the doctor

//--------------------------- //

// create a new http server using express
//  node have not defalut libraries so sloving these npm packages
// npm install express -- npm package express installed our local machine

// ----------------------------------------------------------------

/*
 express server create syntax for
const express = require("express");
const app = express();
app.listen(3000, function () {
    console.log("server is running on port 3000");
  });

*/




const express = require("express");
const app = express();

function sum(n) {
  let ans = 0;
  for (let i = 1; i <= n; i++) {
    ans = ans + i;
  }
  return ans;
}

app.get("/", function (req, res) {
  // req = request and respone  
  const n = req.query.n;
  const ans = sum(n);
  res.send("Answered: " + ans);
});

app.listen(3000, function () {
  console.log("server is running on port 3000");
});
