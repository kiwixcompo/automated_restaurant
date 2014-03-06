<?php 
$page = 'Menu';

include 'header.php'; ?>

	<div id="carte">
		<div id="carte-top" class="wrap"></div>
		<div id="content-block" class="wrap">
					
			<div class="separator top-separator content left"></div>
			<div class="separator top-separator content right"></div>

			<div id="main" class="content">	
				
				<div class="dmtmenu dmtmenu-category">
				
					<h1>Breakfast</h1>
						
					<div class="category-desc clearfix">
						<p>Donec congue, dolor nec gravida fringilla, lorem neque vehicula odio,
						a congue massa est eu diam. Integer cursus, nisl id tempus sollicitudin,
						leo turpis molestie velit, vel euismod diam ante in sem. Maecenas tempor
						elit in ligula sagittis feugiat. Integer.</p>
					</div>

					<table class="fulltable">
					
						<tr class="dmtmenu-item">
							<td>
								<h5><span>Nom Nom Nom</span></h5>
								<details class="small">
									<p>Nom nom nom nom nom nom nom nom nom nom nom nom nom nom nom nom nom nom nom nom nom nom.</p>
								</details>
							</td>
							<td class="dmtmenu-price">$13.00</td>
						</tr>
						
						<tr class="dmtmenu-item">
							<td>
								<h5><span>
								<a rel="lightbox[1]" href="demo_images/spaghetti.jpg" title="Mauris ornare">
									<img src="images/eye.png" alt="" class="icon" />Mauris ornare</a></span></h5>
								<details class="small">
									<p>Nam quis enim non nunc fermentum volutpat at ac nunc. Maecenas a purus risus, sed pretium urna.</p>
								</details>
							</td>
							<td class="dmtmenu-price">$7.00</td>
						</tr>
						
						<tr class="dmtmenu-item">
							<td>
								<h5><span>
								<a rel="lightbox[1]" href="demo_images/sushi.jpg" title="Vitae ornare">
									<img src="images/eye.png" alt="" class="icon" />Vitae ornare</a></span></h5>
								<details class="small">
									<p>Nam quis enim non nunc fermentum volutpat at ac nunc. Maecenas a purus risus, sed pretium urna.</p>
								</details>
							</td>
							<td class="dmtmenu-price">$10.20</td>
						</tr>
						
						<tr class="dmtmenu-item">
							<td>
								<h5><span>
								<a rel="lightbox[1]" href="demo_images/sushi.jpg" title="Convallis ultricies">
									<img src="images/eye.png" alt="" class="icon" />Convallis ultricies</a></span></h5>
								<details class="small">
									<p>Nam quis enim non nunc fermentum volutpat at ac nunc. Maecenas a purus risus, sed pretium urna.</p>
								</details>
							</td>
							<td class="dmtmenu-price">$14.00</td>
						</tr>

					</table>

				</div>
				
			</div><!-- end main -->
	
			<div class="sidebar content">

				<div class="module">
					<h3>Choose a Menu</h3>
					<nav class="clearfix">
						<div class="cols-2 col-first">
							<div>
								<ul class="menu">
									<li><a href="#">Breakfast</a></li>
									<li class="active"><a href="#">Lunch</a></li>
									<li><a href="#">Dinner</a></li>
								</ul>
							</div>
						</div>
						<div class="cols-2 col-last">
							<div>
								<ul class="menu">
									<li><a href="#">Desserts</a></li>
									<li><a href="#">Drinks</a></li>
								</ul>
							</div>
						</div>
					</nav>
				</div>
				
				<div class="separator clear"></div>
				
				<div class="module">
					<h3>Chef's recommendation</h3>
					<p><a class="thumbnail" href="demo_images/sushi.jpg" rel="lightbox[0]" title="Maecenas a purus risus">
						<img class="caption left" src="demo_images/sushi_thumb.jpg" border="0" title="Maecenas a purus risus" width="165" height="109" /></a>
					Mauris ornare libero in risus ullamcorper dignissim. Suspendisse metus libero, 
					dictum et laoreet hendrerit, dapibus non velit. Integer consectetur euismod sem 
					vitae vestibulum. Nam quis enim non nunc fermentum volutpat at ac nunc. 
					Maecenas a purus risus, sed pretium urna. Duis dui diam, volutpat sit amet vestibulum a,
					suscipit consectetur mauris. Nam dui eros, cursus vitae ornare elementum,
					placerat a ligula. Sed ac malesuada lacus. Duis convallis convallis ultricies.
					Vestibulum ullamcorper, sem eu pellentesque scelerisque.</p>
				</div>
				
			</div><!-- end sidebar -->
						
						
			<?php 
				include 'carte-footer.php'; 
				?>
			
		</div><!-- end #content-block -->
		
		<div id="carte-bottom" class="clear wrap"></div>
	</div><!-- end #carte -->
	
<?php 
	include 'footer.php'; 
	?>