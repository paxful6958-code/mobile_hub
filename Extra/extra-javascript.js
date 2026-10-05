
//Add to Cart Function
function onLoadCartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');

    if(productNumbers) {
        document.querySelector('#cart-btn span').textContent = productNumbers;
    }
}


//Calling OnLoadCartNumbers
onLoadCartNumbers();

//Older Add to cart option

let carts = document.querySelectorAll('#add-cart');
//Event Listener to click on add to cart
for (let i=0; i < carts.length; i++) {
    carts[i].addEventListener('click', () => {
        cartNumbers(products[i]);
    })
}

//Add to cart Number Showing on Icon
function cartNumbers(product) {

    let productNumbers = localStorage.getItem('cartNumbers');
   

    productNumbers = parseInt(productNumbers);

    if( productNumbers) {
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('#cart-btn span').textContent = productNumbers + 1;
    } else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('#cart-btn span').textContent = 1;
    }
     setItem(product);
         
}
