<?php 
	$page = 'Dashboard';
	include 'dashboard_header.php'; 
?>
	<div id="carte">
		<div id="carte-top" class="wrap"></div>
		<div id="content-block" class="wrap">
		
		<div class="separator top-separator content left"></div>
		<div class="separator top-separator content right"></div>
		<div id="main" class="content fullwidth">

		<article class="article art">

		<h1 class="article-title">Welcome Admin</h1>
		<div class="article-body">
		<blockquote style="width: 375px; height: 50px;">
			<p> Please ensure that the tasks below are achieved at their stipulated times.</p>
			
		</blockquote>

		<ul>
			<li>Delete all the reservations for the day after the closing time </li>
			<li>Hinder the display of an unavailable item for that day</li>
			<li>Attend to orders made immediately</li>
		</ul>
		</div>
	</article>
	</div>

	<div class="sidebar content">
	<div class="module">
		<p>
			This is just a placeholder for anything that might be placed here (Image or text) to fill the void...
		</p>
	</div>
				
	</div><!-- end sidebar -->


	<?php 
		include 'carte-footer.php'; 
	?>
	</div>
	<div id="carte-bottom" class="clear wrap"></div>
	</div>
<?php 
	include 'dashboard_footer.php'; 
?>