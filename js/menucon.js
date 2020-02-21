

function doHide(){
    var oDiv = document.getElementById("nav1");
    // var oButton = document.getElementById("menu");

    if (oDiv.style.display =="flex")
    {
        oDiv.style.display = "none";

    }else {
        oDiv.style.display = "flex";

    }

}

function basketshow() {
    var oDiv = document.getElementById("basket");
    // var oButton = document.getElementById("menu");

    if (oDiv.style.display =="block")
    {
        oDiv.style.display = "none";

    }else {
        oDiv.style.display = "block";

    }
}
