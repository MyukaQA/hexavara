$(document).ready(function(){
  document.getElementById("cross2").onclick= function(){
    document.getElementById("next").style.display = "none";
  };
  
  document.getElementById("dropdown").onclick = function(){
    document.getElementById("next").style.display = "block";
  };
});