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
}

tableEL.addEventListener('click', deleteRow); 

//setting default attributes to disabled of minus button 
document.querySelector(".btn3").setAttribute("disabled","disabled"); 

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
GSTTotal=total*0.35; 
document.getElementById("GST").innerText=(Math.round(GSTTotal* 100) / 100).toFixed(2);
}
//QST calculation
var QST=document.getElementById("QST").innerText;
document.getElementById("QST").innerText=QSTTotal=(Math.round(total*0.50* 100) / 100).toFixed(2); //Default GST
function calculateQST(){
QSTTotal=total*0.50; 
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
	
	if(valueCount>1){
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









