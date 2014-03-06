<?php include 'includes/header.php'; ?>
<?php include 'db.php'; ?>
	<form method="POST" accept-charset="utf-8">
	<ul>
		<li>
			<label>Name Of dessert: <input type="text" name="dessert_name"></label>
		</li>
		<li>
			<label>dessert Description: <textarea name="dessert_detail"></textarea></label>
		</li>
		<li>
			<input type="submit" name="add_dessert" value="Add Dessert">
		</li>
	</ul>
	<a href="dashboard.php">Back to Dashboard</a>
	</form>
	<?php 

		if (isset($_POST['add_dessert'])) {
			$dessert_name = $_POST['dessert_name'];
			$dessert_detail = $_POST['dessert_detail'];
			try {
				$sql = "INSERT INTO dessert (dessert_name, dessert_details) VALUES (:dessert_name, :dessert_detail)";
				$result = $pdo->prepare($sql);

				$result->bindValue('dessert_name', $dessert_name);
				$result->bindValue('dessert_detail', $dessert_detail);
				$result->execute();
			} catch (PDOException $e) {
				echo "Adding dessert was not successful. Please try again";	
			}
			echo "You have just added ". "<strong style='color: green'>" . $dessert_name . "</strong>" ." to the dessert list in the restaurant";
		}
	 ?>

<?php include 'includes/footer.php'; ?>