<?php 
	$page = 'Edit Soup';
	include 'dashboard_header.php';
	include 'db.php'; 
?>

<?php 
	$soup_id = $_GET['id'];
    try {
    $sql = "SELECT * FROM soup WHERE id='$soup_id'";
    $result = $pdo->query($sql);
    } catch (PDOException $e) {
      echo "Unable to find soup" . $e->getMessage();
      
      exit(); 
    }
    while($row = $result->fetch()){
      $rows[] = array("id" => $row['id'], "soup_name" => $row['soup_name'], "soup_detail" => $row['soup_detail']);
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
			<?php foreach($rows as $soup_list):?>
			<form action="" method="POST" accept-charset="utf-8">
				<h2>Edit Soup</h2>
				
				<label id="contact_textmsg" for="contact_text">Soup Name</label><br />
				<input type="text" name="name" id="contact_name" size="30" class="hidevalue inputbox" 
				value="<?php echo htmlspecialchars($soup_list['soup_name']); ?>" /><br />
				
				<label id="contact_textmsg" for="contact_text">Description</label><br />
				<textarea cols="50" rows="10" name="detail" id="contact_text" ><?php echo htmlspecialchars($soup_list['soup_detail']); ?></textarea><br />
				<input type="submit" name="edit_soup" value="Edit Soup" class="button validate">
				

			</form>
			<?php endforeach; ?>

			<?php 	
					if (isset($_POST['edit_soup'])) {
						
					$soup_name = $_POST['name'];
					$detail = $_POST['detail'];
					$soup_id = $_GET['id'];
					$sql = "UPDATE soup SET soup_name='$soup_name', soup_detail='$detail' WHERE id='$soup_id'";

					if($pdo->query($sql)){
			    	echo 'Soup Updated Successfully';
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