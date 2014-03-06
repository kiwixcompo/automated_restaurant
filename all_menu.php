<?php
 	$page = 'Menu';
	include 'header.php';
	include 'db.php'; 
 ?>
 <?php session_start(); ?>
	<div id="carte">
		<div id="carte-top" class="wrap"></div>
		<div id="content-block" class="wrap">

			<div class="separator top-separator content left"></div>
			<div class="separator top-separator content right"></div>
			
			<div id="main" class="content fullwidth">
		
				<article class="article art">
		
					<h1 class="article-title">Our Menu</h1>
	
					<div class="article-body">


						<form method="POST" name="myform">

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
						<?php 
							$error = '';
						 	if (isset($_POST['continue_order'])) {

						 		/*if (!empty($_POST['food_check']) && !empty($_POST['soup_check']) && !empty($_POST['drink_check']) && !empty($_POST['dessert_check'])) {*/
						 		
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
						 			$error =  "No item was selected. Can't go to the next page";
						 		}
						 		
						 		/*}else{
						 			$error = "You need to select at least one item";
						 		}*/

						 		if (empty($food) && empty($soup) && empty($drink) && empty($dessert)) {
						 			$error = "You need to select at least one item to continue";
						 		}
						 	}
						 		
						?>
							<table border="1" class="fulltable">
							<thead> 
								<tr>
									<th>FOOD</th>
									<th>SOUP</th>
									<th>DRINK</th>
									<th>DESSERT</th>

									<!-- <th>Name Of Customer</th>
									<th>Delivery Address</th>
									<th>Phone Number</th>
									<th>Food</th>
									<th>Soup</th>
									<th>Drink</th>
									<th>Dessert</th>
									<th>Check all <br>
						 			<input type="checkbox" name="selectallcb" value="Check All" onClick="selectFunction(document.myform.selectallcb,document.myform['checkbox[]'])">
						 			</th> -->
								</tr>
						</thead> 
							<tbody>
						 		<tr align="center">

								 		<?php 
								 			echo "<td>";
								 			foreach ($food_row as $food_rows) {
								 				echo htmlspecialchars($food_rows['food_name']);?>
								 				<input type="checkbox" name="food_check" value="<?php echo $food_rows['food.id']; ?>">
								 			<?php echo "<br>";
								 			}
								 			echo "</td>";

								 		 ?>

								 		 <?php 
								 			echo "<td>";
								 			foreach ($soup_row as $soup_rows) {
								 				echo htmlspecialchars($soup_rows['soup_name']);?>
								 				<input type="checkbox" name="soup_check" value="<?php echo $soup_rows['soup.id']; ?>">
								 			<?php echo "<br>";
								 			}
								 			echo "</td>";

								 		 ?>

								 		 <?php 
								 			echo "<td>";
								 			foreach ($drink_row as $drink_rows) {
								 				echo htmlspecialchars($drink_rows['drink_name']); ?>
								 				<input type="checkbox" name="drink_check" value="<?php echo $drink_rows['drink.id']; ?>">
								 				<?php echo "<br>";
								 			}
								 			echo "</td>";

								 		 ?>

								 		 <?php 
								 			echo "<td>";
								 			foreach ($dessert_row as $dessert_rows) {
								 				echo htmlspecialchars($dessert_rows['dessert_name']);?>
								 				<input type="checkbox" name="dessert_check" value="<?php echo $dessert_rows['dessert.id']; ?>">
								 			<?php echo "<br>";
								 			}
								 			echo "</td>";

								 		 ?>
							 			
						 		</tr>
						 		
						 	</tbody>
						</table>
					<input type="submit" name="continue_order" value="Proceed With Order">
						<p style="color: red;">
							<?php echo $error; ?>
						</p>
					</form>


					</div>
				</article>
				
			</div><!-- end main -->
			
			<?php 
				include 'carte-footer.php'; 
				?>
			
		</div><!-- end #content-block -->
		
		<div id="carte-bottom" class="clear wrap"></div>
	</div><!-- end #carte -->
	
<?php 
	include 'footer.php'; 
?>