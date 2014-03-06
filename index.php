<?php 
$page = 'Home';

include 'header.php'; ?>
<?php include 'db.php'; ?>

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


	<div id="carte">
		<div id="carte-top" class="wrap"></div>
		<div id="content-block" class="wrap">
					
			<div class="separator top-separator content left"></div>
			<div class="separator top-separator content right"></div>

			<div id="main" class="content">
				
				<article class="article">
						
					<h1 class="article-title styled-header">Welcome to our restaurant</h1>

					<div class="article-body">
						<p><a class="thumbnail" href="demo_images/restaurant.jpg" rel="lightbox[77]" title="Restaurant Photo">
						<img class="left shadow" src="demo_images/restaurant-157x117.jpg" alt="Restaurant Photo" width="157" height="117" /></a>
						Mauris ornare libero in risus ullamcorper dignissim. Suspendisse metus libero, dictum et laoreet hendrerit, dapibus non velit. 
						Integer consectetur euismod sem vitae vestibulum. Nam quis enim non nunc fermentum volutpat at ac nunc.</p>
						
				

				</div>
						
				<h2>About our cuisine</h2>

					<p>Automated restaurant aims to offer personalized cuisine and service to each of our guests. Our hospitality indulges the unique nature of each diner’s request – which may be a customized menu for a special day, specific dietary wish, adaptable portion sizes, and/or taste preferences.</p>
				
				<div class="separator clear"></div>
				<form  method="POST" accept-charset="utf-8">
						<h2>Admin Login</h2>
						
						<label id="contact_textmsg" for="contact_text">Username</label><br />
						<input type="text" name="username" id="contact_name" size="30" class="hidevalue inputbox" /><br />
						
						<label id="contact_textmsg" for="contact_text">Password</label><br />
						<input type="password" name="password" size="30" class="required password hidevalue" maxlength="100" /><br />
						<input type="submit" name="login" value="Login" class="button validate">
						<!-- <input name="login" class="button validate" value="Login" type="submit"/> -->
						<!-- Login</button> -->
						<!-- <p><a class="make-me-btn" href="menu.php">Take a look at our menu!</a></p> -->
						<p style="color: red;">
							<?php echo $errors; ?>
						</p>
				</form>
					
				</article>
				
			</div><!-- end main -->
	
			<div class="sidebar content">
				<div class="module ">
					<h3>Our specialities</h3>
					
					<div id="slider" class="nivoSlider">
						<img src="demo_images/slider/seafood.jpg" title="#caption1" alt="" />
						<img src="demo_images/slider/poundedyam.png" title="#caption2" alt="" />
						<!-- <a href="all_menu.php"><img src="demo_images/slider/eba.jpg" title="#caption3" alt="" /></a> -->
						<img src="demo_images/slider/stew.jpg" title="#caption4" alt="" />
					</div>
					

					<div id="caption1" class="nivo-html-caption">
						<h4><a href="#">Seafood</a></h4>
						<p>Ut id adipiscing elit. In ac elit nunc. Duis sit amet velit quis lacus porta lacinia. Sed lobortis</p>
					</div>
					<div id="caption2" class="nivo-html-caption">
						<!-- <h4><a href="#">Sushi</a></h4>
						<p>Ut id adipiscing elit. In ac elit nunc. Duis sit amet velit quis lacus porta lacinia. Sed lobortis</p> -->
						<h4><a href="#">Pounded Yam</a></h4>
						<p>Ut id adipiscing elit. In ac elit nunc. Duis sit amet velit quis lacus porta lacinia. Sed lobortis</p>
					</div>
					<!-- <div id="caption3" class="nivo-html-caption">
						<h4><a href="#">Spaghetti</a></h4>
						<p>Ut id adipiscing elit. In ac elit nunc. Duis sit amet velit quis lacus porta lacinia. Sed lobortis</p>
					</div> -->
					<div id="caption4" class="nivo-html-caption">
						<!-- <h4><a href="#">Meat</a></h4>
						<p>Ut id adipiscing elit. In ac elit nunc. Duis sit amet velit quis lacus porta lacinia. Sed lobortis</p> -->
						<h4><a href="#">Vegetable Soup (Efo Riro)</a></h4>
						<p>Ut id adipiscing elit. In ac elit nunc. Duis sit amet velit quis lacus porta lacinia. Sed lobortis</p>
					</div>
				</div>
					
				<div class="separator clear"></div>
				
				<div class="module ">
					<h3><span class="ribbon">Opening hours</span></h3>
					<table>
						<tbody>
							<tr>
								<td>Monday - Friday:</td>
								<td><strong>8:00 - 22:00</strong></td>
							</tr>
							<tr>
								<td>Weekends:</td>
								<td><strong>9:00 - 23:00</strong></td>
							</tr>
						</tbody>
					</table>
				</div>
				
				<h2><a href="#dialog1" name="modal"><span class="ribbon">Click here to reserve a seat</span></a></h2>
				 <form action="" method="POST" accept-charset="utf-8">
				<div id="boxes">

				<div id="dialog" class="window">
				<a href="#"class="close"/>Close</a>
				</div>
				  
				<!-- Start of Login Dialog -->  
				<div id="dialog1" class="window">
				  <div class="d-header">
				  <h2>Seat Reservation</h2>
				  <ul>
						<li>
							<label id="contact_textmsg" for="contact_text">First Name</label><br>
							<input type="text" name="res_fname" id="contact_name" size="30" class="hidevalue inputbox" />		
						</li>
						<li>
							<label id="contact_textmsg" for="contact_text">Last Name</label><br>
							<input type="text" name="res_lname" size="30" class="required password hidevalue" maxlength="100" />		
						</li>
						<li>
							<label id="contact_textmsg" for="contact_text">Email Address</label><br>
							<input type="email" id="contact_email" name="res_email" size="30" class="required email hidevalue" maxlength="100" />		
						</li>
					
					
						<li>
							<label>Time: </label><br>
								<select name="res_time">
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
							
						</li>
						<li>
							<label>Number of People: </label><br>
									<select name="res_people">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
									</select>
							
						</li>
						<li>
							<label>Date: </label><br><input type="text" name="res_date" id="datepicker">		
						</li>
						<li>
							<input type="submit" name="reserve" value="Reserve seat">|| <input type="button" value="Cancel" class="close"/>		
						</li>
						
						</ul>
				    <!-- <input type="text" value="username" onclick="this.value=''"/><br/>
				    <input type="password" value="Password" onclick="this.value=''"/>     -->
				  </div>
				  <div class="d-blank"></div>
				  	
				  	

				</div>
				<!-- End of Login Dialog -->  



				<!-- Mask to cover the whole screen -->
				  <div id="mask"></div>
				</div>
				</form>

				<?php 
						$notification = '';

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
							$notification = "You have successfully reserved a seat and your reservation id is ". $seat_id . "" . ". Please keep it safe" ;
						}


				 ?>
					<p style="color: green;">
						<?php echo $notification; ?>
					</p>


				<!-- <div id="example" class="modal hide fade in" style="display: none;">
					<div class=" modal-header">
						<a class="close" data-dismiss="modal">X</a>
						<h3>The heading</h3>
					</div>
					<div class="modal-body">
						<h4>Form Here</h4>
						<p>Some text here</p>
					</div>
					<div class="modal-footer">
						<a href="#" class="btn" data-dismiss="modal">Close</a>
					</div>
				</div>
				<p>
					<a data-toggle="modal" href="#example" class="btn btn-primary btn-large">Reserve a seat</a>
				</p> -->
					
				<!-- <div class="dmtmenu dmtmenu-category">
					<table class="fulltable">
						<tr class="dmtmenu-item">
							<td>
								<span>
									<a rel="lightbox[1]" href="demo_images/sushi.jpg" title="Reserve a seat">
										<h2><span class="ribbon">Click to reserve a seat</span></h2>
									</a>
								</span>
							</td>
						</tr>
					</table>
				</div> -->
				<!-- <h2><a href="reservation.php"><span class="ribbon">Reserve a seat here</span></a></h2> -->


			

			</div><!-- end sidebar -->
								
			<?php 
				include 'carte-footer.php'; 
				?>
			
		</div><!-- end #content-block -->
		
		<div id="carte-bottom" class="clear wrap"></div>
	</div><!-- end #carte -->





	
