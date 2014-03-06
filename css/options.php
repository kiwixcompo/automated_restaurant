<?php header("Content-type: text/css"); ?>

<?php 
	/*-----------------------------------------------------------------------------------------------------------------
	// Options
	-----------------------------------------------------------------------------------------------------------------*/
	
	$linkColor = 'd3710b';					// Color for links
	$linkHoverColor = '545454';				// Color for hover state on links
	$footerLinkColor = 'b8a295';			// Color for links in the footer
	$clothPattern = 'bewitched.jpg';		// The pattern for the background tablecloth. Options are bewitched.jpg, larkspur2.jpg, plain.jpg and squared.jpg. 
	$googleFonts = 1;						// 1 if you want to use fonts from google for the headings and top menu
	$font = 'Dancing Script';				// The font. You also need to change the CSS link in header.php
	$footerModules = 4;						// Amount of footer columns. Can't be zero
	
	$fmoduleWidth = 100/$footerModules;
	?>

body
{
	background-image: url(../images/cloth-<?php echo $clothPattern; ?>);
}

#headercloth
{
	background-image: url(../images/header-cloth-<?php echo $clothPattern; ?>);
}

#header .wrap
{
	background-image: url(../images/header-highlight-<?php echo $clothPattern; ?>);
}

<?php if($googleFonts): ?>
#nav, h1, h2, h3, h4, h5, h6
{
	font-family: "<?php echo $font; ?>";
}
<?php endif; ?>

a, 
a:active, 
#nav a:hover 
{ 
	color: #<?php echo $linkColor; ?>; 
}

.leaf 
{ 
	background-color: #<?php echo $linkColor; ?>; 
}

a:hover 
{ 
	color: #<?php echo $linkHoverColor; ?>; 
}

.readmore:hover .leaf 
{ 
	background-color: #<?php echo $linkHoverColor; ?>; 
}

.dark-zone a
{
	color: #<?php echo $footerLinkColor; ?>;
}

.fmodule 
{ 
	width: <?php echo $fmoduleWidth; ?>%; 
}

<?php if ($googleFonts && $font == 'Dancing Script'): ?>

h1 { font-size: 2.5em; }

h2 { font-size: 2.3em; }

h3 { font-size: 1.8em; }

h4 { font-size: 1.6em; }

h5 { font-size: 1.4em; }

h6 { font-size: 1.2em; }

#fmodules h3 { font-size: 1.8em; }

#nav a { font-size: 1.3em; }

<?php endif; ?>

<?php if ($clothPattern == 'squared.jpg'): ?>

	#footer .wrap
	{
		padding: 20px;
	
		background: #1d1c1c url(../images/dark-grain.jpg);
		
		-moz-border-radius: 15px;
		-webkit-border-radius: 15px;
		border-radius: 15px;
	}

<?php endif; ?>