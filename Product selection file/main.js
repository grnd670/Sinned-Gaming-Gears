if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready();
}
function ready(){
         let removeBtn = document.getElementsByClassName('btn-danger');
         for (let i = 0; i < removeBtn.length; i++){
         let rBtn = removeBtn[i]
         rBtn.addEventListener('click', removeCartItem);
    }

    let quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (let i = 0; i < quantityInputs.length; i++){
        let input = quantityInputs[i];
        input.addEventListener('change', quantityChanged);
    }

    let addToCartButton = document.getElementsByClassName('shop-item-button');
    for (let i = 0; i < addToCartButton.length; i++){
        let button = addToCartButton[i];
        button.addEventListener('click', addToCartClicked);
    }

    document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked);

}

function purchaseClicked(){
    let error = document.getElementsByClassName('cart-item-title')[0];
    
    if(error == null){
        alert('There is no product in cart!');
    }else{
        alert('Redirecting to Payment..');
        let cartItems = document.getElementsByClassName('cart-items')[0];
        while (cartItems.hasChildNodes()){
            cartItems.removeChild(cartItems.firstChild);
            let onClick = document.getElementById('btn-purchase');
            onClick.href = "Payment.php";
        }
    }
    updateCartTotal();
}

function removeCartItem(event){
    let btnClicked = event.target
    btnClicked.parentElement.parentElement.remove()
    updateCartTotal();
}

function quantityChanged(event){
    let input = event.target
    if(isNaN(input.value) || input.value <= 0){
        input.value = 1;
    }
    updateCartTotal();
}

function addToCartClicked(event) {
    var button = event.target
    var shopItem = button.parentElement.parentElement.parentElement
    var title = shopItem.getElementsByClassName('shop-item-title')[0].innerText
    var price = shopItem.getElementsByClassName('shop-item-price')[0].innerText
    var imageSrc = shopItem.getElementsByClassName('shop-item-image')[0].src
    addItemToCart(title, price, imageSrc)
    updateCartTotal();
}

function addItemToCart(title, price,imageSrc){
    let cartRow = document.createElement('div');
    cartRow.classList.add('cart-row');
    let cartItems = document.getElementsByClassName('cart-items')[0];
    let cartItemNames = cartItems.getElementsByClassName('cart-item-title');
    for(let i = 0; i < cartItemNames.length; i++){
        if(cartItemNames[i].innerText == title){
            alert('The product is already in the cart');
            return
        }
    }
    let cartRowContainer = `
        <div class="cart-item cart-column">
        <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
        <span class="cart-item-title">${title}</span>
    </div>
        <span class="cart-price cart-column">${price}</span>
    <div class="cart-quantity cart-column">
        <input class="cart-quantity-input" type="number" value="1">
        <button class="btn btn-danger" type="button">REMOVE</button>
    </div>`
    cartRow.innerHTML = cartRowContainer;
    cartItems.append(cartRow);
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click',removeCartItem);
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change',quantityChanged);
}

function updateCartTotal(){
   let cartItemContainer = document.getElementsByClassName('cart-items')[0];
    let cartRows = cartItemContainer.getElementsByClassName('cart-row');
    let total = 0;

    for(let i = 0; i < cartRows.length; i++){
        let cartRow = cartRows[i]
        let priceElement = cartRow.getElementsByClassName('cart-price')[0]
        let quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        let price = parseFloat(priceElement.innerText.replace('₱','',));
        let quantity = quantityElement.value
        total = total + (price * quantity);

    }
    document.getElementsByClassName('cart-total-price')[0].innerText = '₱' +total;
    document.getElementsByClassName('shipping-total')[0].innerText = '₱' + (total + 60);
}