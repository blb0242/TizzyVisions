<?php
	
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	

	$name = '';
	$subject = '';
	$message = '';
	$email = '';

	if (!empty($_POST)) {

		require "PHPMailer/src/PHPMailer.php";
		require "PHPMailer/src/OAuth.php";
		require "PHPMailer/src/SMTP.php";
		require "PHPMailer/src/POP3.php";
		require "PHPMailer/src/Exception.php";
		
		$name = $_POST['name'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$email = $_POST['email'];
	
		$mail = new PHPMailer\PHPMailer\PHPMailer();

		//Create a new PHPMailer instance

		//Tell PHPMailer to use SMTP
		$mail->isSMTP();
		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		//$mail->SMTPDebug   = 2;
		$mail->DKIM_domain = 'www.tizzyvisions.com';
		//Ask for HTML-friendly debug output
		//$mail->Debugoutput = 'html';
		//Set the hostname of the mail server
		$mail->Host        = "a2plcpnl0446.prod.iad2.secureserver.net";
		//Set the SMTP port number - likely to be 25, 465 or 587
		$mail->Port        = 465;
		//Whether to use SMTP authentication
		$mail->SMTPAuth    = true;
		//Username to use for SMTP authentication
		$mail->Username    = "contact@tizzyvisions.com";
		//Password to use for SMTP authentication
		$mail->Password    = "bbrown32";
		$mail->SMTPSecure  = 'ssl';
		//Set who the message is to be sent from
		$mail->setFrom('contact@tizzyvisions.com', 'Contact TV');
		$mail->addReplyTo($email, $name);
		//Set who the message is to be sent to
		$mail->addAddress('contact@tizzyvisions.com', 'Contact TV');
		$mail->addBCC('tizzy@tizzyvisions.com');
		
		$mail->isHTML(true);  // Set email format to HTML
		//Set the subject line
		$bodyContent = '<h1>'.$name.' has contacted you from your website!</h1>';
		$bodyContent .= '<h3>'.$name.' wants to talk about '.$subject.'.</h3>';
		$bodyContent .= '<p>'.$message.'</p><br>';
		//$bodyContent .= '<!-- Start Square Appointments Embed code --> <a target="_top" style="background-color: #9C31B7; color: white; height: 40px; text-transform: uppercase; font-family: 'Square Market', 'helvetica neue', helvetica, arial, sans-serif; letter-spacing: 1px; line-height: 38px; padding: 0 28px; border-radius: 3px; font-weight: 500; font-size: 14px; cursor: pointer; display: inline-block;" href="https://squareup.com/appointments/book/WA0H4KKD3PBNN/tizzy-visions-denton-tx" rel="nofollow">Book now!</a> <!-- End Square Appointments Embed code -->';

		$mail->Subject = $subject;
		$mail->Body    = $bodyContent;
 
		//send the message, check for errors
		if (!$mail->send()) {
		    echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
		    header("Location: contact.php");
		}
		
	}
?>