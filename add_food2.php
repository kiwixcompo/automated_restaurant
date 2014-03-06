<?php include 'includes/header.php'; ?>
<?php include 'db.php'; ?>
	<form method="POST" accept-charset="utf-8">
	<ul>
		<li>
			<label>Name Of Food: <input type="text" name="food_name"></label>
		</li>
		<li>
			<label>Food Description: <textarea name="food_detail"></textarea></label>
		</li>
		<li>
			<input type="submit" name="add_food" value="Add Food">
		</li>
	</ul>
	<a href="dashboard.php">Back to Dashboard</a>
	</form>
	<?php 

		if (isset($_POST['add_food'])) {
			$food_name = $_POST['food_name'];
			$food_detail = $_POST['food_detail'];
			try {
				$sql = "INSERT INTO food (food_name, food_detail) VALUES (:food_name, :food_detail)";
				$result = $pdo->prepare($sql);

				$result->bindValue('food_name', $food_name);
				$result->bindValue('food_detail', $food_detail);
				$result->execute();
			} catch (PDOException $e) {
				echo "Adding food was not successful. Please try again";	
			}
			echo "You have just added ". "<strong style='color: green'>" . $food_name . "</strong>" ." to the food list in the restaurant";
		}
	 ?>

<?php include 'includes/footer.php'; ?>