<?php 
	include 'footer.php'; 
?>
</body>
</html>

<script>

$(document).ready(function() {	

	//select all the a tag with name equal to modal
	$('a[name=modal]').click(function(e) {
		//Cancel the link behavior
		e.preventDefault();
		
		//Get the A tag
		var id = $(this).attr('href');
	
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(1000);	
		$('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);
	
		//transition effect
		$(id).fadeIn(2000); 
	
	});
	
	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		
		$('#mask').hide();
		$('.window').hide();
	});		
	
	//if mask is clicked
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});			

	$(window).resize(function () {
	 
 		var box = $('#boxes .window');
 
        //Get the screen height and width
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
      
        //Set height and width to mask to fill up the whole screen
        $('#mask').css({'width':maskWidth,'height':maskHeight});
               
        //Get the window height and width
        var winH = $(window).height();
        var winW = $(window).width();

        //Set the popup window to center
        box.css('top',  winH/2 - box.height()/2);
        box.css('left', winW/2 - box.width()/2);
	 
	});
	
});

</script>
<style>

#mask {
  position:absolute;
  left:0;
  top:0;
  z-index:9000;
  background-color:#000;
  display:none;
}
  
#boxes .window {
  position:fixed;
  left:0;
  top:0;
  /*width:440px;
  height:200px;*/
  width:700px;
  height:600px;
  display:none;
  z-index:9999;
  padding:20px;
}

#boxes #dialog {
  width:700px;
  height:600px;
  /*width:375px; 
  height:203px;*/
  padding:10px;
  background-color:#ffffff;
}

#boxes #dialog1 {
  /*width:375px; 
  height:203px;*/
  width:700px;
  height:600px;
}

#dialog1 .d-header {
  /*background:url(images/login-header.png) no-repeat 0 0 transparent;*/
  background-color: #C23C3C; 
  /*width:375px; 
  height:150px;*/
  width:700px;
  height:600px;
}

/*#dialog1 .d-header input {
  position:relative;
  top:60px;
  left:100px;
  border:3px solid #cccccc;
  height:22px;
  width:200px;
  font-size:15px;
  padding:5px;
  margin-top:4px;
}*/

/*#dialog1 .d-blank {
  float:left;
  background:url(images/login-blank.png) no-repeat 0 0 transparent; 
  width:267px; 
  height:53px;
}*/

/*#dialog1 .d-login {
  float:left;
  width:108px; 
  height:53px;
}*/
/*
#boxes #dialog2 {
  background:url(images/notice.png) no-repeat 0 0 transparent; 
  width:326px; 
  height:229px;
  padding:50px 0 20px 25px;
}*/
</style>
