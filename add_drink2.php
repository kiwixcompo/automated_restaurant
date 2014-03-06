<?php include 'includes/header.php'; ?>
<?php include 'db.php'; ?>
	<form method="POST" accept-charset="utf-8">
	<ul>
		<li>
			<label>Name Of Drink: <input type="text" name="drink_name"></label>
		</li>
		<li>
			<label>Drink Description: <textarea name="drink_detail"></textarea></label>
		</li>
		<li>
			<input type="submit" name="add_drink" value="Add Drink">
		</li>
	</ul>
	<a href="dashboard.php">Back to Dashboard</a>
	</form>
	<?php 

		if (isset($_POST['add_drink'])) {
			$drink_name = $_POST['drink_name'];
			$drink_detail = $_POST['drink_detail'];
			try {
				$sql = "INSERT INTO drinks (drink_name, drink_description) VALUES (:drink_name, :drink_detail)";
				$result = $pdo->prepare($sql);

				$result->bindValue('drink_name', $drink_name);
				$result->bindValue('drink_detail', $drink_detail);
				$result->execute();
			} catch (PDOException $e) {
				echo "Adding drink was not successful. Please try again";	
			}
			echo "You have just added ". "<strong style='color: green'>" . $drink_name . "</strong>" ." to the drinks list in the restaurant";
		}
	 ?>

<?php include 'includes/footer.php'; ?>