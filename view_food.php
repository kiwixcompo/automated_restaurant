<?php 
	$page = 'All Food';
	include 'dashboard_header.php';
	include 'db.php';
?>
	<?php 

		try {
		    $sql = "SELECT * FROM food";
		    $result = $pdo->query($sql);

		    } catch (PDOException $e) {
		      echo "No food found";
		      $e->getMessage();
		    }
		    while($row = $result->fetch()){
		      $rows[] = array("id" => $row['id'], "food_name" => $row['food_name'], "food_detail" => $row['food_detail']);
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
			
			<h2>List Of Available Foods</h2>
			<table border="1">
				<thead>
					<tr>
						<th>Name Of Food</th>
						<th>Food Description</th>
						<th>Action</th>
					</tr>
				</thead>
				    <?php foreach ($rows as $food_list): ?>
				<tbody>
					<tr>
						<td>
							<?php echo htmlspecialchars($food_list['food_name']); ?>
						</td>
						<td>
							<?php echo htmlspecialchars($food_list['food_detail']); ?>
						</td>
						<td>
							<a href="edit_food.php?id=<?php echo $food_list['id']; ?>">Edit</a> | <a href="delete_food.php?id=<?php echo $food_list['id']; ?>" onclick="return confirm('Are you sure you want to delete this food?');">Delete</a>
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