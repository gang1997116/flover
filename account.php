<?php
	session_start();
	if (isset($_SESSION['username'])){
		}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account</title>
    <link type="text/css" rel="stylesheet" href="css/nav.css">
    <link type="text/css" rel="stylesheet" href="css/account_style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <script src="js/menucon.js"></script>

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
                    <a class="c-main-nav__link" href="boxes.php">All Product</a>
                </li>
                <li class="c-main-nav__item">
                    <a class="c-main-nav__link" href="#coins">My Garden</a>
                </li>

            </ul>
        </div>
        <div class="middle"><a href="index.php"><img  class="center" src="images/资源%2057.png" alt=""></a> </div>
        <div class="right">
			<a href="log.html">
			<?php
								if(isset($_SESSION['username'])){
							?>
                            	<a href='#'><?=$_SESSION['username']?></a>
                                </a>
			<a href="logout.php">log out</a>
                            <?php
								}else{
                            ?>
                            <a href="log.html">log in | regist</a>
                            
                            <?php
									}
                            ?>
			<img onclick="basketshow()" src="images/购物车图标.png" alt=""> </div>
        <div id="basket" >
            <div class="box">
                <img src="images2/xiuqiuhua.png" alt=""></div>
            <div class="productinfo" ><p>Hydrangea</p><p>5.99 GBP</p></div>

            <button><a href="inbasket.php">See Shopping Basket</a></button>
        </div>
    </div>
</header>
<div class="bleft" >
    <div class="content">
        <h2>Hello!</h2>
        <div class="lcenter">
            <img src="images/用户头像.png" alt="">
            <?php
    $id=$_GET["id"];
	$conn = new mysqli('127.0.0.1','s1919788','j9YxLg46Q5','s1919788');
	$sql="set names utf8";
	$result = $conn->query($sql);
	$sql = "SELECT * FROM userinfo where id=$id";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
		echo   "<h3>".$row["firstname"]."</h3>";
		echo   "<P>".$row["username"]."</p>"; 
		echo   "<P>".$row["telephone"]."</p>";
	}
		?>
        </div>
    </div>
</div>
	
<div class="bright" id="top1">
<h3>Order History</h3>
    <div class="product">
        <img src="images2/xiuqiuhua.png" alt="">
        <div class="productdetail">
<div class="leftword">

	<?php
    $id=$_GET["id"];
	$conn = new mysqli('127.0.0.1','s1919788','j9YxLg46Q5','s1919788');
	$sql="set names utf8";
	$result = $conn->query($sql);
	$sql = "SELECT * FROM basket where id=$id";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
		echo   "<p id='flowername'>".$row["name"]."</p>";
		echo   "<p id='pprice'>".$row["price"]."</p>"; 
		echo   "<p id='quantity'>".$row["quantity"]."</p>";
		
	}
		?>
	</div>
<div class="rightword">
 <p>Subtotal:</p>
   <p id="tprice">5.99 GBP</p>
       </div>
        </div>
    </div>
<h3 style="margin-top: 1.6em">My address</h3>
	<?php
    $id=$_GET["id"];
	$conn = new mysqli('127.0.0.1','s1919788','j9YxLg46Q5','s1919788');
	$sql="set names utf8";
	$result = $conn->query($sql);
	$sql = "SELECT * FROM basket where id=$id";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
			echo   "<p style='color: #6D6875'>".$row["address"]."</p>";
		
	}
		?>
	
    <img onclick="document.getElementById('addressform').style.display='block'" class="addbutton" src="images/addaddress.png" alt="">
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
    </form>
    <a href=""><img id="save"  onclick="document.getElementById('myForm').submit()" src="images/save.png" alt=""></a>
    </div>
</div>
</body>
</html>