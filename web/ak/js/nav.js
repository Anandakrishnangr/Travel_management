var y;
function fafa() {
  
  if(y%2==0){
    document.getElementById('myImage').src='icon.png';
    y=y+1;
     }
     else
     {
    document.getElementById('myImage').src='icon2.png';
    y=y+1;
}
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}