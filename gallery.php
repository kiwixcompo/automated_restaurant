<?php 
$page = 'Gallery';

include 'header.php'; ?>

	<div id="carte">
		<div id="carte-top" class="wrap"></div>
		<div id="content-block" class="wrap">

			<div class="separator top-separator content left"></div>
			<div class="separator top-separator content right"></div>
			
			<div id="main" class="content fullwidth">
				
				<h1 class="article-title">Gallery</h1>
		
				<p>Vivamus eu dui nisi. Nunc at nunc magna, sed egestas arcu. Quisque erat risus,
				facilisis pretium gravida nec, mattis at ligula. Sed vulputate semper arcu in commodo. 
				Duis fringilla tincidunt eleifend. Cras neque metus, pulvinar et interdum a, placerat sit amet risus. 
				Duis tortor urna, imperdiet eget adipiscing vulputate, adipiscing ut orci. Nam hendrerit consectetur massa, 
				nec accumsan neque commodo et. Nunc in est in magna semper placerat ut eget elit. Aliquam ut mi ante.</p>
				
				<div class="gallery">
					<ul class="clearfix">
						<li>
							<a href="demo_images/meat.jpg" rel="lightbox" title="Image Title">
							<img width="192" height="130" src="demo_images/meat_thumb.jpg" alt="Image Title" /></a>
						</li>
						
						<li>
							<a href="demo_images/sushi.jpg" rel="lightbox" title="Image Title">
							<img width="192" height="130" src="demo_images/sushi_thumb.jpg" alt="Image Title" /></a>
						</li>
						
						<li>
							<a href="demo_images/meat.jpg" rel="lightbox" title="Image Title">
							<img width="192" height="130" src="demo_images/meat_thumb.jpg" alt="Image Title" /></a>
						</li>
						
						<li>
							<a href="demo_images/seafood.jpg" rel="lightbox" title="Image Title">
							<img width="192" height="130" src="demo_images/seafood_thumb.jpg" alt="Image Title" /></a>
						</li>
						
						<li>
							<a href="demo_images/spaghetti.jpg" rel="lightbox" title="Image Title">
							<img width="192" height="130" src="demo_images/spaghetti.jpg" alt="Image Title" /></a>
						</li>
						
						<li>
							<a href="demo_images/meat.jpg" rel="lightbox" title="Image Title">
							<img width="192" height="130" src="demo_images/meat_thumb.jpg" alt="Image Title" /></a>
						</li>
						
						<li>
							<a href="demo_images/seafood.jpg" rel="lightbox" title="Image Title">
							<img width="192" height="130" src="demo_images/seafood_thumb.jpg" alt="Image Title" /></a>
						</li>
						
						<li>
							<a href="demo_images/sushi.jpg" rel="lightbox" title="Image Title">
							<img width="192" height="130" src="demo_images/sushi_thumb.jpg" alt="Image Title" /></a>
						</li>
						
						<li>
							<a href="demo_images/meat.jpg" rel="lightbox" title="Image Title">
							<img width="192" height="130" src="demo_images/meat_thumb.jpg" alt="Image Title" /></a>
						</li>
						
						<li>
							<a href="demo_images/sushi.jpg" rel="lightbox" title="Image Title">
							<img width="192" height="130" src="demo_images/sushi_thumb.jpg" alt="Image Title" /></a>
						</li>
						
						<li>
							<a href="demo_images/spaghetti.jpg" rel="lightbox" title="Image Title">
							<img width="192" height="130" src="demo_images/spaghetti.jpg" alt="Image Title" /></a>
						</li>
						
						<li>
							<a href="demo_images/spaghetti.jpg" rel="lightbox" title="Image Title">
							<img width="192" height="130" src="demo_images/spaghetti.jpg" alt="Image Title" /></a>
						</li>
					</ul>
					
				</div>
				
				<ul class="pagination">
					<li class="first"><a href="#" class="disabled">Start</a></li>
					<li class="prev"><a href="#" class="disabled">Prev</a></li>
					<li><a href="#" class="disabled">1</a></li>
					<li><a href="#" title="2">2</a></li>
					<li class="next"><a title="Next" href="#">Next</a></li>
					<li class="last"><a title="End" href="#">End</a></li>
				</ul>
				
			</div><!-- end main -->
			
			<?php 
				include 'carte-footer.php'; 
				?>
			
		</div><!-- end #content-block -->
		
		<div id="carte-bottom" class="clear wrap"></div>
	</div><!-- end #carte -->
	
<?php 
	include 'footer.php'; 
	?>