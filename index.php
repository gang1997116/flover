<?php
	session_start();
	if (isset($_SESSION['username'])){
		}
?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Flover</title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/swiper.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Quicksand&display=swap" rel="stylesheet">

    </head>
    <body>

    <div id="wrap">
        <div id="main">
            <section id="page1" class="page">
<div class="first">
    <img class="firstleft" src="images/firstbg.png" alt="">
    <div class="firstright" >

        <!--img class="firstrightup" src="images/verup.png" id="firstpic" onclick="document.getElementById('firstpic').style.opacity='0'"  alt="">
        <img class="firstrightunder" src="images/verunder.png" alt=""-->
    </div>

    <div class="c-main-nav" id="nav1">

    <ul class="c-main-nav__list js-focusRemover" >

        <li class="c-main-nav__item">
        </li>
        <li class="c-main-nav__item">
        </li>
		
        <li class='c-main-nav__item'>
                            	
								<?php if(isset($_SESSION['username'])){
									?>
									
									<a class="c-main-nav__link black" href="account.php?id=1">Account
								</a>
                               
                            <?php
								}else{
                            ?>
                            <a class="c-main-nav__link black" href="log.html">Log in</a>
                            
                            <?php
									}
                            ?>
        </li>
        <li class="c-main-nav__item">
            <a class="c-main-nav__link" href="boxes.php">Product</a>
        </li>
        <li class="c-main-nav__item">
            <a class="c-main-nav__link" href="inbasket.php">Basket</a>
        </li>
        <li class="c-main-nav__item">
            <a class="c-main-nav__link" href="">My Garden</a>
        </li>
    </ul>
    </div>

    <div class="firstline"></div>
    <img class="biglogo" src="images/主页logo字.png" alt="">
    <div class="about">
        <div class="left"><div class="aboutword"> <!--p>Flover is an online florist brand. </p--><p>Please choose your favorite bouquet or plant virtual flower here.</p><p> Beautiful flowers, for lovers, for you.</p><p style="text-decoration: underline"><a href="Report.pdf">Link to Report</a></p></div></div><div class="right">
        <img src="images/新右边花.png" class="big" alt=""><!--img src="images/firstpicunder.png" class="bigunder" alt=""--><!--img src="images/VER.png" class="ver" alt=""--></div>
    </div>
</div>
</section>
<section id="page2" class="page">
<div class="second">
    <img class="up" onmouseover="document.getElementById('secondpic').style.opacity='0'" onmouseleave="document.getElementById('secondpic').style.opacity='1'" src="images/secondpic.png" id="secondpic" alt=""><img class="under" src="images/secondbg.png" alt="">
    <div class="story">
        <h1>Our Story</h1>
        <p>
            The Flover brand was founded by three women: Xintong, Yinggang and Yi. The brand name means "For lovers". </p>

        <p>   They first studied design and digital media before moving on to the floral industry. Starting from this, they embarked on a passionate floral career. They love to share their feelings about flowers with others and to be passionate. This is why they often participates in floral art seminars and performance shows, walking at the forefront of the floral art world. </p>

        <p>    In view of their past digital design experience, they decided to create an online flower shop, combined digital technology to create a virtual flower cultivation platform, in an attempt to regain everyone's interest in planting flowers, therefore Flover was born.

        <p>   Join us and love flowers. </p>

        </p>
    </div>
</div>
            </section>
            <section id="page3" class="page">
<div class="third">
        <div class="banner-box">
            <div class="banner-top"></div>
            <div class="banner-title">

            </div>
            <div class="banner-top-one"> </div>
            <div class="banner-text">
               <p>View product</p>
            </div>

            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!--div class="banner-arrow">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </--div-->
                    <div class="swiper-slide swiper-slide-center none-effect">
                        <a href="javascript:;">
                            <img src="images/01.png" about="" title="">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="javascript:;">
                            <img src="images/02.png" about="" title="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="javascript:;">
                            <img src="images/03.png" about="" title="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="javascript:;">
                            <img src="images/04.png" about="" title="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="javascript:;">
                            <img src="images/05.png" about="" title="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="javascript:;">
                            <img src="images/06.png" about="" title="">
                        </a>
                    </div>
            
                </div>

            </div>
            <div class="swiper-pagination"></div>
