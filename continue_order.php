<?php include 'includes/header.php'; ?>
<?php include 'db.php'; ?>
<?php session_start(); ?>
<div class="order-form-container">
<form method="POST" accept-charset="utf-8" class="styled-order-form">
	<ul>
		<li><label>First Name: </label>
			<input type="text" name="cust_fname" placeholder="Your First Name Here">
		</li>
		<li><label>Last Name: </label>
			<input type="text" name="cust_lname" placeholder="Your Last Name Here">
		</li>
		<li><label>Delivery Address: </label>
			<textarea name="cust_address" placeholder="Enter your address"></textarea>
		</li>
		<li><label>Phone Number (11 digits only): </label>
			<input type="text" name="cust_phone" placeholder="Your Phone Number Here" maxlength="11">
		</li>
	</ul>
	<input type="submit" name="place_order" value="Place Order" class="order-btn"> <span class="or">||</span> <a href="all_menu.php" class="back-link">Back To All Menu</a>
</form>
</div>
<style>
.order-form-container {
    max-width: 500px;
    margin: 40px auto;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 16px rgba(0,0,0,0.08);
    padding: 32px 28px 24px 28px;
}
.styled-order-form ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px 0;
}
.styled-order-form li {
    margin-bottom: 18px;
    display: flex;
    flex-direction: column;
}
.styled-order-form label {
    font-weight: bold;
    margin-bottom: 6px;
    color: #009879;
}
.styled-order-form input[type="text"],
.styled-order-form textarea {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1em;
    width: 100%;
    box-sizing: border-box;
}
.styled-order-form textarea {
    min-height: 60px;
    resize: vertical;
}
.order-btn {
    background: #009879;
    color: #fff;
    border: none;
    padding: 10px 24px;
    border-radius: 4px;
    font-size: 1em;
    cursor: pointer;
    transition: background 0.2s;
}
.order-btn:hover {
    background: #007a63;
}
.or {
    margin: 0 10px;
    color: #888;
}
.back-link {
    color: #009879;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.2s;
}
.back-link:hover {
    color: #007a63;
    text-decoration: underline;
}
</style>

	<?php 
			$zero = 0;

			if (isset($_POST['place_order'])) {
				
				try {
					
					$cust_fname = $_POST['cust_fname'];
					$cust_lname = $_POST['cust_lname'];
					$cust_address = $_POST['cust_address'];
					$cust_phone = $_POST['cust_phone'];

	 		if (isset($_SESSION['selected_food']) || isset($_SESSION['selected_soup']) || isset($_SESSION['selected_drink']) || isset($_SESSION['selected_dessert'])) {
					$food_id = $_SESSION['selected_food'];
					$soup_id = $_SESSION['selected_soup'];
					$drink_id = $_SESSION['selected_drink'];
					$dessert_id = $_SESSION['selected_dessert'];

					$sql = "INSERT INTO customer_info (cust_fname, cust_lname, cust_address, cust_phone, food_id, soup_id, drink_id, dessert_id) VALUES (:cust_fname, :cust_lname, :cust_address, :cust_phone, :food_id, :soup_id, :drink_id, :dessert_id)";

					$result = $pdo->prepare($sql);

					$result->bindParam(':cust_fname', $cust_fname);
					$result->bindParam(':cust_lname', $cust_lname);
					$result->bindParam(':cust_address', $cust_address);
					$result->bindParam(':cust_phone', $cust_phone);
					$result->bindParam(':food_id', $food_id);
					$result->bindParam(':soup_id', $soup_id);
					$result->bindParam(':drink_id', $drink_id);
					$result->bindParam(':dessert_id', $dessert_id);

					if (count($drink_id) == NULL) {
						$result->bindParam(':drink_id', $zero);
					}
					if (count($dessert_id) == NULL) {
						$result->bindParam(':dessert_id', $zero);
					}
					$result->execute();
					}
				} catch (PDOException $e) {
					echo "An error occured and your order was not placed";
					var_dump($e->getmessage());
					
				}
					echo "<p style='color: green;'>Your order has been placed</p>";
			
			}

	 ?>

<?php include 'includes/footer.php'; ?>