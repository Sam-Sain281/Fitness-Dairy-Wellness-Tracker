var name = localStorage.getItem("exerciseName");

var div = document.createElement("div");
div.id = "tracker";

div.innerHTML = `<p> ${name} </p>`;

document.getElementById("container").appendChild(div);

var date = [];
var set = [];
var reps = [];
var weight = [];

var n = 1;
var x = 0;

function submitTracker() {
  date[x] = document.getElementById("frmDate").value; // get value passed from input

  set[x] = document.getElementById("frmSets").value; // get value passed from input

  reps[x] = document.getElementById("frmReps").value; // get value passed from input

  weight[x] = document.getElementById("frmWeight").value;

  var data = document.createElement("div");
  data.id = "trackervalues";

  data.innerHTML =
    "On " +
    document.getElementById("frmDate").value +
    " you did " +
    document.getElementById("frmWeight").value +
    " pounds for " +
    document.getElementById("frmSets").value +
    " sets of  " +
    document.getElementById("frmReps").value +
    " reps";

  document.getElementById("container").appendChild(data);
}
