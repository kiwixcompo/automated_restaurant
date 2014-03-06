<!DOCTYPE html>

<html lang="en-gb">

<head>
	<!--[if lt IE 7]><style type="text/css">html{display:none;}</style><script>alert('Please get a new browser!');</script><![endif]-->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	<script>!window.jQuery && document.write('<script src="js/jquery.1.5.2.js"><\/script>')</script>

	<script>
		jQuery.noConflict();
	</script>

	<!--[if IE]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="robots" content="index, follow" />
	<meta name="keywords" content="restaurant, cafe, template, coffee shop, te contei" />
	<meta name="rights" content="Demente Design" />
	<meta name="language" content="en-GB" />
	<meta name="title" content="Welcome to Te Contei" />
	<meta name="description" content="Te Contei restaurant template demo." />

	<title>Automated Restaurant - <?php echo $page; ?></title>
	
	<link href="favicon.ico" rel="shortcut icon" />

	<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/template.css" media="screen" />
	<link rel="stylesheet" href="css/colorbox.css" />
	<link rel="stylesheet" href="css/options.php" /> 
	
	<noscript>
		<style>
		#nav li:hover > ul, #nav li ul li:hover > ul,.sidebar ul.menu li:hover > ul, .sidebar ul.menu ul li:hover > ul{display: block;}
		</style>
	</noscript>

	<script src="js/scripts.js"></script>
	
	<script>	
		jQuery(function(){
			
			jQuery("#content-block").preloader({
				delay: 100
			});
						
			jQuery('.jquery-menu').enhanceMenu({
				effect: 'slide',
				duration: 200,
				delayIn: 100,
				delayOut: 100			
			});
			
		});
	</script>
	
</head>

<!--[if IE 7 ]>    <body class="ie7 ie"> <![endif]--> 
<!--[if IE 8 ]>    <body class="ie8 ie"> <![endif]--> 
<!--[if !IE]><!--> <body> <!--<![endif]-->

	<div id="headercloth"></div>
	<header id="header" class="clearfix">
		<div class="wrap">
	
			<div id="logo" class="left">
				<a href="index.php">
					<!-- Te Contei Restaurant Template Demo -->
					<img src="images/logos/logo.png" alt="Te Contei Restaurant Template Demo" />
				</a>
			</div>

			<?php $active = 'current active'; ?>
			
			<div id="nav">
				<nav class="jquery-menu clearfix">
					<ul class="menu">
						<li<?php if($page == 'Home') echo ' class="'.$active.'"'; ?>><a href="view_reservations.php">View Reservations</a></li>
						<li class="<?php if($page == 'Menu') echo $active.' '; ?>parent"><a href="all_menu.php">Add Items</a>
							<ul>
								<li><a href="add_food.php">Food</a></li>
								<li><a href="add_soup.php">Soup</a></li>
								<li><a href="add_drink.php">Drink</a></li>
								<li><a href="add_dessert.php">Dessert</a></li>
							</ul>
						</li>
						<li class="<?php if($page == 'Menu') echo $active.' '; ?>parent"><a href="all_menu.php">View Items</a>
							<ul>
								<li><a href="view_food.php">Food</a></li>
								<li><a href="view_soup.php">Soup</a></li>
								<li><a href="view_drinks.php">Drink</a></li>
								<li><a href="view_dessert.php">Dessert</a></li>
							</ul>
						</li>
						<!-- <li<?php /*if($page == 'Typography') echo ' class="'.$active.'"'*/; ?>><a href="typography.php" >Typography</a></li> -->
						<!-- <li<?php /*if($page == 'Blog') echo ' class="'.$active.'"'*/; ?>><a href="blog.php">Blog</a></li> -->
						<li<?php if($page == 'Gallery') echo ' class="'.$active.'"'; ?>><a href="view_orders.php">View Orders</a></li>
						<li<?php if($page == 'Contact') echo ' class="'.$active.'"'; ?>><a href="logout.php">Logout</a></li>
					</ul>
				</nav>
			</div>
			
		</div>
	</header>

	<div class="clear"></div>