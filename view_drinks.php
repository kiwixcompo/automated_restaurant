<?php 
	$page = 'All Drink';
	include 'dashboard_header.php';
	include 'db.php';
?>
	<?php 

		try {
		    $sql = "SELECT * FROM drink";
		    $result = $pdo->query($sql);

		    } catch (PDOException $e) {
		      echo "No drink found";
		      $e->getMessage();
		    }
		    while($row = $result->fetch()){
		      $rows[] = array("id" => $row['id'], "drink_name" => $row['drink_name'], "drink_description" => $row['drink_description']);
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
			
			<h2>List Of Available Drinks</h2>
			<table border="1">
				<thead>
					<tr>
						<th>Name Of Drink</th>
						<th>Drink Description</th>
						<th>Action</th>
					</tr>
				</thead>
				    <?php foreach ($rows as $drink_list): ?>
				<tbody>
					<tr>
						<td>
							<?php echo htmlspecialchars($drink_list['drink_name']); ?>
						</td>
						<td>
							<?php echo htmlspecialchars($drink_list['drink_description']); ?>
						</td>
						<td>
							<a href="edit_drinks.php?id=<?php echo $drink_list['id']; ?>">Edit</a> | <a href="delete_drinks.php?id=<?php echo $drink_list['id']; ?>" onclick="return confirm('Are you sure you want to delete this drink?');">Delete</a>
      					</td>
					</tr>
				</tbody>
					<?php endforeach; ?>
			</table>

		
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