
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

$url = Yii::getAlias("@web") . '/img/';
?>


<!DOCTYPE html>
<html>
<head>
<title>Ecommerce</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,600,800,700,500,300,100,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Arimo:400,700,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/component.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Fashions Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" 
		/>		
<script src="js/jquery.min.js"></script>
<script src="js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- start menu -->
</head>
<body>
<!--header-->
<div class="header2 text-center">
	 <div class="container">
		 <div class="main-header">
			  <div class="carting">
				 <ul><li><a href="login.html"> LOGIN</a></li></ul>
				 </div>
			 <div class="logo">
				 <h3><a href="index.html">NEW PRODUCT</a></h3>
			  </div>			  
			 <div class="box_1">				 
				 <a href="cart.html"><h3>Cart: <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)<img src="<?= $url ?>cart.png" alt=""/></h3></a>
				 <p><a href="javascript:;" class="simpleCart_empty">empty cart</a></p>
			 
			 </div>
			 
			 <div class="clearfix"></div>
		 </div>
		 <ul class="megamenu skyblue">
			<li><a href="index.html">HOME</a></li>							
			 <li><?= Html::a('Pupuk', ['/pertanian/men']) ?>
				  <div class="megapanel">
					  <div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>shop</h4>
								<ul>
									<li><a href="products.html">new arrivals</a></li>
									<li><a href="products.html">men</a></li>
									<li><a href="products.html">women</a></li>
									<li><a href="products.html">accessories</a></li>
									<li><a href="products.html">kids</a></li>
									<li><a href="products.html">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>help</h4>
								<ul>
									<li><a href="products.html">trends</a></li>
									<li><a href="products.html">sale</a></li>
									<li><a href="products.html">style videos</a></li>
									<li><a href="products.html">accessories</a></li>
									<li><a href="products.html">kids</a></li>
									<li><a href="products.html">style videos</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Products</h4>
								<ul>
									<li><a href="products.html">trends</a></li>
									<li><a href="products.html">sale</a></li>
									<li><a href="products.html">style videos</a></li>
									<li><a href="products.html">accessories</a></li>
									<li><a href="products.html">kids</a></li>
									<li><a href="products.html">style videos</a></li>
								</ul>	
							</div>												
						</div>						
						<div class="col1">
							<div class="h_nav">
								<h4>my company</h4>
								<ul>
									<li><a href="products.html">trends</a></li>
									<li><a href="products.html">sale</a></li>
									<li><a href="products.html">style videos</a></li>
									<li><a href="products.html">accessories</a></li>
									<li><a href="products.html">kids</a></li>
									<li><a href="products.html">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>popular</h4>
								<ul>
									<li><a href="products.html">new arrivals</a></li>
									<li><a href="products.html">men</a></li>
									<li><a href="products.html">women</a></li>
									<li><a href="products.html">accessories</a></li>
									<li><a href="products.html">kids</a></li>
									<li><a href="products.html">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>				
				<li><a href="#">PUPUK</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>shop</h4>
								<ul>
									<li><a href="products.html">new arrivals</a></li>
									<li><a href="products.html">men</a></li>
									<li><a href="products.html">women</a></li>
									<li><a href="products.html">accessories</a></li>
									<li><a href="products.html">kids</a></li>
									<li><a href="products.html">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>help</h4>
								<ul>
									<li><a href="products.html">trends</a></li>
									<li><a href="products.html">sale</a></li>
									<li><a href="products.html">style videos</a></li>
									<li><a href="products.html">accessories</a></li>
									<li><a href="products.html">kids</a></li>
									<li><a href="products.html">style videos</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Products</h4>
								<ul>
									<li><a href="products.html">trends</a></li>
									<li><a href="products.html">sale</a></li>
									<li><a href="products.html">style videos</a></li>
									<li><a href="products.html">accessories</a></li>
									<li><a href="products.html">kids</a></li>
									<li><a href="products.html">style videos</a></li>
								</ul>	
							</div>												
						</div>						
						<div class="col1">
							<div class="h_nav">
								<h4>my company</h4>
								<ul>
									<li><a href="products.html">trends</a></li>
									<li><a href="products.html">sale</a></li>
									<li><a href="products.html">style videos</a></li>
									<li><a href="products.html">accessories</a></li>
									<li><a href="products.html">kids</a></li>
									<li><a href="products.html">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>popular</h4>
								<ul>
									<li><a href="products.html">new arrivals</a></li>
									<li><a href="products.html">men</a></li>
									<li><a href="products.html">women</a></li>
									<li><a href="products.html">accessories</a></li>
									<li><a href="products.html">kids</a></li>
									<li><a href="products.html">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				 <li class="grid"><?= Html::a('About us', ['/pertanian/about']) ?></li>
             <li class="grid"><?= Html::a('Contact', ['/pertanian/contact']) ?></li>             
                <li><?= Html::a('Shop', ['/pertanian/shop']) ?>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>shop</h4>
								<ul>
									<li><a href="shop.html">new arrivals</a></li>
									<li><a href="shop.html">men</a></li>
									<li><a href="shop.html">women</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>help</h4>
								<ul>
									<li><a href="shop.html">trends</a></li>
									<li><a href="shop.html">sale</a></li>
									<li><a href="shop.html">style videos</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">style videos</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Products</h4>
								<ul>
									<li><a href="shop.html">trends</a></li>
									<li><a href="shop.html">sale</a></li>
									<li><a href="shop.html">style videos</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">style videos</a></li>
								</ul>	
							</div>												
						</div>						
						<div class="col1">
							<div class="h_nav">
								<h4>my company</h4>
								<ul>
									<li><a href="shop.html">trends</a></li>
									<li><a href="shop.html">sale</a></li>
									<li><a href="shop.html">style videos</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>popular</h4>
								<ul>
									<li><a href="shop.html">new arrivals</a></li>
									<li><a href="shop.html">men</a></li>
									<li><a href="shop.html">women</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>			
				
				</ul>			
			  <div class="clearfix"></div> 
	 </div>
