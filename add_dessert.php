<?php 
	$page = 'Add Dessert';
	include 'dashboard_header.php';
	include 'db.php'; 
?>

<?php 
		$errors = '';
		$success = '';
		if (isset($_POST['add_dessert'])) {
			$dessert_name = $_POST['dessert_name'];
			$dessert_detail = $_POST['dessert_detail'];
		if(empty($dessert_name) || empty($dessert_detail)){
		    $errors = "Please fill in all the fields";
		    echo $errors;
	 	}else{
			try {
				$sql = "INSERT INTO dessert (dessert_name, dessert_details) VALUES (:dessert_name, :dessert_detail)";
				$result = $pdo->prepare($sql);

				$result->bindValue('dessert_name', $dessert_name);
				$result->bindValue('dessert_detail', $dessert_detail);
				$result->execute();
			} catch (PDOException $e) {
				$errors =  "Adding dessert was not successful. Please try again";	
			}
			$success = "You have just added ". "<strong style='color: black'>" . $dessert_name . "</strong>" ." to the dessert list in the restaurant";
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
				<h2>Add Dessert</h2>
				
				<label id="contact_textmsg" for="contact_text">Name Of Dessert</label><br />
				<input type="text" name="dessert_name" id="contact_name" size="30" class="hidevalue inputbox" /><br />
				
				<label id="contact_textmsg" for="contact_text">Description</label><br />
				<textarea cols="50" rows="10" name="dessert_detail" id="contact_text" class="hidevalue inputbox"></textarea><br />
				<input type="submit" name="add_dessert" value="Add Dessert" class="button validate">
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