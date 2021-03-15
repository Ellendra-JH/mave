

function myFunction() {
    document.getElementById('tabl').deleteRow(0)
 }
 
 function toDelete(that) {
            $(that).closest('tr').remove();
             }
 
 function toAdd() {
       var row = document.getElementById("samplerow"); 
       var table = document.getElementById("tabl");
 var x = document.getElementById("tabl").rows.length;
 
  clone = row.cloneNode(true); 
  $('table').append(clone);
     
     }