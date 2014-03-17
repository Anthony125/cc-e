<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen"> 
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script> 
    <script src="js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>
    <script src="js/tms-0.3.js" type="text/javascript"></script>
    <script src="js/tms_presets.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="js/jquery.equalheights.js" type="text/javascript"></script>    

</head>
<body id="page1">
	<!--==============================header=================================-->
    <header>
    	<div class="row-top">
        	<div class="main">
            	<div class="wrapper">
                	<h1><a href="index.html">Campus Cuisin-E<span></span></a></h1>
                    <nav>
                        <ul class="menu">
                            <li><a class="active" href="index.html">Home</a></li>
                            <li><a href="menu.php">Menu</a></li>
                            <li><a href="comp.php">Reviews</a></li>
                            <li><a href="contact.html">Contact</a></li>

                        </ul>
                        
                    </nav>
                </div>
            </div>
            
        </div>
        <div class="row-bot">
        	<div class="row-bot-bg">
            	<div class="main">
                	<h2>Online Food  <span>Delivery</span></h2>
                    <div class="slider-wrapper">
                        <div class="slider">
                            <ul class="items">
                                <li>
                                    <img src="images/slider-img1.jpg" alt="" />
                                </li>
                                <li>
                                    <img src="images/slider-img2.jpg" alt="" />
                                </li>
                                <li>
                                    <img src="images/slider-img3.jpg" alt="" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content"><div class="ic"></div>
        <div class="main">
            <div class="wrapper img-indent-bot">
                <article class="col-1">
                 <input type="button" value="             Login" onClick="location.href='login.html'" class="button-1">
                </article>
                <article class="col-1">
                	<input type="button" value="  Register Restraunt  "onClick="location.href='hotel_add.html'" class="button-1">
                </article>
                <article class="col-2">
                	<input type="button" value=" Customer Registration "onClick="location.href='registration_form.html'" class="button-1" >
                </article>
            </div>
            <div class="wrapper">
            	<article class="column-1">
                	<div class="indent-left">
                        <div class="maxheight indent-bot">
                            
                        </div>
                       
                    </div>                </article>
                <article class="column-2">
                	<article class="column-2">
                	<div class="maxheight indent-bot">
                        <h3 class="p1">Campus Cuisin-E</h3>
                        <h6 class="p2">We provide service at your footstep. Sit at home and order your food.We are allowing Cash On Delivery Option.So why wait? Browse through the menu,select the item of your choice and place your order. Happy munching food!</h6>
                        <p class="p2">Restaurants can register on this site and update about the menu in their hotel.Customers can lazily sit at home and place an order. Within the blink of an eye,you would be staring at your delicious meal. </p>                        
                    </div>
                    </article>
            </div>
        </div>
    </section>
    
	<!--==============================footer=================================-->
    <footer>
        <div class="main">
        	<div class="aligncenter">
            	
            </div>
        </div>
    </footer>
    <script type="text/javascript"> Cufon.now(); </script>
    <script type="text/javascript">
		$(window).load(function() {
			$('.slider')._TMS({
				duration:1000,
				easing:'easeOutQuint',
				preset:'slideDown',
				slideshow:7000,
				banners:false,
				pauseOnHover:true,
				pagination:true,
				pagNums:false
			});
		});
    </script>
</body>
</html>
