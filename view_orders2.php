<?php include 'includes/header.php'; ?>
<?php include 'db.php'; ?>

	<?php 

		try {
		    $sql = "SELECT cust_fname, cust_lname, cust_address, cust_phone, food_name, soup_name, drink_name, dessert_name FROM customer_info 
				INNER JOIN food ON food_id = food.id
				INNER JOIN soup ON soup_id = soup.id
				INNER JOIN drinks ON drink_id = drinks.id
				INNER JOIN dessert ON dessert_id = dessert.id";

		    $result = $pdo->query($sql);

		    } catch (PDOException $e) {
		      echo "No item found";
		      $e->getMessage();
		    }
		    while($row = $result->fetch()){
		      $rows[] = array("cust_fname" => $row['cust_fname'], "cust_lname" => $row['cust_lname'], "cust_address" => $row['cust_address'], "cust_phone" =>$row['cust_phone'], "food_name" => $row['food_name'], "soup_name" => $row['soup_name'], "drink_name" => $row['drink_name'], "dessert_name" => $row['dessert_name']);
		    }

	?>

	<form method="POST" name="myform">
	<table border="1">
		<thead>
			<tr>
				<th>Name Of Customer</th>
				<th>Delivery Address</th>
				<th>Phone Number</th>
				<th>Food</th>
				<th>Soup</th>
				<th>Drink</th>
				<th>Dessert</th>
				<th>Check all <br>
	 				<input type="checkbox" name="selectallcb" value="Check All" onClick="selectFunction(document.myform.selectallcb,document.myform['checkbox[]'])">
	 			</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($rows as $items): ?>
				<tr>
					<td>
						<?php echo htmlspecialchars($items['cust_fname']); ?> <?php echo htmlspecialchars($items['cust_lname']); ?>
					</td>
					<td>
						<?php echo htmlspecialchars($items['cust_address']); ?>
					</td>
					<td>
						<?php echo htmlspecialchars($items['cust_phone']); ?>
					</td>
					<td>
						<?php echo htmlspecialchars($items['food_name']); ?>
					</td>
					<td>
						<?php echo htmlspecialchars($items['soup_name']); ?>
					</td>
					<td>
						<?php echo htmlspecialchars($items['drink_name']); ?>
					</td>
					<td>
						<?php echo htmlspecialchars($items['dessert_name']); ?>
					</td>
					<td>
						<input type="checkbox" name="checkbox[]" value="<?php echo $list['customer_info.id']; ?>">
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
		<a href="dashboard.php">Back To Dashboard</a>
<input type="submit" name="delete_res" value="Delete Selected Reservations">
</form>
	<?php 

		if(isset($_POST['delete_res'])){
				$checkbox=$_POST['checkbox'];
				$count_of_checkbox = count($checkbox);

			foreach ($checkbox as $key => $value) {
				$result = $pdo->query("DELETE FROM customer_info WHERE id='$value'");
			}
				echo "You have successfully deleted the selected orders";
			if ($result) {
				// if successful, display success message
				header("Location: view_orders.php");
			}

			}

	 ?>

<?php include 'includes/footer.php'; ?>