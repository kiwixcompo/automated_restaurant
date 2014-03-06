<?php 
	$page = 'Add Drink';
	include 'dashboard_header.php';
	include 'db.php'; 
?>
<?php 
		$errors = '';
		$success = '';
		if (isset($_POST['add_drink'])) {
			$drink_name = $_POST['drink_name'];
			$drink_detail = $_POST['drink_detail'];
		if(empty($drink_name) || empty($drink_detail)){
		    $errors = "Please fill in all the fields";
		    echo $errors;
	 	}else{
			try {
				$sql = "INSERT INTO drinks (drink_name, drink_description) VALUES (:drink_name, :drink_detail)";
				$result = $pdo->prepare($sql);

				$result->bindValue('drink_name', $drink_name);
				$result->bindValue('drink_detail', $drink_detail);
				$result->execute();
			} catch (PDOException $e) {
				$errors =  "Adding drink was not successful. Please try again";	
			}
			$success = "You have just added ". "<strong style='color: black'>" . $drink_name . "</strong>" ." to the drinks list in the restaurant";
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
				<h2>Add Drink</h2>
				
				<label id="contact_textmsg" for="contact_text">Drink Name</label><br />
				<input type="text" name="drink_name" id="contact_name" size="30" class="hidevalue inputbox" /><br />
				
				<label id="contact_textmsg" for="contact_text">Description</label><br />
				<textarea cols="50" rows="10" name="drink_detail" id="contact_text" class="hidevalue inputbox"></textarea><br />
				<input type="submit" name="add_drink" value="Add Drink" class="button validate">
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