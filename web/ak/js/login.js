// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function hide(){
	var k = document.getElementById("toggle");
	k.style.display = "none";
}

function show() {
  var x = document.getElementById("toggle");
  var y = document.getElementById("register");
  
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
  } else {
    x.style.display = "none";
    y.style.display = "block";
    document.getElementById("logbutton").value=	"register";

  }
}