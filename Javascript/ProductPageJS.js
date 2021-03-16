
var w = document.getElementById("moredesc");

if (document.getElementById("qty").value == "")
 document.getElementById("qty").value = "1"
 if (document.getElementById("size").value == "")
 document.getElementById("size").value = "1"


 window.onbeforeunload = function() {
  localStorage.setItem("theqty", document.getElementById("qty").value);
  localStorage.setItem("thesize", document.getElementById("size").value);
  

}

 window.onload = function() {
  document.getElementById("qty").value = localStorage.getItem("theqty");
  document.getElementById("size").value = localStorage.getItem("thesize");
  
 let y = document.getElementById("moredesc");

 let z = document.getElementById("prices");
 let nn = document.getElementById("prices").dataset.value *document.getElementById("qty").value*document.getElementById("size").value;
 z.innerHTML = nn.toFixed(2) + "$";
 
 if (document.getElementById("qty").value == "")
 document.getElementById("qty").value = "1"
 if (document.getElementById("size").value == "")
 document.getElementById("size").value = "1"
}






document.getElementById("desc").onclick = function () {
  
                                                       if (this.value == "More description"){
  this.value = "Less description"    
                                                         w.style="display:inline;"
}
                                                     else{
w.style="display:none;"; 
this.value = "More description"                            
}}

document.getElementById("qty").onclick = function() {
  z = document.getElementById("prices");
  let nn = document.getElementById("prices").dataset.value *document.getElementById("qty").value*document.getElementById("size").value;
  z.innerHTML = nn.toFixed(2) + "$";

}

document.getElementById("size").onclick = function() {
  let nn = 0;
  z = document.getElementById("prices"); 

    nn = document.getElementById("prices").dataset.value *document.getElementById("size").value*document.getElementById("qty").value;

  
  z.innerHTML = nn.toFixed(2) + "$";

  }