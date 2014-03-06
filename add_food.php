<?php 
	$page = 'Add Food';
	include 'dashboard_header.php';
	include 'db.php'; 
?>

<?php 
		$errors = '';
		$success = '';
		if (isset($_POST['add_food'])) {
			$food_name = $_POST['food_name'];
			$food_detail = $_POST['food_detail'];
		if(empty($food_name) || empty($food_detail)){
		    $errors = "Please fill in all the fields";
		    echo $errors;
	 	}else{
			try {
				$sql = "INSERT INTO food (food_name, food_detail) VALUES (:food_name, :food_detail)";
				$result = $pdo->prepare($sql);

				$result->bindValue('food_name', $food_name);
				$result->bindValue('food_detail', $food_detail);
				$result->execute();
			} catch (PDOException $e) {
				$errors =  "Adding food was not successful. Please try again";	
			}
			$success = "You have just added ". "<strong style='color: black'>" . $food_name . "</strong>" ." to the food list in the restaurant";
		}
		}
?>

	<div id="carte">
		<div id="carte-top" class="wrap"></div>
		<div id="content-block" class="wrap">
		
		<div class="separator top-separator content left"></div>
		<div class="separator top-separator content right"></div>
		<div id="main" class="content fullwidth">

		<article class="article art">

		<div class="article-body">
			
			<form  method="POST" accept-charset="utf-8">
				<h2>Add Food</h2>
				
				<label id="contact_textmsg" for="contact_text">Food Name</label><br />
				<input type="text" name="food_name" id="contact_name" size="30" class="hidevalue inputbox" /><br />
				
				<label id="contact_textmsg" for="contact_text">Description</label><br />
				<textarea cols="50" rows="10" name="food_detail" id="contact_text" class="hidevalue inputbox"></textarea><br />
				<input type="submit" name="add_food" value="Add Food" class="button validate">
				<p style="color: red;">
					<?php echo $errors; ?>
				</p>
				<p style="color: green;">
					<?php echo $success; ?>
				</p>
			</form>
		
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