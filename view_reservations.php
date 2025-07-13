<?php include 'includes/header.php'; ?>
<?php include 'db.php'; ?>
	
	<?php 

		try {
		    $sql = "SELECT * FROM reservation ORDER BY res_date ASC";
		    $result = $pdo->query($sql);

		    } catch (PDOException $e) {
		      echo "No seat reservations found";
		      $e->getMessage();
		    }
		    while($row = $result->fetch()){
		      $rows[] = array("id" => $row['id'], "res_fname" => $row['res_fname'], "res_lname" => $row['res_lname'], "email" =>$row['email'], "res_date" => $row['res_date'], "res_time" => $row['res_time'], "time_reserved" => $row['time_reserved'], "no_of_people" => $row['no_of_people'], "seat_id" => $row['seat_id']);
		    }

	 ?>

	 <a href="view_today_reservation.php">Show Today's Reservations Only</a>
	 <form method="POST" accept-charset="utf-8" name="myform">
	 <table border="1" class="styled-table">
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
	 	<a href="dashboard.php">Back to dashboard</a>
	 	<input type="submit" name="delete_res" value="Delete Selected Reservations">
	 	
	 </form>


 	<?php 

 			/*$id = $_POST['id'];

 			if (isset($_POST['delete_res'])) {
 				if (empty($id) || $id == 0) {
 					echo "Nothing to delete";
 				}else{
 					$impid = implode(", ", $id);
 					$sql = "DELETE FROM reservation WHERE id = $impid";
 					$result = $pdo->query($sql);
 					if (isset($result)) {
 						echo "You have Successfully deleted the selected records";
 					}
 				}
 			}*/

 		/*if (isset($_GET['delete_res'])) {
 			$multiple = mysql_escape_string($_GET['multiple']);
 			foreach ($multiple as $res_id) {
 				$sql = "DELETE FROM reservation WHERE id = " . mysql_real_escape_string($res_id);
 				$pdo->query($sql);
 			}

 		}*/


 		// Check if delete button active, start this
			if(isset($_POST['delete_res'])){
				$checkbox=$_POST['checkbox'];
				$count_of_checkbox = count($checkbox);

			// for($i=0;$i<$count_of_checkbox;$i++){
			// $del_id = $checkbox[$i];
			// $sql = "DELETE FROM reservation WHERE id='$del_id'";

			//  $result = $pdo->query($sql);
			// }

			foreach ($checkbox as $key => $value) {
				$result = $pdo->query("DELETE FROM reservation WHERE id='$value'");
			}
				echo "You have successfully deleted the selected reservations";
			if ($result) {
				// if successful, display success message
				header("Location: view_reservations.php");
			}

			}
			/*$i = 0;
			while($i<$checkbox):

			$del_id = $checkbox[$i];
		
			$sql = "DELETE FROM reservation WHERE id='$del_id'";
			$result = $pdo->query($sql);
			$i++;

			endwhile;*/
			
			 ?>

<?php include 'includes/footer.php'; ?>
<style>
.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 1em;
    font-family: Arial, Helvetica, sans-serif;
    min-width: 700px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th, .styled-table td {
    padding: 12px 15px;
    border: 1px solid #dddddd;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}
.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}
.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
</style>