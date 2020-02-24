<?php
	session_start();
	if (isset($_SESSION['username'])){
		}
?> 
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>All products</title>

		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/common.css" />
		<link rel="stylesheet" type="text/css" href="css/style1.css" />
		<link rel="stylesheet" type="text/css" href="css/nav.css" />
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
		<script>document.documentElement.className = 'js';</script>
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
                            ?>
				<img onclick="basketshow()" id="basketbt" src="images/购物车图标.png" alt=""> </div>
			<div id="basket" >
				<div class="box">
					<img src="images2/xiuqiuhua.png" alt=""></div>
				<div class="productinfo" ><p>Hydrangea</p><p>5.99 GBP</p></div>

				<button><a href="inbasket.php">See Shopping Basket</a></button>
			</div>
		</div>
	</header>
		<main>

			<div class="data-bg-color">
				<div class="calendar">
					<div class="cube" data-bg-color="#9DA9BB" data-title="Hydrangea"></div>
					<div class="cube" data-bg-color="#E3CEA4" data-title="Sunflowers"></div>
					<div class="cube" data-bg-color="#908F82" data-title="Lily"></div>
					<div class="cube" data-bg-color="#B0828B" data-title="Rose"></div>
					<div class="cube" data-bg-color="#B7A097" data-title="Tulip"></div>
					<div class="cube" data-bg-color="#D4C0C1" data-title="Carnation"></div>

				</div>
				<div class="content">
<!--					<div class="content__block">-->
<!--						<h3 class="content__title">Hydrangea</h3>-->
<!--						<p class="content__description">If everyone demanded peace instead of another television set, then there'd be peace.</p>-->
<!--						<p class="content__meta">John Lennon</p>-->
<!--					</div>-->

<!--					<div class="content__number">0</div>-->
<!--					<button class="btn-back" aria-label="Back to the grid view">&crarr;</button>-->
				</div><!-- /content -->
			</div><!-- /calendar-wrap -->
		</main>
		<script src="js/charming.min.js"></script>
		<script src="js/anime.min.js"></script>
		<script src="js/textfx.js"></script>
		<script src="js/main.js"></script>
		<script src="js/menucon.js"></script>
	</body>
</html>
