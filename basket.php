<?php
	session_start();
	if (isset($_SESSION['username'])){
		}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Product Details</title>
    <link type="text/css" rel="stylesheet" href="css/nav.css">
 <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<style>
body,html{ position: absolute; bottom:0; left:0; top:0; width: 100%; height:100%; background-color: #ffffff; font-family: 'Montserrat' ;}
*{padding:0; margin:0;}

li{list-style:none;}
img{border:none;}
.bleft{width:50%; height:100%;   position: fixed; background-color: #EEE9E0;}
.slide{position:relative; margin:20% auto; width:60vh; overflow:hidden;}
.slide .big{ position:relative; overflow:hidden; left:0;top:0;}
.slide a{position:absolute; top:25vh; opacity:0;z-index:10;}
.slide .big li{float:left; width:60vh; }
.slide .big  li img{width:100%;display:block;}
.slide .prev{left:-10px;}
.slide .next{right:-10px;}
.slide .small{ margin-top:5px; width:100px; position:relative;}
.slide .small li{ float:left;margin-right:5px; width:90px; background:#000;}
.slide .small li:last-child{ margin-right:0;}
.slide .small li img{width:100%;display:block; opacity:0.5;}
.bright{
    width:50%;  display: block; position: relative; background-color: #E9D8D0;
    margin-left: 50%;
}

a{
    cursor: pointer;

    text-decoration: none;
    color: #000;

}
h1{
        padding-top: 20%;
        padding-bottom: 6%;
        font-size:90px;
        text-align: center;
        font-weight: 200;
    }
h2{
    padding:2% 12% 1%;
    font-size: 1.8em;
    font-weight: 200;
}
p{
     padding:2% 12%;
    text-align: left;
    line-height: 25px;
    font-size: 1.2em;
    font-weight: 100;
    word-wrap:break-word;
    word-break:normal;
}
span{
    padding:2% 12%;
    font-size: 1.6em;
    font-weight: 100;
}
span img{
    width:40%;
}
#add{
    padding-left: 58%;
    padding-right: 12%;
    width:30%;
    margin-top: -7%;
}
#price{ font-size: 1.2em; padding:10% 12% 0% 12%;}
.banner-top-one {
    margin-top: 7%;
    margin-bottom:7%;
    margin-left: 20%;
    margin-right: 20%;
    width: 60%;
    background-color: #D6D6C0;
    height: 12px;
}
.banner-button {
    width: 96%;
    vertical-align: middle;
    text-align: right;

    margin-top: 15%;
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
<script src="js/single_lb.js"></script>
<script src="js/move1.js"></script>
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
                    <a class="c-main-nav__link" href="boxes.html">All Product</a>
                </li>
                <li class="c-main-nav__item">
                    <a class="c-main-nav__link" href="#coins">My Garden</a>
                </li>

            </ul>
        </div>
        <div class="middle"><a href="index.php"><img  class="center" src="images/资源%2057.png" alt=""></a> </div>
        <div class="right"><a>
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

            <button><a href="inbasket.php">See Shopping Basket</a></button>
        </div>
    </div>
</header>
<div class="bleft" >

<div class="slide" id="single_lb">

	<a href="javascript:;" class="prev"><img src="images2/prev.png"></a>
    <a href="javascript:;" class="next"><img src="images2/next.png"></a>
    <ul class="big">
		<li><img src="images2/xiuqiuhua.png"></li>
        <li><img src="images2/xiuqiuhua2.png"></li>
        <li><img src="images2/xiuqiuhua3.png"></li>


    </ul>

    <ol class="small">
        <li><img style="opacity:1" src="images2/xiuqiuhua.png"></li>
        <li><img src="images2/xiuqiuhua2.png"></li>
        <li><img src="images2/xiuqiuhua3.png"></li>


    </ol>

</div>
</div>

<div class="bright" id="top">
	<?php
    $id=$_GET["id"];
	$conn = new mysqli('127.0.0.1','s1919788','j9YxLg46Q5','s1919788');
	$sql="set names utf8";
	$result = $conn->query($sql);
	$sql = "SELECT * FROM flowerinfo where id=$id";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
		echo   "<h1>".$row["name"]."</h1>";
		echo   "<p>".$row["intro"]."</p>";
		echo   "<p id='price'>".$row["price"]."</p>";
		}
	?>
	<a onclick="document.getElementById('basket').style.display='block'"><img id="add" src="images/button1.png" alt=""></a>
	<?php
    $id=$_GET["id"];
	$conn = new mysqli('127.0.0.1','s1919788','j9YxLg46Q5','s1919788');
	$sql="set names utf8";
	$result = $conn->query($sql);
	$sql = "SELECT * FROM flowerinfo where id=$id";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
		echo   "<div class='banner-top-one'> </div>";
		echo   "<h2>Meanings of flowers</h2>";
		echo   "<p>".$row["meaning"]."</p>";
		echo   "<p>".$row["meaning2"]."</p>";
		echo   "<p>".$row["meaning3"]."</p>";
		echo   "<p>".$row["meaning4"]."</p>";
		echo   "<div class='banner-top-one'> </div>";
		echo   "<h2>How to plant it</h2>";
		echo   "<p>".$row["plant"]."</p>";
		echo   "<p>".$row["plant2"]."</p>";
		echo   "<p>".$row["plant3"]."</p>";
		echo   "<p>".$row["plant4"]."</p>";
		echo   "<p>".$row["plant5"]."</p>";
		echo   "<p>".$row["plant6"]."</p>";
		echo   "<span><img src='images/温度条.png' alt=''>".$row["temp"]."</span>";
	}
	?>
	
    <div class="banner-button"><img src="images/button6.png" alt=""> <a href="#top">Back to top</a></div>

</div>
</body>
</html>
