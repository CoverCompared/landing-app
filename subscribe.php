<?php session_start();
error_reporting(E_ALL ^ E_NOTICE);
//$err_message = $_REQUEST['message'];
if ($_SERVER['HTTP_HOST'] == "localhost") {
   define('SITE_SUB_PATH', '/simple_works/formworks/leaders');
}
else {
 define('SITE_SUB_PATH', '');
}

define('SITE_URL_PATH', 'http://'.$_SERVER['HTTP_HOST'].SITE_SUB_PATH);

define('WEBSITE_NAME','polkacover');
define('ADMINHEAD',"Admin Panel Of ".WEBSITE_NAME);
define('ADMIN_NAME',"Admin ".WEBSITE_NAME);

define('SITE_EMAIL','ksadani@gmail.com');
define('ADMIN_EMAIL','ksadani@gmail.com');
//define('SITE_EMAIL','subashvns@gmail.com');
//define('ADMIN_EMAIL','subashvns@gmail.com');
function send_email($fromPerson, $fromEmail, $to, $subject, $message){
		$headers = "From: $fromPerson<$fromEmail> \n";
		$headers .= "Reply-To: $fromEmail \r\n";
		$headers .= "X-Mailer: PHP/". phpversion();
		$headers .= "X-Priority: 3 \n";
		$headers .= "MIME-version: 1.0\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\n";
		$msg=$message;
		@mail($to, $subject, $msg, $headers);
}

if ($_POST['Submit']=="Subscribe") {

	//if(($_SESSION['verification_code'] == $_REQUEST['security_code'])) {
    $email=$_POST['email'];
		
	$mess= "
	<table width='96%' cellspacing='0' cellpadding='2' border='0'>
	 <tr><td>Dear ".$_POST['email']." ,<br/><br/></td></tr>
	 <tr><td>Thank you for registering your interest,, We will get back to you in 24-48 hours. <br/><br/><br />Regards,<br>
	 Team ".WEBSITE_NAME.",</strong><br>
<br>
Email ID : ksadani@gmail.com<br>
</td></tr>
	</table>";
	$fromPerson=ADMIN_NAME;
	$from_email=ADMIN_EMAIL;
	$subject="Enquiry @ ".WEBSITE_NAME;	
	//echo $mess;
	//send_email($fromPerson, $from_email, $email, $subject, $mess);
	
	$ContactPerson=ADMIN_NAME;
    
	$to_email=SITE_EMAIL;
	$subject1="Enquiry @ ".WEBSITE_NAME;	
	$mess1= "
	<table width='96%' cellspacing='0' cellpadding='2' border='0'>
	<tr><td>Dear ".$ContactPerson.",<br/><br/></td></tr>
	<tr><td> 
	<table width='100%'  border='0' align='left'>
  <tr>
    <td colspan='3' align='left'>You have received an Subscribe form. Details of which are as follows:</td>
  </tr>";
 
  
 
  if (!empty($_POST['email'])) {
	  $mess1.= "<tr>
		<td width='24%' align='left'><strong>Email ID</strong></td>
		<td width='6%' align='center'>:</td>
		<td width='70%' align='left'>".$_POST['email']."</td>
	  </tr>";
  }
  
  
$mess1.= "</table>
	<tr><td>";
	$mess1.= "Thanks<br>Team<br>".WEBSITE_NAME."</td></tr>
	</table>";	
//echo $mess1;
	send_email($_POST['first_name'], $email, $to_email, $subject1, $mess1);	
	//$err_message="Your enquiry has been sent successfully. We will get back to you soon.";
	header("Location:thankyou2.html");
	exit;
	/*}
	else{
	 $err_message_con='Please fill right verification code.';
   }*/
}


?>
