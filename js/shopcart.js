if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}
var i=0;
function addToCartClicked(event) {
    var title = document.getElementsByClassName('shop-item-title')[0].innerText
    var price = document.getElementsByClassName('shop-item-price')[0].innerText
    var imageSrc = document.getElementsByClassName('shop-item-image')[0].src

    addItemToCart(title, price, imageSrc);


}

function savelist(title, price, imageSrc){
    var cartItems = document.getElementById('basket')
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')

    if(!window.localStorage){
        alert("浏览器不支持localstorage");
    }else{
        var storage=window.localStorage;
        var json=storage.getItem("shopitems");
        if(json==null){
            var shopitems = [];
            i=0;
        }
        else if(json!=null)
        {var jsonObj=JSON.parse(json);
        shopitems=jsonObj;
        i=jsonObj.length;
            for (var i = 0; i < jsonObj.length; i++) {
                if (jsonObj[i].title == title) {
                    //alert('This item is already added to the cart');
                  return
                }

            }
        }
        var items={
            id:i++,
            title:title,
            price:price,
            img:imageSrc

        };
        shopitems.push(items);
        var d=JSON.stringify(shopitems);
        storage.setItem("shopitems",d);
        console.log(storage.shopitems);
    }
}

function addItemToCart(title, price, imageSrc) {
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-item')
    var cartItems = document.getElementById('basket')
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    document.getElementById("addednotice").classList.remove('addedani');
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
            //alert('This item is already added to the cart');

            document.getElementById("addednotice").classList.add('addedani');
            return
        }

    }

    var cartRowContents = `
        <div class="box">
            <img src="${imageSrc}" alt=""></div>
            <div class="productinfo"><p class="cart-item-title">${title}</p>
            <p class="cart-price">${price} GBP</p></div>`

    cartRow.innerHTML = cartRowContents;
    cartItems.append(cartRow);
    savelist(title, price, imageSrc)
}
function ready() {
    var addToCartButton = document.getElementById('add')
    addToCartButton.addEventListener('click', addToCartClicked)

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
