var y = document.getElementById("moredesc");



document.getElementById("desc").onclick = function () {
                                                       if (this.value == "More description"){
  this.value = "Less description"    
                                                         y.style="display:inline;"
}
                                                     else{
y.style="display:none;"; 
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