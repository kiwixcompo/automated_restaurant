<?php 
	$page = 'Edit Food';
	include 'dashboard_header.php';
	include 'db.php'; 
?>

<?php 
	$food_id = $_GET['id'];
    try {
    $sql = "SELECT * FROM food WHERE id='$food_id'";
    $result = $pdo->query($sql);
    } catch (PDOException $e) {
      echo "Unable to find food" . $e->getMessage();
      
      exit(); 
    }
    while($row = $result->fetch()){
      $rows[] = array("id" => $row['id'], "food_name" => $row['food_name'], "food_detail" => $row['food_detail']);
    }
    $success = '';
?>

	<div id="carte">
		<div id="carte-top" class="wrap"></div>
		<div id="content-block" class="wrap">
		
		<div class="separator top-separator content left"></div>
		<div class="separator top-separator content right"></div>
		<div id="main" class="content fullwidth">

		<article class="article art">

		<div class="article-body">
			<?php foreach($rows as $food_list):?>
			<form action="" method="POST" accept-charset="utf-8">
				<h2>Edit Food</h2>
				
				<label id="contact_textmsg" for="contact_text">Food Name</label><br />
				<input type="text" name="name" id="contact_name" size="30" class="hidevalue inputbox" 
				value="<?php echo htmlspecialchars($food_list['food_name']); ?>" /><br />
				
				<label id="contact_textmsg" for="contact_text">Description</label><br />
				<textarea cols="50" rows="10" name="detail" id="contact_text" ><?php echo htmlspecialchars($food_list['food_detail']); ?></textarea><br />
				<input type="submit" name="edit_food" value="Edit Food" class="button validate">
				

			</form>
			<?php endforeach; ?>

			<?php 	
					if (isset($_POST['edit_food'])) {
						
					$food_name = $_POST['name'];
					$detail = $_POST['detail'];
					$food_id = $_GET['id'];
					$sql = "UPDATE food SET food_name='$food_name', food_detail='$detail' WHERE id='$food_id'";

					if($pdo->query($sql)){
			    	echo 'Food Updated Successfully';
					}
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