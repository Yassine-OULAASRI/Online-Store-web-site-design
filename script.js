
	title = document.querySelector("head title").innerHTML;
	if (title == "Products" || title == "OrdiShop") {
		var valScroll; 
		window.onscroll = function() {
			valScroll = window.pageYOffset;
			var disp = document.getElementsByClassName("goUp");
			if (valScroll > 500) {
				disp[0].style.display = 'block';
			}
			else {
				disp[0].style.display = 'none';
			}
		} 
	}
	function up() {
		document.documentElement.scrollTop = 0;
	}

	// $(document).click((event) => {
 //  	if (!$(event.target).closest('#div1').length) {
 //    	menuDown();
 //    	logoutMenu();
 //  	}        
	// }); 

	var a = 1;
	var b = 1;
	function menuDown() {
		if (a) {
			document.getElementById("sideBar").style.display = 'flex';
			if (!b) {
				document.getElementById("logoutbox").style.display = 'none';
				b =! b;
			}
		}
		else
			document.getElementById("sideBar").style.display = 'none';
		a =! a;
	}

	function logoutMenu() {
		if (b) {
			document.getElementById("logoutbox").style.display = 'flex';
			if (!a) { 
				document.getElementById("sideBar").style.display = 'none';
				a =! a;
			}
		}
		else
			document.getElementById("logoutbox").style.display = 'none';
		b =! b;
	}

	var products = [];
	for(let i=1; i<25; i++)
		products[i]=document.querySelector('.c'+i);
	

	var cart = document.querySelectorAll(".addtocart");
	cart.forEach( function(element, index) {
		element.addEventListener('click', () => { cartNumber(index);});
	});

	var addedProd = [
		{name:null,price:0,inCart:0, tag:-1, sum:0},{name:null,price:0,inCart:0, tag:-1, sum:0},
		{name:null,price:0,inCart:0, tag:-1, sum:0},{name:null,price:0,inCart:0, tag:-1, sum:0},
		{name:null,price:0,inCart:0, tag:-1, sum:0},{name:null,price:0,inCart:0, tag:-1, sum:0},
		{name:null,price:0,inCart:0, tag:-1, sum:0},{name:null,price:0,inCart:0, tag:-1, sum:0},
		{name:null,price:0,inCart:0, tag:-1, sum:0},{name:null,price:0,inCart:0, tag:-1, sum:0},
		{name:null,price:0,inCart:0, tag:-1, sum:0},{name:null,price:0,inCart:0, tag:-1, sum:0},
		{name:null,price:0,inCart:0, tag:-1, sum:0},{name:null,price:0,inCart:0, tag:-1, sum:0},
		{name:null,price:0,inCart:0, tag:-1, sum:0},{name:null,price:0,inCart:0, tag:-1, sum:0},
		{name:null,price:0,inCart:0, tag:-1, sum:0},{name:null,price:0,inCart:0, tag:-1, sum:0},
		{name:null,price:0,inCart:0, tag:-1, sum:0},{name:null,price:0,inCart:0, tag:-1, sum:0},
		{name:null,price:0,inCart:0, tag:-1, sum:0},{name:null,price:0,inCart:0, tag:-1, sum:0}
	];
	var cmpt = 0;
	var total = 0;
	function cartNumber(index) {
		let prodNumber = localStorage.getItem('cartNumber');
		prodNumber = parseInt(prodNumber);
		if (prodNumber) {
			addedProd = JSON.parse(localStorage.getItem('addedProd'));
			total = parseInt(localStorage.getItem('total'));
			localStorage.setItem('cartNumber', prodNumber+1);
			document.querySelector('.fixedcart a span').textContent = prodNumber+1;
			document.querySelector('#productsnav div ul li a span').textContent = prodNumber+1;
			let classname = products[index+1].className;
			let j=0;
			for (let i=0; i<addedProd.length; i++) {
				if (addedProd[i].tag == index) {
					addedProd[i].inCart++;
					addedProd[i].sum = parseInt(addedProd[i].sum);
					addedProd[i].sum += parseInt(addedProd[i].price);
					total += parseInt(addedProd[i].price);
					i=addedProd.length;
					cmpt++;
					j=1;
				}
			}	
			if (j==0) {	 
				addedProd[prodNumber-cmpt].name = document.querySelector("."+classname+" .pcname h2").innerHTML;
				addedProd[prodNumber-cmpt].price = parseInt(document.querySelector("."+classname+" .pcprice h2 span",classname).innerHTML);
				addedProd[prodNumber-cmpt].sum = parseInt(addedProd[prodNumber-cmpt].price);
				addedProd[prodNumber-cmpt].inCart = 1;
				addedProd[prodNumber-cmpt].tag = index;
				total += parseInt(addedProd[prodNumber-cmpt].price);
			}
			
			console.log("The product is :", products[index+1]);
		}
			
		else { 
			localStorage.setItem('cartNumber', 1);
			document.querySelector('.fixedcart a span').textContent = 1;
			document.querySelector('#productsnav div ul li a span').textContent = 1;
			let classname = products[index+1].className;
			addedProd[0].name = document.querySelector("."+classname+" .pcname h2").innerHTML;
			addedProd[0].price = parseInt(document.querySelector("."+classname+" .pcprice h2 span",classname).innerHTML);
			addedProd[0].sum = parseInt(addedProd[0].price);
			total = parseInt(addedProd[0].price);
			addedProd[0].inCart = 1;
			addedProd[0].tag = index;
			console.log("The product is : ", products[index+1]);
		}
		localStorage.setItem("addedProd", JSON.stringify(addedProd));
		localStorage.setItem("total", total);
	}/*3325815*/

	fixedCart = document.querySelector(".fixedcart");

	function onLoadCounter() {
		if (title == "Products" || title == "Cart") {
			let prodNumber = localStorage.getItem('cartNumber');
			if (prodNumber != null) {
				document.querySelector("#productsnav div ul li a span").textContent = prodNumber;
				if(fixedCart)
					document.querySelector(".fixedcart a span").textContent = prodNumber;
			}
		}
	}

	function displayCart() {
		let cartItems = localStorage.getItem("addedProd");
		let total = localStorage.getItem("total");
		cartItems = JSON.parse(cartItems);
		let prodCont = document.querySelector(".product");
		/*console.log(cartItems);*/
		if (cartItems && prodCont) {
			prodCont.innerHTML = '';
			Object.values(cartItems).map(item => {
				if(item.name != null) {	
				prodCont.innerHTML += `
				<div class="product"> 
				  <div class="alignedProd">
					<i class="fa fa-times-circle-o" onclick="modifyCart(${item.tag}, 'x')">
					</i><img src="images/c1.webp" style="width:100px;">
					<div class="nme"><p>${item.name}</p></div>
					<div id="prodprice">${item.price} DH</div>
					<div id="inC"><i class="fa fa-arrow-circle-o-left" onclick="modifyCart(${item.tag}, '-')">
					</i> x${item.inCart}<i class="fa fa-arrow-circle-o-right" 
					onclick="modifyCart(${item.tag}, '+')"></i></div>
					<div id="prodsum">${item.sum} DH</div>
				  </div>
				</div>
				`;
				}
			});

			prodCont.innerHTML += `
				<div class="tot">
					<div> <p> TOTAL : ${total} DH </p></div>
					<button type="button" onclick="buynow()"><p>Buy Now</p>
					<i class="fa fa-spinner" aria-hidden="true"></i></button> 
				</div>
			`;
		}	
	}

	function modifyCart(addTag, c) {
		/*console.log(addTag);*/
		let prodNb = localStorage.getItem('cartNumber');
		let items = JSON.parse(localStorage.getItem("addedProd"));
		let total = parseInt(localStorage.getItem('total'));
		/*console.log(total);*/
		/*console.log(items);*/
		if (c=='+') {
			for (let i=0; i<items.length; i++) {
				if (items[i].tag == addTag) {
					items[i].inCart++;
					items[i].sum += items[i].price;
					total += items[i].price;
					prodNb++;
				}
			}
		}
		if (c=='-') {
			for (let i=0; i<items.length; i++) {
				if (items[i].tag == addTag) {
					items[i].inCart--;
					items[i].sum -= items[i].price;
					total -= items[i].price;
					prodNb--;
				}
			}
		}
		if (c=='x') {
			for (let i=0; i<items.length; i++) {
				if (items[i].tag == addTag) {
					total -= items[i].sum;
					prodNb -= items[i].inCart;
					items.splice(i, 1);
				}
			}
		}
		localStorage.setItem("addedProd", JSON.stringify(items));
		localStorage.setItem("total", total);
		localStorage.setItem("cartNumber", prodNb);
		displayCart();
		onLoadCounter();
		/*console.log(total);*/
	}

	function buynow() {
		let iSpin = document.querySelector(".tot button i");
		iSpin.style.transform = "rotate(600deg)";
		let Conts = document.querySelector(".cart");
		let Nb = localStorage.getItem('cartNumber');
		if(Nb==0) {
			alert("Please choose at least one product from Products' page")
		}
		else {
			Conts.innerHTML=" ";
			Conts.innerHTML= `
		 	<div class="tnx">
	          <h2>Thank you for your purchase</h2>
	        </div>
	        `;
	        let prodNb = parseInt(localStorage.getItem("cartNumber"));
			let items = JSON.parse(localStorage.getItem("addedProd"));
			let tot = parseInt(localStorage.getItem("total"));
			prodNb = 0;
			for (let i=0; i<items.length; i++) {
				items[i].name = null;
				items[i].price = 0;
				items[i].inCart = 0; 
				items[i].tag = -1; 
				items[i].sum = 0;
			}
			tot = 0;
	        localStorage.setItem("addedProd", JSON.stringify(items));
			localStorage.setItem("total", tot);
			localStorage.setItem("cartNumber", prodNb);
		}
		onLoadCounter();
		displayCart();
	}

	onLoadCounter();
	displayCart();
