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
            <p class="cart-price">${price}<span> GBP</span></p></div>`

    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
}
function ready() {

    initialcart();

}
function initialcart() {
    var storage=window.localStorage;
    //将JSON字符串转换成为JSON对象输出
    var json=storage.getItem("shopitems");
    var jsonObj=JSON.parse(json);
    for(n=0;n<jsonObj.length; n++)
    {
        var title = jsonObj[n].title;
        var price = jsonObj[n].price;
        var imageSrc = jsonObj[n].img;
        addItemToCart(title, price, imageSrc);}
    console.log(jsonObj);
}