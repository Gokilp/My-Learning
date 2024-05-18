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

/*


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
*/

// const express = require("express");
// const app = express();

// const users = [{
//     name: "John",
//     Kidney: [{
//         healthy: false,
//     }],
// }];

// app.get("/", function (req, res) {
//     const johnKidney = users[0].Kidney; // Access the Kidney array correctly
//     const NumberofKidneys = johnKidney.length; // Get the length of the Kidney array
//     let NumberofHealthyKidneys = 0;

//     // Correct loop condition and iterate over the johnKidney array
//     for (let i = 0; i < NumberofKidneys; i++) {
//         if (johnKidney[i].healthy) {
//             NumberofHealthyKidneys = NumberofHealthyKidneys + 1;
//         }
//     }

//     // Calculate the number of unhealthy kidneys
//     const NumberofUnhealthyKidneys = NumberofKidneys - NumberofHealthyKidneys;

//     // Send the response as a JSON object
//     res.json({
//         NumberofKidneys,
//         NumberofHealthyKidneys,
//         NumberofUnhealthyKidneys,
//     });
// });

// app.listen(3000, function () {
//     console.log("Server is running on port 3000");
// });

const express = require("express");
const app = express();

const users = [
  {
    name: "John",
    Kidney: [
      {
        healthy: false,
      },
    ],
  },
];

app.use(express.json());
// get => Query parameters
app.get("/", function (req, res) {
  const JohnofKindey = users[0].Kidney;
  1;
  const NumberofKidneys = JohnofKindey.length;
  const NumberofHealthyKidneys = 0;

  for (let i = 0; i < NumberofKidneys; i++) {
    if (JohnofKindey[i].healthy) {
      NumberofHealthyKidneys++;
    }
  }
  const NumberofunhealthyKidney = NumberofKidneys - NumberofHealthyKidneys;

  res.json({
    NumberofKidneys,
    NumberofHealthyKidneys,
    NumberofunhealthyKidney,
  });
});

// post method => body
app.post( "/", function(req, res) {
     const ishealthy = req.body.isHealthy;
     users[0].Kidney.push({
         healthy: isHealthy,
     })
     res.json({
         message: "Kidney added successfully",
     })

});



app.listen(3000, function () {
  console.log("Server is running on port 3000");
});
