//In terminal cd into js then:
//1. npm -i express mongoose body-paser
//2. nodemon server.js to start application in localhost:3000
//3. In broswer visit http://localhost:3000
var path = require("path");
const express = require("express");
const app = express();
app.use(express.static(path.join(__dirname, "../css/")));

const mongoose = require("mongoose");
const bodyParser = require("body-parser");
app.use(bodyParser.urlencoded({ extended: true }));
mongoose.connect(
  "mongodb+srv://team13:qWIkRTUfe1TWA3bO@cluster0.idjkxii.mongodb.net/earthDB",
  { useNewUrlParser: true },
  { useUnifiedTopology: true }
);

//Object Model : This is for the entry and its properties
const entryModel = {
  farm: String,
  location: String,
};

const model = mongoose.model("Entry", entryModel);

app.get("/", function (req, res) {
  res.sendFile("html/index.html", { root: "../" });
});
app.post("/", function (req, res) {
  //Make entry
  let newEntry = new model({
    farm: req.body.farm,
    location: req.body.location,
  });
  newEntry.save();
  res.redirect("/");
});
app.listen(3000, function () {
  console.log("here");
});