<div class="banner-button"><img src="images/button6.png" alt=""> <a href="boxes.php">More</a></div>
            </div>
        </div>
</section>
<section id="page4" class="page">
<div class="contact" id="contact">

    <div class="banner-top"></div>
<!--    <div class="banner-top-one" > </div>-->
    <div class="content">
    <img src="images/层四logo.png" alt="">
    <h1>Contact us</h1>
    <p> +44 (0)123456789 </p>
    <p> abcdefghijk@lmn.com </p>
    <p> Alison House, Nicolson Street, Edinburgh, UK </p>
    <p> EH8 9DF </p>
    </div>
</div></section> </div></div>


        <script type="text/javascript">

            window.onload = function() {
                var swiper = new Swiper('.swiper-container',{
                    autoplay: 3000, //是否自动滚动
                    speed: 500,      //滚动速速
                    autoplayDisableOnInteraction: true,
                    loop: true,
                    centeredSlides: true,
                    slidesPerView: 4, //当前选中
                    pagination: '.swiper-pagination',
                    paginationClickable: true,
                    prevButton: '.swiper-button-prev', // 左右切换
                    nextButton: '.swiper-button-next', // 左右切换
                    onInit: function(swiper) {
                        swiper.slides[4].className = "swiper-slide swiper-slide-active"; //当前选中 状态
                    },
                    breakpoints: {
                        100: {
                            slidesPerView: 0,
                        }
                    }
                });
            }

        </script>
            <script type="text/javascript">
                var wrap = document.getElementById("wrap");
                var main = document.getElementById("main");
                var hei = document.body.clientHeight;
                wrap.style.height = hei + "px";
                var obj = document.getElementsByTagName("section");
                for(var i=0;i<obj.length;i++){
                    if(obj[i].className == 'page'){
                        obj[i].style.height = hei + "px";
                    }
                }
                //如果不加时间控制，滚动会过度灵敏，一次翻好几屏
                var startTime = 0, //翻屏起始时间
                    endTime = 0,
                    now = 0;
                //浏览器兼容
                if ((navigator.userAgent.toLowerCase().indexOf("firefox")!=-1)){
                    document.addEventListener("DOMMouseScroll",scrollFun,false);
                }
                else if (document.addEventListener) {
                    document.addEventListener("mousewheel",scrollFun,false);
                }
                else if (document.attachEvent) {
                    document.attachEvent("onmousewheel",scrollFun);
                }
                else{
                    document.onmousewheel = scrollFun;
                }
                document.getElementById("button").onclick = scrollFun;

                //滚动事件处理函数
                function scrollFun(event){
                    startTime = new Date().getTime();
                    var delta = event.detail || (-event.wheelDelta);
                    //mousewheel事件中的 “event.wheelDelta” 属性值：返回的如果是正值说明滚轮是向上滚动
                    //DOMMouseScroll事件中的 “event.detail” 属性值：返回的如果是负值说明滚轮是向上滚动
                    if ((endTime - startTime) < -1000){
                        if(delta>0 && parseInt(main.offsetTop) > -(hei*3)){
                            //向下滚动
                            now = now - hei;
                            toPage(now);
                        }
                        if(delta<0 && parseInt(main.offsetTop) < 0){
                            //向上滚动
                            now = now + hei;
                            toPage(now);
                        }
                        endTime = new Date().getTime();
                    }
                    else{
                        event.preventDefault();
                    }
                }
                function toPage(now){
                    $("#main").animate({top:(now+'px')},1000);     //jquery实现动画效果
                    //setTimeout("main.style.top = now + 'px'",1000);     javascript 实现动画效果
                }
            </script>


    </body>

</html>