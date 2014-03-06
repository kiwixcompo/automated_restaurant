<?php 
$page = 'Contact';

include 'header.php'; 

$address 	= "contact@demente-design.com"; // Change to your email address
$error 		= '';
$name  		= '';
$email 		= '';
$subject 	= '';
$text 		= '';
$copy 		= '';
?>

	<div id="carte">
		<div id="carte-top" class="wrap"></div>
		<div id="content-block" class="wrap">

			<div class="separator top-separator content left"></div>
			<div class="separator top-separator content right"></div>
			
			<div id="main" class="content">

				<h1>Get in touch</h1>

				<div>
					<details class="contact-details down-block">
							
						<address>
							Te Contei Restaurant<br />
							Av. Bartolomeu Gusm&atilde;o 16<br/>
							Rio de Janeiro,<br/>
							Brasil
						</address>

						<ul class="plain-list">
							<li class="contact-telephone">
								<span>Phone:</span>
								<b>615 2475</b>
							</li>	
			
							<li class="contact-fax">
								<span>Fax:</span>
								<b>615 2478</b>
							</li>	
						</ul>

						<p>Information about the contact.</p>

						<div class="separator"></div>			
			 
					</details>
				</div>

				<div id="contact-form-wrap" class="contact down-block">
				
				<?php  
				
				if(isset($_POST['sendMail']))
				{
					$name 		= $_POST['name'];
					$email 		= $_POST['email'];
					$subject 	= $_POST['subject'];
					$text 		= $_POST['text'];
					$copy 		= $_POST['email_copy'];
						
					// Check for errors
					if(trim($name) == '') {
						$error = '<div class="mail-error">Please enter your name.</div>';
					}
					if(trim($email) == '' || !isEmailAddress($email)) {
						$error .= '<div class="mail-error">Please enter a valid email address.</div>';
					}
					if(trim($subject) == '') {
						$error .= '<div class="mail-error">Please enter a subject.</div>';
					}
					if(trim($text) == '') {
						$error .= '<div class="mail-error">Please enter your message.</div>';
					}
					
					if($error == '') 
					{
						if(get_magic_quotes_gpc()) 
							$text = stripslashes($text);
					 
						$emailSubject = 'You\'ve been contacted by ' . $name . '.';
						$emailHeader = "You have been contacted by $name with regards to $subject. The message is as follows.\r\n\n";
						$emailBody = "\"$text\"\r\n\n";
						$emailFooter = "You can contact $name at $email";

						$message = $emailHeader . $emailBody . $emailFooter;

						mail($address, $emailSubject, $message, "From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n");
						
						if($copy)
						{
							$emailSubject = "Thank you for your message";
							$emailHeader = "Hello $name, \r\n\n You have contacted us regarding \"$subject\". This is a copy of your original message:\r\n\n";
							$emailBody = "\"$text\"\r\n\n";
							$emailFooter = "We will reply to you as soon as we can.";
							
							$message = $emailHeader . $emailBody . $emailFooter;
						
							mail($email, $emailSubject, $message, "From: $address\r\nReply-To: $address\r\nReturn-Path: $address\r\n");
						}
						
						// Email sent successfully
						echo "<h2>Email Sent Successfully</h2>";
						echo "<p>Thank you $name, your message has been send. We'll get back to you as soon as possible.</p>";
					}
				}

				if(!isset($_POST['sendMail']) || $error != ''): ?>
					
					<?php echo $error; ?>
				
					<form action="#" method="post" name="emailForm" id="emailForm" class="contact-form form-validate">
						
						<input type="text" name="name" id="contact_name" size="30" class="hidevalue inputbox" value="Name" /><br />

						<input type="email" id="contact_email" name="email" size="30" value="Email" class="required email hidevalue" maxlength="100" /><br />

						<input type="text" name="subject" id="contact_subject" size="30" class="hidevalue inputbox required" value="Subject" /><br />

						<label id="contact_textmsg" for="contact_text">Message</label><br />
						<textarea cols="50" rows="10" name="text" id="contact_text" class="hidevalue inputbox"></textarea><br />
						
						<input type="checkbox" name="email_copy" id="contact_email_copy" value="1" />
						<label for="contact_email_copy">Send copy to yourself</label>

						<br />
						<br />
						
						<button name="sendMail" class="button validate" type="submit">Send Email</button>

					</form>
					
				<?php endif; ?>
					
				</div>
				
			</div><!-- end main -->
							
			<div class="sidebar content">

				<div class="module">
					<iframe 
						name=""
						src="http://maps.google.com/?ie=UTF8&amp;ll=-22.907616,-43.228004&amp;spn=0.004467,0.010568&amp;z=17&amp;output=embed"
						width="100%"
						height="180"
						class="wrapper" >
						No Iframes
					</iframe>
				</div>
				
				<div class="separator clear"></div>
				
				<div class="module">
					<h3>How to get here</h3>

					<ol>
						<li>Proin eros nisi, dapibus nec viverra quis, consectetur et sapien.</li>
						<li>Sed euismod tempor felis, nec tristique justo pellentesque at.</li>
						<li>Aliquam vel tincidunt ante.</li>
						<li>Proin at venenatis augue. Donec nec enim.</li>
					</ol>
				</div>
				
				<div class="separator clear"></div>
				
				<div class="module"><h3>Parking</h3>
					<p>Proin eros nisi, dapibus nec viverra quis, consectetur et sapien. Sed euismod tempor felis, nec tristique justo pellentesque at.</p>
				</div>
				
			</div><!-- end sidebar -->

			<?php 
				include 'carte-footer.php'; 
				?>
			
		</div><!-- end #content-block -->
		
		<div id="carte-bottom" class="clear wrap"></div>
	</div><!-- end #carte -->
	
<?php 
	include 'footer.php'; 
	
	/**
	 * Verifies that the string is in a proper email address format.
	 *
	 * @param	string	$email	String to be verified.
	 * @return	boolean	True if string has the correct format; false otherwise.
	 */
	function isEmailAddress($email)
	{
		// Split the email into a local and domain
		$atIndex	= strrpos($email, "@");
		$domain		= substr($email, $atIndex+1);
		$local		= substr($email, 0, $atIndex);

		// Check Length of domain
		$domainLen	= strlen($domain);
		if ($domainLen < 1 || $domainLen > 255) {
			return false;
		}

		// Check the local address
		// The last character in local cannot be a period ('.')
		$allowed	= 'A-Za-z0-9!#&*+=?_-';
		$regex		= "/^[$allowed][\.$allowed]{0,63}$/";
		if (!preg_match($regex, $local) || substr($local, -1) == '.') {
			return false;
		}

		// No problem if the domain looks like an IP address
		$regex		= '/^[0-9\.]+$/';
		if (preg_match($regex, $domain)) {
			return true;
		}

		// Check Lengths
		$localLen	= strlen($local);
		if ($localLen < 1 || $localLen > 64) {
			return false;
		}

		// Check the domain
		$domain_array	= explode(".", rtrim($domain, '.'));
		$regex		= '/^[A-Za-z0-9-]{0,63}$/';
		foreach ($domain_array as $domain) {

			// Must be something
			if (!$domain) {
				return false;
			}

			// Check for invalid characters
			if (!preg_match($regex, $domain)) {
				return false;
			}

			// Check for a dash at the beginning of the domain
			if (strpos($domain, '-') === 0) {
				return false;
			}

			// Check for a dash at the end of the domain
			$length = strlen($domain) -1;
			if (strpos($domain, '-', $length) === $length) {
				return false;
			}
		}

		return true;
	}
	?>