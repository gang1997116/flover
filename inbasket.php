<?php
	session_start();
	if (isset($_SESSION['username'])){
		}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>basket</title>
    <link type="text/css" rel="stylesheet" href="css/account_style.css">
    <link type="text/css" rel="stylesheet" href="css/nav.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <script src="js/menucon.js"></script>
    <style>
  body,html{
            background-color: #E7D6CE;
            height: fit-content;

        }
  .product{
      height: 10vw;

  }
  .product img{
      position: relative;
      width: calc(10vw + 4px);
      height: calc(10vw + 4px);
      display: block;
      float: left;
      padding-left: 3em;
  }
  .productdetail{
      float: left;
      margin-left: 2em;
      height: 100%;
      width: calc(100% - 19vw);
      border: 2px solid #B6BDA6;
      align-items: center;
  }
  .leftword p,.rightword p{
      line-height: calc(10vw/3);
      font-size: 1.4vw;
  }
.addressform{
    display: block;
    margin: 1rem 3rem;
    background-color: #ECE7DE;
    position: relative;
}

        .continue{
            margin-top:2em;
            width:16%;
            margin-left: calc(84% - 2em);}
        .whole{
            width: calc(90% + 2em);;
        }
        h1{

            font-size:60px;
            text-align: center;
            font-weight: 200;

        }
        .toptitle{
            padding: 6.7em 0 0;
            height: 25vh;
            /*line-height: 25vh;*/

        }
        .toptitle img{
            position:absolute;
            /*z-index: 0;*/
            height: 25vh;
            display: block;
            width: 44.3vh;
            padding: 0 calc((100% - 44.3vh)/2);

        }
        .chuizhijuzhong{
            position: absolute;
            padding-top:10vh ;
            /*vertical-align:middle;*/
            /*display: inline-block;*/
            /*height: 5vh;*/
            line-height: 5vh;
            font-size:58px;
            text-align: center;
            font-weight: 200;
            width:100%;
            font-family: 'Montserrat';
        }
        #forcontinue{
            display: none;
        }
        #save{

            height: 1px;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        #gotopay{
            width:15%;
            margin-left: calc(85% - 2em);
        }
        .banner-button {
            width: 96%;
            vertical-align: middle;
            text-align: right;

            margin-top: 5%;
            padding-bottom: 5%;


        }
        .banner-button a {
            display: inline-block;
            vertical-align: middle;
            text-align: center;
            height: auto;
            width: auto;
            line-height: 100%;
            padding: 15px 0px;
            position: relative;
            font-size: 1.5em;
            cursor: pointer;
            font-weight: 100;
        }
        .banner-button img{
            display: inline-block;
            vertical-align: middle;
            position: relative;
            width: 3em;
            margin-left: -1em;

        }
    </style>
</head>
<body>
<header>
    <div class="container">
        <div class="left"><img onclick="doHide()" id="menu" src="images/菜单标.png" alt=""></div>
        <div class="c-main-nav" id="nav1">

            <ul class="c-main-nav__list" >
                <li class="c-main-nav__item">
                    <a class="c-main-nav__link " href="index.php">Home</a>
                </li>
                <li class="c-main-nav__item">
                    <a class="c-main-nav__link" href="boxes.html">All Product</a>
                </li>
                <li class="c-main-nav__item">
                    <a class="c-main-nav__link" href="#coins">My Garden</a>
                </li>

            </ul>
        </div>
        <div class="middle"><a href="index.php"><img  class="center" src="images/资源%2057.png" alt=""></a> </div>
        <div class="right"><a href="log.html">
			<?php
								if(isset($_SESSION['username'])){
							?>
                            	<a href='account.php?id=1'><?=$_SESSION['username']?></a>
                                </a>
			<a href="logout.php">log out</a>
                            <?php
								}else{
                            ?>
                            <a href="log.html">log in</a>
                            
                            <?php
									}
                            ?> <img onclick="basketshow()" src="images/购物车图标.png" alt=""> </div>
        <div id="basket" >
            <div class="box">
                <img src="images2/xiuqiuhua.png" alt=""></div>
            <div class="productinfo" ><p>Hydrangea</p><p>5.99 GBP</p></div>

            <button ><a href="inbasket.php">See Shopping Basket</a></button>
        </div>
    </div>
</header>

<div class="toptitle" id="top">
    <img src="images/圆圈装饰.png" alt="">
<div class="chuizhijuzhong">
Thank you for choosing Flover</div></div>
<div class="inner" >
    <h3>You choosed:</h3>
    <div class="product">
        <img src="images2/xiuqiuhua.png" alt="">
        <div class="productdetail">
            <div class="leftword">
                <p id="flowername">Hydrangea</p>
                <p id="pprice">5.99 GBP</p>
                <p id="quantity">X1</p>
            </div>
            <div class="rightword">
                <p>Subtotal:</p>
                <p id="tprice">5.99 GBP</p>
            </div>
        </div>
    </div>


    <img onclick="document.getElementById('forcontinue').style.display='block'" class="continue" src="images/continue.png" alt="">
<div id="forcontinue">
    <h3 style="margin-top: 1.6em">Deliver address</h3>
    <div class="addressform" id="addressform">

        <form id="myForm" action="">
            <div class="half" style="margin-right:50% ">
                <label for="country">Country/Region</label>
                <input type="text" id="country" name="firstname" placeholder=" ">
            </div>

            <div class="half">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder=" ">
            </div>
            <div class="half">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder=" ">
            </div>
            <div class="whole">
                <label for="bname">Building Name</label>
                <input type="text" id="bname" name="firstname" placeholder=" ">
            </div>
            <div class="whole">
                <label for="street">Street Address</label>
                <input type="text" id="street" name="stadd" placeholder=" ">
            </div>
            <div class="half">
                <label for="city">City</label>
                <input type="text" id="city" name="city" placeholder=" ">
            </div>
            <div class="half">
                <label for="county">County</label>
                <input type="text" id="county" name="county" placeholder=" ">
            </div>
            <div class="half" style="margin-right:50% ">
                <label for="country">Postcode</label>
                <input type="text" id="postcode" name="postcode" placeholder=" ">
            </div>
            <div class="half" style="margin-right:50% ">
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" placeholder=" ">
            </div>
            <a href=""><img id="save" style="visibility: hidden"  src="images/save.png" alt=""></a>

        </form>
    </div>
    <h3 style="margin-top: 1.6em">Payment Information</h3>
        <div class="addressform" id="payform">


        <form id="myForm2" action="">


            <div class="half">
                <label for="fname">Card Number</label>
                <input type="text" id="card"  placeholder=" ">
            </div>
            <div class="half">
                <label for="lname">Holder’s Name</label>
                <input type="text" id="hname" placeholder=" ">
            </div>
            <div class="half">
                <label for="fname">Date of Expiry</label>
                <input type="text" id="expiry"  placeholder=" ">
            </div>
            <div class="half">
                <label for="lname">CVV</label>
                <input type="text" id="cvv"  placeholder=" ">
            </div>
            <a href=""><img id="save" style="visibility: hidden"  src="images/save.png" alt=""></a>
        </form>
    </div>
    <a href=""><img id="gotopay"  onclick="document.getElementById('myForm').submit()" src="images/gotopay.png" alt=""></a>
    <div class="banner-button"><img src="images/button6.png" alt=""> <a href="#top">Back to top</a></div>

</div>
</div>
</body>
</html>