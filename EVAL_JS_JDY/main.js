//////// MANAGE INPUT QTY ////////
const incQtyElem = document.querySelector('#quantity_inc_button');
const decQtyElem = document.querySelector('#quantity_dec_button');
const inputQtyElem = document.querySelector('#quantity_input');

incQtyElem.addEventListener('click', () => {
	inputQtyElem.value = (parseInt(inputQtyElem.value) ? parseInt(inputQtyElem.value) : 0) + 1;
});

decQtyElem.addEventListener('click', () => {
	inputQtyElem.value = (parseInt(inputQtyElem.value) ? parseInt(inputQtyElem.value) : 0) - 1;
	if(inputQtyElem.value < 0) {
		inputQtyElem.value = 0;
	}
});
//////// END MANAGE INPUT QTY ////////

//////// MANAGER CART CONTENT ////////
const tableCart = document.querySelector('tbody');
const cartBtn = document.querySelector("#cart");

cartBtn.addEventListener('click', () => {
	let cartContent = document.querySelector('.show-cart tbody');
	let productName = document.querySelector('.product_name');
	let cartTotal =  document.querySelector('.total-cart');
	let cartPrice = 1199.99;
	cartContent.innerHTML = "<tr><td>"+inputQtyElem.value +"</td><td>"+productName.innerHTML  +"</td><td>"+cartPrice+"€ =</td><td>"+cartPrice*inputQtyElem.value+"€</td></tr>";
	cartTotal.innerHTML = cartPrice*inputQtyElem.value;
		  
});
//////// END MANAGER CART CONTENT ////////