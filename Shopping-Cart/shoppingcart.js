window.onbeforeunload = function() {
    localStorage.setItem("theqty", document.getElementById("quantity").value);
    localStorage.setItem("body", document.getElementsByTagName("body").innerHTML);  
  }
  
   window.onload = function() {
 localStorage.getItem("body");

    document.getElementById("quantity").value = localStorage.getItem("theqty");
    if (document.getElementById("quantity").value == ""){
    document.getElementById("quantity").value = "1"
    localStorage.setItem("theqty", document.getElementById("quantity").value);  

    }
   document.getElementById("totalQuantity").innerText= localStorage.getItem("theqty");  

   



   let x = localStorage.getItem("theqty")*document.getElementById("price").dataset.value
   let yy = x.toFixed(2)
   let q = yy*0.05.toFixed(2);
   let g = yy*0.10.toFixed(2);
   document.getElementById("QST").innerHTML=q.toFixed(2);
   document.getElementById("beforeTax").innerText = yy;
   document.getElementById("price").innerText = yy;
    document.getElementById("GST").innerText = g.toFixed(2);
    let final = localStorage.getItem("theqty")*document.getElementById("price").dataset.value+localStorage.getItem("theqty")*document.getElementById("price").dataset.value*0.05+localStorage.getItem("theqty")*document.getElementById("price").dataset.value*0.10
   document.getElementById("finalPrice").innerHTML = final.toFixed(2)
  } 




let btnContinue=document.querySelector('.btn1'); 
let btnPay=document.querySelector('.btn2'); 

btnContinue.addEventListener('click', ()=>{
	window.location.href='../index.html'; 
});

const tableEL=document.querySelector('table'); 
function deleteRow(e){
	if(!e.target.classList.contains("btnED")){
		return;
	} 
	const btn=e.target;
	btn.closest("tr").remove(); 


   document.getElementById("totalQuantity").innerText=0;
   document.getElementById("QST").innerText=0;
   document.getElementById("beforeTax").innerText = 0;
   if (document.getElementById("price"))
   document.getElementById("price").innerText = 0;
   document.getElementById("GST").innerText=0;

   document.getElementById("finalPrice").innerText = 0
}

tableEL.addEventListener('click', deleteRow); 
//everything for price and quantity below


//taking value to increment decrement input value 




var valueCount; 
//Price 
var GSTTotal;
var QSTTotal;
var finalPriceTotal;
var taxBeforeTotal;  

//Price calculation function 
var price=document.getElementById("price").innerText; 
var total=price;
function priceTotal(){
	total=valueCount*price;  
	document.getElementById("price").innerText=(Math.round(total * 100) / 100).toFixed(2);
}
//price before tax 
var beforeTax=document.getElementById("beforeTax").innerText; 
document.getElementById("beforeTax").innerText=taxBeforeTotal=total; //Default total 
function taxBefore(){
	taxBeforeTotal=total;  
	document.getElementById("beforeTax").innerText=(Math.round(taxBeforeTotal* 100) / 100).toFixed(2);
}
//GST calculation
var GST=document.getElementById("GST").innerText; 
document.getElementById("GST").innerText=GSTTotal=(Math.round(total*0.35* 100) / 100).toFixed(2); //Default GST
function calculateGST(){
GSTTotal=total*0.10; 
document.getElementById("GST").innerText=(Math.round(GSTTotal* 100) / 100).toFixed(2);
}
//QST calculation
var QST=document.getElementById("QST").innerText;
document.getElementById("QST").innerText=QSTTotal=(Math.round(total*0.50* 100) / 100).toFixed(2); //Default GST
function calculateQST(){
QSTTotal=total*0.05; 
document.getElementById("QST").innerText=(Math.round(QSTTotal* 100) / 100).toFixed(2);
}
//total price after tax 
var finalPrice=document.getElementById("finalPrice").innerText; 
document.getElementById("finalPrice").innerText=finalPrice=(Math.round((total+QST+GST)* 100) / 100).toFixed(2); //Default final price 
function calculateFinalPrice(){
finalPriceTotal=total+QSTTotal+GSTTotal; 
document.getElementById("finalPrice").innerText=(Math.round(finalPriceTotal* 100) / 100).toFixed(2);
}
//total quantity
var totalQuantity=document.getElementById("totalQuantity").innerText; 
document.getElementById("totalQuantity").innerText=finalTotalQuantity=1; 
function calculateTotalQuantity(){
finalTotalQuantity=valueCount; 
document.getElementById("totalQuantity").innerText=finalTotalQuantity;
}

//addition button for quantity 
document.querySelector(".btn4").addEventListener("click",function(){
	//getting value of input 
	valueCount=document.getElementById("quantity").value; 
	
	//input value increment by 1
	valueCount++; 
	
	//setting increment input value 
	document.getElementById("quantity").value=valueCount; 
	
	if(valueCount>1|| valueCount == undefined){
        document.querySelector(".btn3").removeAttribute("disabled"); 
        document.querySelector(".btn3").classList.remove("disabled"); 
        } 
	
	//calling all the price functions
	priceTotal();
	taxBefore();
	calculateGST();
	calculateQST();
	calculateFinalPrice();
	calculateTotalQuantity();
}) 

//subtration button for quantity 
document.querySelector(".btn3").addEventListener("click", function(){
	//getting value of input 
	valueCount=document.getElementById("quantity").value; 
	
	//decrement value by 1 
	valueCount--; 
	
	//setting increment input value 
	document.getElementById("quantity").value=valueCount;
	
	if(valueCount==1){
		document.querySelector(".btn3").setAttribute("disabled","disabled"); 
	} 
	
	//calling all the pricie functions 
	priceTotal(); 
	taxBefore();
	calculateGST();
	calculateQST();
	calculateFinalPrice(); 
	calculateTotalQuantity();
})









