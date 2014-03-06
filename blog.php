<?php 
$page = 'Blog';

include 'header.php'; ?>

	<div id="carte">
		<div id="carte-top" class="wrap"></div>
		<div id="content-block" class="wrap">
					
			<div class="separator top-separator content left"></div>
			<div class="separator top-separator content right"></div>

			<div id="main" class="content">	
				
				<div class="blog">
				
					<article class="article">
			
						<details class="article-info details metadata">
							<span class="date">02 Feb 2011</span>
							<span class="article-author">Written by Super User</span>
							<span class="article-category"> in Blog</span>
						</details>
		
						<h2 class="article-title styled-header">
							<a href="#">Cras commodo sapien</a>
						</h2>

						<div class="article-body">
							<p><a class="thumbnail" href="demo_images/restaurant.jpg" rel="lightbox[]" title="Image">
							<img src="demo_images/restaurant-420x177.jpg" alt="Image" width="420" height="177" /></a>
							Nunc tempor dignissim ligula, eu aliquam dolor bibendum in. Fusce quis lorem sem, 
							sed adipiscing arcu. Pellentesque odio neque, fermentum sed tincidunt non, 
							bibendum id neque. Nulla eget enim ipsum. Nunc viverra, eros sit amet consectetur accumsan, 
							dui nisl lobortis dui, eu pretium turpis lorem consequat lectus. Sed eleifend varius justo, 
							tincidunt placerat tortor suscipit vitae. Suspendisse ullamcorper ante eget augue 
							aliquet placerat. Nullam a est nunc. Fusce ut augue et velit bibendum venenatis 
							vitae non magna. Donec id arcu quam. Morbi leo lorem, vehicula et suscipit id, 
							tristique  elementum metus. Morbi mollis dui eget odio venenatis quis cursus 
							metus  adipiscing. Nam id leo nisl. Suspendisse potenti. 
							Etiam vulputate ipsum  in sapien pulvinar nec consectetur nisi viverra.</p>
						</div>

						<a class="readmore" href="#">
						<span class="leaf"></span>Read more: Cras commodo sapien</a>
					</article>

					<div class="clear"></div>
					
					<article class="article">
			
						<div class="separator"></div>
						
						<details class="article-info details metadata">
							<span class="date">02 Feb 2011</span>
							<span class="article-author">Written by Super User</span>
							<span class="article-category"> in Blog</span>
						</details>
		
						<h2 class="article-title styled-header">
							<a href="#">Cras commodo sapien</a>
						</h2>

						<div class="article-body">
							<p><a class="thumbnail" href="demo_images/restaurant.jpg" rel="lightbox[]" title="Image">
							<img src="demo_images/restaurant-420x177.jpg" alt="Image" width="420" height="177" /></a>
							Nunc tempor dignissim ligula, eu aliquam dolor bibendum in. Fusce quis lorem sem, 
							sed adipiscing arcu. Pellentesque odio neque, fermentum sed tincidunt non, 
							bibendum id neque. Nulla eget enim ipsum. Nunc viverra, eros sit amet consectetur accumsan, 
							dui nisl lobortis dui, eu pretium turpis lorem consequat lectus. Sed eleifend varius justo, 
							tincidunt placerat tortor suscipit vitae. Suspendisse ullamcorper ante eget augue 
							aliquet placerat. Nullam a est nunc. Fusce ut augue et velit bibendum venenatis 
							vitae non magna. Donec id arcu quam. Morbi leo lorem, vehicula et suscipit id, 
							tristique  elementum metus. Morbi mollis dui eget odio venenatis quis cursus 
							metus  adipiscing. Nam id leo nisl. Suspendisse potenti. 
							Etiam vulputate ipsum  in sapien pulvinar nec consectetur nisi viverra.</p>
						</div>

						<a class="readmore" href="#">
						<span class="leaf"></span>Read more: Cras commodo sapien</a>
					</article>
					
				</div>
		 
			</div><!-- end main -->
	
			<div class="sidebar content">

				<div class="module">
					<h3>Navigation</h3>
					
					<nav class="clearfix">
						<div class="cols-2 col-first">
							<div>
								<ul class="menu">
									<li><a href="#" >Example Link 1</a></li>
									<li><a href="#" >Example Link 2</a></li>
								</ul>
							</div>
						</div>
						<div class="cols-2 col-last">
							<div>
								<ul class="menu">
									<li><a href="#" >Example Link 3</a></li>
									<li><a href="#" >Example Link 4</a></li>
								</ul>
							</div>
						</div>
					</nav>
				</div>
				
				<div class="separator clear"></div>
				
				<div class="module  menu cols-2 col-first">
					<div>
						<h3>Archive</h3>
						<ul class="archive-module menu cols-2 col-last">
							<li>
								<a href="#">August, 2010</a>
							</li>
							<li>
								<a href="#">July, 2010</a>
							</li>
						</ul>
					</div>
				</div>
				
				<div class="module  menu cols-2 col-last">
					<div>
						<h3>Categories</h3>
						<ul class="archive-module menu cols-2 col-last">
							<li>
								<a href="#">Category 1</a>
							</li>
							<li>
								<a href="#">Category 2</a>
							</li>
							<li>
								<a href="#">Category 3</a>
							</li>
						</ul>
					</div>
				</div>
				
				<div class="separator clear"></div>
				
				<div class="module">
					<h3>Popular Articles</h3>
					<ul class="article-list-mod mostread ">
						<li>
							<a href="#">One Article</a>
							<details class="details">Sat 10 July 2010</details>
						</li>
						<li>
							<a href="#">Another Article</a>
							<details class="details">Sat 10 July 2010</details>
						</li>
						<li>
							<a href="#">Yet Another Article</a>
							<details class="details">Sat 10 July 2010</details>
						</li>
						<li>
							<a href="#">Getting Started</a>
							<details class="details">Sat 10 July 2010</details>
						</li>
					</ul>
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