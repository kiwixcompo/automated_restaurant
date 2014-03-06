<?php include 'includes/header.php'; ?>
<?php include 'db.php'; ?>
<?php session_start(); ?>
	
	 	<form  method="POST" accept-charset="utf-8" name="myform">
	<?php 

		try {
			$sql = "SELECT * FROM food";
			$result = $pdo->query($sql);
		} catch (PDOException $e) {
			echo "No food found";
			$e->getMessage();
		}
		while($row = $result->fetch()){
		      $food_row[] = array("food.id" => $row['id'], "food_name" => $row['food_name'], "food_detail" => $row['food_detail']);
		    }

	 	try {
			$sql = "SELECT * FROM soup";
			$result = $pdo->query($sql);
		} catch (PDOException $e) {
			echo "No soup found";
			$e->getMessage();
		}
		while($row = $result->fetch()){
		      $soup_row[] = array("soup.id" =>$row['id'], "soup_name" => $row['soup_name'], "soup_detail" => $row['soup_detail']);
		    }

		try {
			$sql = "SELECT * FROM drinks";
			$result = $pdo->query($sql);
		} catch (PDOException $e) {
			echo "No drink found";
			$e->getMessage();
		}
		while($row = $result->fetch()){
		      $drink_row[] = array("drink.id" =>$row['id'], "drink_name" => $row['drink_name'], "drink_description" => $row['drink_description']);
		    }

		try {
			$sql = "SELECT * FROM dessert";
			$result = $pdo->query($sql);
		} catch (PDOException $e) {
			echo "No dessert found";
			$e->getMessage();
		}
		while($row = $result->fetch()){
		      $dessert_row[] = array("dessert.id" =>$row['id'], "dessert_name" => $row['dessert_name'], "dessert_details" => $row['dessert_details']);
		    }


	 ?>
	 <table border="1">
	 	<thead>
	 		<tr>
	 			<th>Food</th>
	 			<th>Soup</th>
	 			<th>Drinks</th>
	 			<th>Dessert</th>
	 		</tr>
	 	</thead>
	 	<tbody>
	 		<tr>
			 	<?php foreach($food_row as $food_rows):?>

		 			<td>
		 				<?php echo htmlspecialchars($food_rows['food_name']); ?>  
		 				<input type="checkbox" name="food_check" value="<?php echo $food_rows['food.id']; ?>">
		 			</td>

	 			<?php endforeach; ?>
	 		</tr>
	 		<tr>
	 			<?php foreach($soup_row as $soup_rows):?>

		 			<td>
		 				<?php echo htmlspecialchars($soup_rows['soup_name']); ?>
		 				<input type="checkbox" name="soup_check" value="<?php echo $soup_rows['soup.id']; ?>">
		 			</td>
		 		<?php endforeach; ?>
	 		</tr>
	 		<tr>
	 			<?php foreach($drink_row as $drink_rows):?>

		 			<td>
		 				<?php echo htmlspecialchars($drink_rows['drink_name']); ?>
		 				<input type="checkbox" name="drink_check" value="<?php echo $drink_rows['drink.id']; ?>">
		 			</td>
		 		<?php endforeach; ?>
	 		</tr>
	 		<tr>
	 			<?php foreach($dessert_row as $dessert_rows):?>

		 			<td>
		 				<?php echo htmlspecialchars($dessert_rows['dessert_name']); ?>
		 				<input type="checkbox" name="dessert_check" value="<?php echo $dessert_rows['dessert.id']; ?>">
		 			</td>
		 		<?php endforeach; ?>
	 		</tr>
	 		
	 	</tbody>
	 
	 </table>


	 	<input type="submit" name="continue_order" value="Proceed With Order">
	 	<br>
	 	
	 	<a href="index.php">Back to Home</a>
	 </form>

	 <?php 
	 	if (isset($_POST['continue_order'])) {

	 		if (!empty($_POST['food_check']) || !empty($_POST['soup_check']) || !empty($_POST['drink_check']) || !empty($_POST['dessert_check'])) {

	 		$food = $_POST['food_check'];
	 		$soup = $_POST['soup_check'];
	 		$drink = $_POST['drink_check'];
	 		$dessert = $_POST['dessert_check'];

	 		$_SESSION['selected_food'] = $food;
	 		$_SESSION['selected_soup'] = $soup;
	 		$_SESSION['selected_drink'] = $drink;
	 		$_SESSION['selected_dessert'] = $dessert;

	 		
	 		if (isset($_SESSION['selected_food']) || isset($_SESSION['selected_soup']) || isset($_SESSION['selected_drink']) || isset($_SESSION['selected_dessert'])) {
	 			
	 			header('Location: continue_order.php');
	 		}else{
	 			echo "No item was selected. Can't go to the next page";
	 		}
	 		
	 		/*$soup = $_POST['soup_check']; */
	 		}else{
	 			echo "You need to select at least one item";
	 		}
	 	}
	 		/*echo " You picked the food with the id ". $food . " and the soup with the id ". $soup;*/
	  ?>

<?php include 'includes/footer.php'; ?>