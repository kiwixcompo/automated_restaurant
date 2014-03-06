<?php include 'includes/header.php'; ?>
<?php include 'db.php'; ?>
	
	<h3>Seat Rerservation</h3>
<form action="" method="post" accept-charset="utf-8">
	<ul>
		<li>
			<label>First Name<input type="text" name="res_fname"></label>
		</li>
		<li>
			<label>Last Name<input type="text" name="res_lname"></label>
		</li>
		<li>
			<label>Email Address<input type="text" name="res_email" email></label>
		</li>
		<li>
			<label>Date: <input type="text" name="res_date" id="datepicker"></label>
		</li>
		<li>
			<label>Time: <select name="res_time">
							<option value="10:00:00">10 am</option>
							<option value="11:00:00">11 am</option>
							<option value="12:00:00">12 pm</option>
							<option value="13:00:00">1 pm</option>
							<option value="14:00:00">2 pm</option>
							<option value="15:00:00">3 pm</option>
							<option value="16:00:00">4 pm</option>
							<option value="17:00:00">5 pm</option>
							<option value="18:00:00">6 pm</option>
							<option value="19:00:00">7 pm</option>
							<option value="20:00:00">8 pm</option>
						
						 </select>
						 <!-- <select name="res_minute">
						 	<option value="">minute</option>
						 </select> -->
			</label>
		</li>
		<li>
			<label>Number of People: 
					<select name="res_people">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
					</select>
			</label>
		</li>
		<li>
			<input type="submit" name="reserve" value="Reserve seat">
		</li>
		<li>
			<a href="index.php">Back to home</a>
		</li>
	</ul>


</form>
	
	<?php 

			if (isset($_POST['reserve'])) {
				try {
					$res_fname = $_POST['res_fname'];
					$res_lname = $_POST['res_lname'];
					$res_email = $_POST['res_email'];
					$res_date = $_POST['res_date'];
					$res_time = $_POST['res_time'];
					$res_people = $_POST['res_people'];
					
					$set_of_characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
					$shuffled = str_shuffle($set_of_characters);
					$seat_id = substr($shuffled, 0, 5);

				$sql = "INSERT INTO reservation (res_fname, res_lname, email, res_date, res_time, no_of_people, seat_id) VALUES (:res_fname, :res_lname, :res_email, :res_date, :res_time, :res_people, :seat_id)";
				$q = $pdo->prepare($sql);
				$q->bindValue(':res_fname', $res_fname);
				$q->bindValue(':res_lname', $res_lname);
				$q->bindValue(':res_email', $res_email);
				$q->bindValue(':res_date', $res_date);
				$q->bindValue(':res_time', $res_time);
				$q->bindValue(':res_people', $res_people);
				$q->bindValue(':seat_id', $seat_id);
				
				$q->execute();

				} catch (PDOException $e) {
					$e->getMessage();
				}
				echo "You have successfully reserved a seat and your reservation id is ". $seat_id . "" . ". Please keep it safe" ;
			}


	 ?>
	
<?php include 'includes/footer.php'; ?>