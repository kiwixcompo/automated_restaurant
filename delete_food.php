<?php
	 $page = 'Delete Food'; 
	 include 'dashboard_header.php';
?>

	<div id="carte">
	<div id="carte-top" class="wrap"></div>
	<div id="content-block" class="wrap">
	
	<div class="separator top-separator content left"></div>
	<div class="separator top-separator content right"></div>
	<div id="main" class="content fullwidth">

	<article class="article art">

	<div class="article-body">

<?php
include 'db.php';
$food_id = $_GET['id'];

// Connect to Database

$sql = "DELETE FROM food WHERE id='$food_id'";

if($pdo->query($sql)){
    echo 'Food Deleted Successfully. Click <a href="view_food.php">here</a> to go back.';
}
?>

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