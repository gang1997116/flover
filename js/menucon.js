
window.onload=function(){
    var oDiv = document.getElementById("nav1");
    oDiv.style.display = "none";
    var basket = document.getElementById("basket");
    basket.style.display = "none";
}
function doHide(){
    var oDiv = document.getElementById("nav1");
    // var oButton = document.getElementById("menu");

    if (oDiv.style.display =="none")
    {
        oDiv.style.display = "flex";

    }else {
        oDiv.style.display = "none";

    }

}

function basketshow() {
    var oDiv = document.getElementById("basket");
    // var oButton = document.getElementById("menu");

    if (oDiv.style.display =="none")
    {
        oDiv.style.display = "block";

    }else {
        oDiv.style.display = "none";

    }
}
