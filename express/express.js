// express server is an single threaded

// one proceess complete and another proceess do it consider like doctor wait one patientb
// doctor check to the  patient wait and yourname call the patient you vist the doctor

//--------------------------- //

// create a new http server using express
//  node have not defalut libraries so sloving these npm packages
// npm install express -- npm package express installed our local machine

// ----------------------------------------------------------------

const express = require("express");
const app = express();

app.get("/", function (req, res) {  // req = requet res= resent
  res.send(" hi there ");
});

app.listen(3000, function () {
  console.log("server is running on port 3000");
});
