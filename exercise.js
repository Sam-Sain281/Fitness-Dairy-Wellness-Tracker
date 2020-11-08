var list1 = [];

var n = 1;
var x = 0;

function AddRow() {
  list1[x] = document.getElementById("fname").value; // get value passed from input

  localStorage.setItem("exerciseName", list1[x]);
  var div = document.createElement("div");
  div.id = "tracker";

  div.innerHTML = `<a id = "trackerlink" href = "tracker.php" > ${list1[x]} </a>`;

  document.getElementById("container").appendChild(div);

  n++;
  x++;
}
