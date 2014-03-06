<?php 
	$page = 'Edit Drinks';
	include 'dashboard_header.php';
	include 'db.php'; 
?>

<?php 
	$drink_id = $_GET['id'];
    try {
    $sql = "SELECT * FROM drink WHERE id='$drink_id'";
    $result = $pdo->query($sql);
    } catch (PDOException $e) {
      echo "Unable to find drink" . $e->getMessage();
      
      exit(); 
    }
    while($row = $result->fetch()){
      $rows[] = array("id" => $row['id'], "drink_name" => $row['drink_name'], "drink_description" => $row['drink_description']);
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
			<?php foreach($rows as $drink_list):?>
			<form action="" method="POST" accept-charset="utf-8">
				<h2>Edit drink</h2>
				
				<label id="contact_textmsg" for="contact_text">Drink Name</label><br />
				<input type="text" name="name" id="contact_name" size="30" class="hidevalue inputbox" 
				value="<?php echo htmlspecialchars($drink_list['drink_name']); ?>" /><br />
				
				<label id="contact_textmsg" for="contact_text">Description</label><br />
				<textarea cols="50" rows="10" name="detail" id="contact_text" ><?php echo htmlspecialchars($drink_list['drink_description']); ?></textarea><br />
				<input type="submit" name="edit_drink" value="Edit Drink" class="button validate">
				

			</form>
			<?php endforeach; ?>

			<?php 	
					if (isset($_POST['edit_drink'])) {
						
					$drink_name = $_POST['name'];
					$detail = $_POST['detail'];
					$drinks_id = $_GET['id'];
					$sql = "UPDATE drink SET drink_name='$drink_name', drink_description='$detail' WHERE id='$drink_id'";

					if($pdo->query($sql)){
			    	echo 'Drink Updated Successfully';
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