</div>
<!--header//-->
<div class="about">
	 <div class="container">
			<ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">About</li>
		 </ol>
		 <h2>ABOUT US</h2>
		 <div class="about-sec">
			 <div class="about-pic"><img src="<?= $url ?>A.jpg" class="img-responsive" alt=""/></div>
			 <div class="about-info">
				 <p>Sed condimytui etorem ipsum dolor sitrol ametyre consectetur adipet tymolotymon wertunio wercinaloisyuing elit. 
				 Ted nectro placerat turpis nec rutrumit est. Maecholi enas toro aliquet tristique tellus.Sed condimytui etorem ipsum dolor sitrol ametyre consectetur adipet tymolotymon wertunio wercinaloisyuing elit. 
				 Ted nectroTed nectro placerat turpis nec rutrumit est. Maecholi enas toro aliquet tristique tellus. Maecholi enas toro aliquet tristique tellus.Sed condimytui etorem ipsum dolor sitrol ametyre consectetur adipet tymolotymon wertunio wercinaloisyuing elit. 
				 Morbi bibendum, lectus sed pretium semper, mauris ipsum laoreet justo, vel efficitur nisi elit sed felis. Aenean vel ipsum odio.</p>
				 <a href="blog-single.html">Read More..</a>
			 </div>
			 <div class="clearfix"></div>
		 </div>
		 <h3>OUR SPECIALS</h3>
		 <div class="about-grids">
			 <div class="col-md-3 about-grid">
				 <img src="<?= $url ?>1.jpg" class="img-responsive" alt=""/>
				 <a href="blog-single.html"><h4>Kurtis & Kurtas</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, recusandae, minima deserunt pariatur illo eos doloremque
				 Asperiores modi temporibus consequuntur tempore quibusdam!</p>
			 </div>
			 <div class="col-md-3 about-grid">
				 <img src="<?= $url ?>2.jpg" class="img-responsive" alt=""/>
				 <a href="blog-single.html"><h4>Salwars</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, recusandae, minima deserunt pariatur illo eos doloremque 
				 Asperiores modi temporibus consequuntur tempore quibusdam!</p>
			 </div>
			 <div class="col-md-3 about-grid pot-2">
				 <img src="<?= $url ?>3.jpg" class="img-responsive" alt=""/>
				 <a href="blog-single.html"><h4>Desi Look</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, recusandae, minima deserunt pariatur illo eos doloremque
				 Asperiores modi temporibus consequuntur tempore quibusdam!</p>
			 </div>
			 <div class="col-md-3 about-grid pot-1">
				 <img src="<?= $url ?>4.jpg" class="img-responsive" alt=""/>
				 <a href="blog-single.html"><h4>Designersaree</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, recusandae, minima deserunt pariatur illo eos doloremque 
				 Asperiores modi temporibus consequuntur tempore quibusdam!</p>
			 </div>
			 <div class="clearfix"></div>
			 <div class="bottom-grids">
			 <div class="col-md-3 about-grid flwr">
				 <img src="<?= $url ?>12.jpg" class="img-responsive" alt=""/>
				 <a href="blog-single.html"><h4>NEWLOOK</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, recusandae, minima deserunt pariatur illo eos doloremque
				 Asperiores modi temporibus consequuntur tempore quibusdam!</p>
			 </div>
			 <div class="col-md-3 about-grid flwr">
				 <img src="<?= $url ?>13.jpg" class="img-responsive" alt=""/>
				 <a href="blog-single.html"><h4>Meriea</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, recusandae, minima deserunt pariatur illo eos doloremque 
				 Asperiores modi temporibus consequuntur tempore quibusdam!</p>
			 </div>
			 <div class="col-md-3 about-grid flwr pot-2">
				 <img src="<?= $url ?>15.jpg" class="img-responsive" alt=""/>
				 <a href="blog-single.html"><h4>Woolen Shurg</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, recusandae, minima deserunt pariatur illo eos doloremque
				 Asperiores modi temporibus consequuntur tempore quibusdam!</p>
			 </div>
			 <div class="col-md-3 about-grid flwr pot-1">
				 <img src="<?= $url ?>16.jpg" class="img-responsive" alt=""/>
				 <a href="blog-single.html"><h4>Black Shurg</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, recusandae, minima deserunt pariatur illo eos doloremque 
				 Asperiores modi temporibus consequuntur tempore quibusdam!</p>
			 </div>
			 <div class="clearfix"></div>
			 </div>
		 </div>
	 </div>
</div>

<!--fotter-->
<div class="fotter-logo">
	 <div class="container">
	 <div class="ftr-logo"><h3><a href="index.html">NEW PRODUCT</a></h3></div>
	 <div class="ftr-info">
	 <p><a href="http://w3layouts.com/"></a> </p>
	</div>
	 <div class="clearfix"></div>
	 </div>
</div>
<!--fotter//-->

</body>
</html>