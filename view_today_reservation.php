<?php include 'includes/header.php'; ?>
<?php include 'db.php'; ?>
	
	 	 <p>
	 	 	<a href="view_reservations.php">View All Reservations</a>
	 	 </p>
	<?php 

		try {
		    $sql = "SELECT * FROM reservation WHERE res_date = CURDATE()";
		    $result = $pdo->query($sql);
		    } catch (PDOException $e) {
		      echo "No seat reservations found";
		      $e->getMessage();
		    }
		    while($row = $result->fetch()){
		      $rows[] = array("id" => $row['id'], "res_fname" => $row['res_fname'], "res_lname" => $row['res_lname'], "email" =>$row['email'], "res_date" => $row['res_date'], "res_time" => $row['res_time'], "time_reserved" => $row['time_reserved'], "no_of_people" => $row['no_of_people'], "seat_id" => $row['seat_id']);
		    }

	 ?>
	 <?php 
	 		if(empty($rows)){?>
	 		<table>
	 			<thead>
	 				<tr>
	 					<th></th>
	 				</tr>
	 			</thead>
	 			<tbody>
	 				<tr>
	 					<td>
		 					<?php echo 'There are no reservations for today. You can view reservations for other days by clicking the <strong>"View All Reservations"</strong> link above';
		 					exit(); ?>
	 					</td>
	 				</tr>
	 			</tbody>
	 		</table>
	 			
	 		<?php }else{ ?>

	 <form method="POST" accept-charset="utf-8" name="myform">
	 <table border="1">
	 	<thead>
	 		<tr>
	 			<th>Name</th>
	 			<th>Email Address</th>
	 			<th>Reservation Date</th>
	 			<th>Reservation Time</th>
	 			<th>Time Reservation was made</th>
	 			<th>Number of people</th>
	 			<th>Seat ID</th>
	 			<th>Check all <br>
	 				<!-- <input type="checkbox" name="checkAll" id="checkAll" > -->
	 				<input type="checkbox" name="selectallcb" value="Check All" onClick="selectFunction(document.myform.selectallcb,document.myform['checkbox[]'])">
	 			</th>
	 		</tr>
	 	</thead>
	 	<?php foreach($rows as $list):?>
	 	<tbody>
	 		<tr>
	 			<td>
	 				<?php echo htmlspecialchars($list['res_fname']); ?> <?php echo htmlspecialchars($list['res_lname']); ?>
	 			</td>
	 			<td><?php echo htmlspecialchars($list['email']); ?></td>
	 			<td><?php echo htmlspecialchars($list['res_date']); ?></td>
	 			<td><?php echo htmlspecialchars($list['res_time']); ?></td>
	 			<td><?php echo htmlspecialchars($list['time_reserved']); ?></td>
	 			<td><?php echo htmlspecialchars($list['no_of_people']); ?></td>
	 			<td><?php echo htmlspecialchars($list['seat_id']); ?></td>
	 			<td><input type="checkbox" name="checkbox[]" value="<?php echo $list['id']; ?>"></td>
	 		</tr>
	 	</tbody>
	 <?php endforeach; ?>
	 </table>
	 	
	 	<input type="submit" name="delete_res" value="Delete Selected Reservations">
	 	
	 </form>


 	<?php 
 		// Check if delete button active, start this
			if(isset($_POST['delete_res'])){
				$checkbox=$_POST['checkbox'];
				$count_of_checkbox = count($checkbox);

			for($i=0;$i<$checkbox;$i++){
			$del_id = $checkbox[$i];
			$sql = "DELETE FROM reservation WHERE id='$del_id'";

			$result = $pdo->query($sql);

			/*$result = mysql_query($sql);*/
			}
			// if successful, display success message
			if($result){
			echo "Success!";
			}
			}
			
			 ?>
	<?php } ?>
	<p>
		<a href="dashboard.php">Back to dashboard</a>
	</p>

<?php include 'includes/footer.php'; ?>
