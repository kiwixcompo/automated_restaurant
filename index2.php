<?php include 'includes/header.php'; ?>
<?php include 'db.php'; ?>

	<h3>WELCOME TO THE AUTOMATED RESTAURANT...<i>Cheez till mama calls</i></h3>
		<div class="login-box">
			<form method="post" action="">
					<ul>
					<label id="menu">Admin Section</label>
						<li>
							<input type="text" name="username" placeholder="Enter Chef name here">
						</li>
						
						<li>
							<input type="password" name="password" placeholder="Enter Password here">
						</li>
						<li>
							<input type="submit" name="login" value="Login" class="button">
						</li>
					</ul>
			</form>
		</div>
		<div id="menu">
			<p>On The Menu Today</p>
		</div>
			<p>
				<li>
					<a href="reservation.php">Reserve a seat</a>
				</li>
				<li>
					<a href="all_menu.php">All menu</a>
				</li>
			</p>

<?php
$errors = '';
if (isset($_POST['login'])) {
    if(empty($_POST['username']) || empty($_POST['password'])){
    $errors = "Please enter all your login credentials";
    echo $errors;
  }else{
    try {
      $chef_name = $_POST['username'];
      $password1 = $_POST['password'];
      $password = sha1($password1);
      $sql = "SELECT * FROM admin WHERE chef_name = :username && password = :password";
      $result = $pdo->prepare($sql);
      $result->bindValue(':username', $chef_name);
      $result->bindValue(':password', $password);
      $result->execute();

      $total = $result->rowCount(1,1);

    } catch (PDOException $e) {
      
    }
    
    if ($total<1) {
       $errors =  "Invalid username or password";
       echo $errors;
    }
    else{
    
    header('Location: dashboard.php');  
    }
    } 
}
 ?>
<?php include 'includes/footer.php'; ?>

