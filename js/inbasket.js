if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}
var i=0;
function addItemToCart(title, price, imageSrc) {
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-item')
    var cartItems = document.getElementById('basket')
    // var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    // for (var i = 0; i < cartItemNames.length; i++) {
    //     if (cartItemNames[i].innerText == title) {
    //         alert('This item is already added to the cart');
    //         return
    //     }
    // }
    var cartRowContents = `
        <div class="box">
            <img src="${imageSrc}" alt=""></div>
            <div class="productinfo"><p class="cart-item-title">${title}</p>
            <p class="cart-price">${price}</p></div>`

    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)

    var shopitems = document.createElement('div')
    shopitems.classList.add('product')
    var shoplist = document.getElementsByClassName('shoplist')[0]
    var shopitemContents = `
         <img src="${imageSrc}" alt="">
        <div class="productdetail">
            <div class="leftword">
                <p class="flowername">${title}</p>
                <p><span class="pprice">${price}</span><span> GBP</span></p>
                <p style="float: none"><span class="quantity-button" ><img style="padding-left: 0" class="addquantity" src="images/加号.svg" alt=""><span class="quantity" style="float: left">1</span>   <img class="reducequantity" src="images/减号.svg" alt=""></span></p>
              
            </div>
            <div class="rightword">
            <p><a class="deleteitem-button">
          <svg t="1585581272496" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2089" width="20" height="20"><path d="M51.231743-14.581824m32.912607 32.912607l921.552983 921.552983q32.912607 32.912607 0 65.825213l0 0q-32.912607 32.912607-65.825213 0l-921.552983-921.552983q-32.912607-32.912607 0-65.825213l0 0q32.912607-32.912607 65.825213 0Z" p-id="2090" fill="#B6BCA6"></path><path d="M1038.60994 51.243389m-32.912607 32.912607l-921.552983 921.552983q-32.912607 32.912607-65.825213 0l0 0q-32.912607-32.912607 0-65.825213l921.552983-921.552983q32.912607-32.912607 65.825213 0l0 0q32.912607 32.912607 0 65.825213Z" p-id="2091" fill="#B6BCA6"></path></svg>
                   </a></p>
                <p>Subtotal:</p>
                <p><span class="tprice">${price}</span><span> GBP</span></p>
                
            </div>
        </div>`

    shopitems.innerHTML = shopitemContents
    shoplist.append(shopitems)

}
function ready() {
    initialcart();
    var addquantityButton = document.getElementsByClassName('addquantity')
    for (var i = 0; i < addquantityButton.length; i++) {

        var button = addquantityButton[i]
        button.addEventListener('click', quantityAdded)
    }
    console.log(addquantityButton.length);
    var reducequantityButton = document.getElementsByClassName('reducequantity')
    for (var i = 0; i < reducequantityButton.length; i++) {
        var button = reducequantityButton[i]
        button.addEventListener('click', quantityReduced)
    }
    var removeCartItemButtons = document.getElementsByClassName('deleteitem-button')
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    }




}
function initialcart() {
    var storage=window.localStorage;
    //将JSON字符串转换成为JSON对象输出
    var json=storage.getItem("shopitems");
    var jsonObj=JSON.parse(json);
    if(jsonObj.length==0){
        var notice = document.createElement('div');
        notice.innerHTML=`<h3 style="text-align: center; margin-top: 3em;">You haven't chose any product.</h3>`
        var content=document.getElementsByClassName("content")[0];
        content.appendChild(notice);
        var inner=document.getElementsByClassName("inner")[0];
        inner.style.display="none";
    }
    else if(jsonObj.length!=0)
    {
     //storage.removeItem("shopitems");
    for(n=0;n<jsonObj.length; n++)
    {
        var title = jsonObj[n].title;
        var price = jsonObj[n].price;
        var imageSrc = jsonObj[n].img;
        addItemToCart(title, price, imageSrc);}
    console.log(jsonObj);
    updateCartTotal()}
}
function updateCartTotal() { //计算总数和小计
    var cartItemContainer = document.getElementsByClassName('shoplist')[0]
    var cartRows = cartItemContainer.getElementsByClassName('product')
    var total = 0
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('pprice')[0]
        var quantityElement = cartRow.getElementsByClassName('quantity')[0]
        var price = parseFloat(priceElement.innerText)
        var quantity = parseFloat(quantityElement.innerText)
        var subtotal=price*quantity;
        subtotal = Math.round(subtotal * 100) / 100
        cartRow.getElementsByClassName('tprice')[0].innerText =subtotal;
        console.log(subtotal);
        total = total + (price * quantity)
    }
    total = Math.round(total * 100) / 100
    document.getElementById('wprice').innerText =total
}
function quantityAdded(event) {
    var button = event.target;
    var quantity=parseFloat(button.parentElement.getElementsByClassName('quantity')[0].innerText);

    quantity++;
    if (isNaN(quantity) || quantity <= 0) {
        quantity = 1
    }
    button.parentElement.getElementsByClassName('quantity')[0].innerText=quantity;
    updateCartTotal()
}

function quantityReduced(event) {
    var button = event.target;
    var quantity=parseFloat(button.parentElement.getElementsByClassName('quantity')[0].innerText);
    quantity--;
    if (isNaN(quantity) || quantity <= 0) {
        quantity = 1
    }
    button.parentElement.getElementsByClassName('quantity')[0].innerText=quantity;
    updateCartTotal()
}
function removeCartItem(event) {
    var buttonClicked = event.target;
    var shopitem=buttonClicked.parentElement.parentElement.parentElement.parentElement.parentElement;
    var cartItemNames = shopitem.getElementsByClassName('flowername')[0].innerText;
    var storage=window.localStorage;
    //将JSON字符串转换成为JSON对象输出
    var json=storage.getItem("shopitems");
    var jsonObj=JSON.parse(json);
    var title=jsonObj[0].title;
    console.log(title);
    console.log(typeof (cartItemNames));


    for(var n=0; n<jsonObj.length; n++)
    {

        var title=jsonObj[n].title;
        if(title==cartItemNames)
        {   jsonObj.splice(n,1);
           }

     }
    shopitems=jsonObj;
    var d=JSON.stringify(shopitems);
    storage.setItem("shopitems",d);
    // jsonObj.splice(0,1);
    // shopitems=jsonObj;
    //         var d=JSON.stringify(shopitems);
    //         storage.setItem("shopitems",d);
    //         console.log(storage.shopitems);
    shopitem.remove();
    location.reload();
    initialcart();

}

function removeall() {
    var storage=window.localStorage;
    storage.removeItem("shopitems");
}