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



if ($_POST['Submit']=="Join Us") {



	if(($_SESSION['verification_code'] == $_REQUEST['security_code'])) {

    $email=$_POST['email'];

		

	$mess= "

	<table width='96%' cellspacing='0' cellpadding='2' border='0'>

	 <tr><td>Dear ".$_POST['first_name']." ,<br/><br/></td></tr>

	 <tr><td>Thanks for registering your interest, We will get back to you in 24-48 hours. <br/><br/><br /> Regards,<br>

	 Team ".WEBSITE_NAME.",</strong><br>

<br>

Email ID : ksadani@gmail.com<br>

<br>

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

    <td colspan='3' align='left'>You have received an enquiry. Details of which are as follows:</td>

  </tr>";

  if (!empty($_POST['first_name'])) {

	  $mess1.= "<tr>

		<td width='24%' align='left'><strong>Name</strong></td>

		<td width='6%' align='center'>:</td>

		<td width='70%' align='left'>".$_POST['first_name'];

        			

	$mess1.= "</td>

	  </tr>";

  }

   if (!empty($_POST['company_name'])) {

	  $mess1.= "<tr>

		<td width='24%' align='left'><strong>Company name</strong></td>

		<td width='6%' align='center'>:</td>

		<td width='70%' align='left'>".$_POST['company_name'];

        			

	$mess1.= "</td>

	  </tr>";

  }

  

 

  if (!empty($_POST['email'])) {

	  $mess1.= "<tr>

		<td width='24%' align='left'><strong>Email ID</strong></td>

		<td width='6%' align='center'>:</td>

		<td width='70%' align='left'>".$_POST['email']."</td>

	  </tr>";

  }

  

  if (!empty($_POST['subject'])) {

	  $mess1.= "<tr>

		<td width='24%' align='left'><strong>Subject</strong></td>

		<td width='6%' align='center'>:</td>

		<td width='70%' align='left'>".$_POST['subject'];

        			

	$mess1.= "</td>

	  </tr>";

  }

  

  

  if (!empty($_POST['Mobile'])) {

	  $mess1.= "<tr>

		<td width='24%' align='left'><strong>Mobile</strong></td>

		<td width='6%' align='center'>:</td>

		<td width='70%' align='left'>".$_POST['Mobile']."</td>

	  </tr>";

  }

  

 if (!empty($_POST['phone'])) {

	  $mess1.= "<tr>

		<td width='24%' align='left'><strong>phone</strong></td>

		<td width='6%' align='center'>:</td>

		<td width='70%' align='left'>".$_POST['phone']."</td>

	  </tr>";

  } 

  

  if (!empty($_POST['call_back_time'])) {

	  $mess1.= "<tr>

		<td width='24%' align='left'><strong>Best call back time</strong></td>

		<td width='6%' align='center'>:</td>

		<td width='70%' align='left'>".$_POST['call_back_time']."</td>

	  </tr>";

  }

       

  if (!empty($_POST['nationality'])) {

	  $mess1.= "<tr>

		<td width='24%' align='left'><strong>Nationality</strong></td>

		<td width='6%' align='center'>:</td>

		<td width='70%' align='left'>".$_POST['nationality']."</td>

	  </tr>";

  }

  if (!empty($_POST['contribute'])) {

	  $mess1.= "<tr>

		<td width='24%' align='left'><strong>Contribute</strong></td>

		<td width='6%' align='center'>:</td>

		<td width='70%' align='left'>".$_POST['contribute']."</td>

	  </tr>";

  }

  if (!empty($_POST['hear'])) {

	  $mess1.= "<tr>

		<td width='24%' align='left'><strong>Hear</strong></td>

		<td width='6%' align='center'>:</td>

		<td width='70%' align='left'>".$_POST['hear']."</td>

	  </tr>";

  }

   if (!empty($_POST['vaue_add'])) {

	  $mess1.= "<tr>

		<td width='24%' align='left'><strong>contributor</strong></td>

		<td width='6%' align='center'>:</td>

		<td width='70%' align='left'>".$_POST['vaue_add']."</td>

	  </tr>";

  }

  

  if (!empty($_POST['description'])) {

	  $mess1.= "<tr>

		<td width='24%' align='left'><strong>Message </strong></td>

		<td width='6%' align='center'>:</td>

		<td width='70%' align='left'>".$_POST['description']."</td>

	  </tr>";

  }

$mess1.= "</table>

	<tr><td>";

	$mess1.= "Thanks<br>Team<br>".WEBSITE_NAME."</td></tr>

	</table>";	

//echo $mess1;

	send_email($_POST['first_name'], $email, $to_email, $subject1, $mess1);	

	//$err_message="Your enquiry has been sent successfully. We will get back to you soon.";

	header("Location:thankyou.html");

	exit;

	}

	else{

	 $err_message_con='Please fill right verification code.';

   }

}





?>

<!DOCTYPE html>



<html lang="en">



<head>



<meta charset="utf-8">



<meta http-equiv="X-UA-Compatible" content="IE=edge">



<title>Polkacover</title>



<link rel="shortcut icon" href="favicon.ico">



<meta name="viewport" content="width=device-width, initial-scale=1">



<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



<link href="//fonts.googleapis.com/css?family=Open+Sans:400,500,600,700%7cPoppins:300,400,500,600,700" rel="stylesheet">



<link href="//use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">







<link rel="stylesheet" href="css/main.css">



<link rel="stylesheet" href="css/conditional_sh.css">







<!--[if lt IE 9]>



<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>



<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>



<![endif]-->







</head>



<body>







<div class="top_bg_inr"><!-- #BeginLibraryItem "/Library/header.lbi" -->
<header>
<!--<div class="right_menu opner"  data-navid="#mySidenav">
<a href="javascript:void(0)">
<i class="fas fa-bars" aria-hidden="true"></i></a></div>

<div id="mySidenav" class="header_dd">
<div class="bubble x1"></div>
<div class="bubble x2"></div>
<div class="bubble x3"></div>
<div class="bubble x4"></div>
<div class="bubble x5"></div>
<div class="bubble x6"></div>
<div class="bubble x7"></div>
<div class="bubble x8"></div>

<a href="javascript:void(0)" data-navid="#mySidenav" class="closebtn">&times;</a>

<div class="mob_nav">
<ul class="">
<li><a href="../index.html" title="Home">Home </a></li>
<li><a href="../index.html#team" title="Our Team ">Our Team  </a></li>
<li><a href="../join-privatesale.html" title="Polkacover Network">Polkacover Network</a></li>
<li><a href="../index.html#about-token" title="About The Token"> About The Token</a></li>
<li><a href="../index.html#roadmap" title="Our Roadmap"> Our Roadmap </a></li>
<li><a href="../bounty-campaign.html" title="Bounty Campign "> Bounty Campign   </a></li>
</ul>
</div>


<div class="topmenu">
<ul>
<li><a href="../pdf/emr-final.pdf" target="_blank"> Whitepaper </a></li>
<li><a href="http://helpmesammy.com/" target="_blank">Demo </a></li>
</ul>

</div>

<div class="topmenu2">
<ul>
<li class=" animated2 drop_eff2" data-wow-delay="0.1s">
<a href="../index.html#protocol"> <span class="arr"></span>What is the Polkacover Protocol ?</a></li>
<li class=" animated2 drop_eff2" data-wow-delay="0.2s">
<a href="../index.html#platform" ><span class="arr"></span>A little bit about our Platform</a></li>

<li class=" animated2 drop_eff2 " data-wow-delay="0.3s">
<a href="../index.html#network" ><span class="arr"></span>What does Polkacover Network Provide</a></li>
 
<li class=" animated2 drop_eff2 " data-wow-delay="0.4s">
<a href="../index.html#about-token" ><span class="arr"></span>About the Polkacover Protocol Token</a></li>

<li class=" animated2 drop_eff2 " data-wow-delay="0.4s">
<a href="../index.html#target-market" ><span class="arr"></span>Target Market has over 1 Billion</a></li>

<li class=" animated2 drop_eff2 " data-wow-delay="0.5s">
<a href="../index.html#different" ><span class="arr"></span>What do you do differently?</a></li>


<li class=" animated2 drop_eff2 " data-wow-delay="0.5s">
<a href="../index.html#project-plan"><span class="arr"></span>Project Plan</a></li>

<li class=" animated2 drop_eff2" data-wow-delay="0.6s">
<a href="../index.html#roadmap" ><span class="arr"></span> The Road Ahead</a></li>
</ul>
</div>


</div>-->

<div class="container">
<div class="header_pos">

<div class="navbar navbar-expand-lg navbar-light">
<a href="index.html" title="Polkacover Protocol" class="navbar-brand"><img src="images/logo.png" alt="Polkacover Protocol" title="Polkacover Protocol"></a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span></button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav bd-navbar-nav flex-row ml-auto">
<li class="nav-item"><a href="index.html" title="Home">Home </a></li>
<li class="nav-item"><a href="index.html#team" title="Our Team ">Our Team  </a></li>
<li><a href="javascript:void(0)" data-toggle="dropdown" data-hover="dropdown" title="Polkacover Network" class=" dropdown-toggle" aria-expanded="true">Polkacover Network
</a>

<ul class="dropdown-menu">
<li><a href="index.html#platform" class="scroll">Polkacover Platform</a></li>
<li><a href="index.html#protocol" class="scroll">About PolkaCover</a></li>
</ul>

</li>
<li class="nav-item"><a href="index.html#about-token" class="scroll" title="About the Token"> About the Token</a></li>
<li class="nav-item"><a href="index.html#roadmap" class="scroll" title="Our Roadmap"> Our Roadmap </a></li>

</ul>
</div>

<div class="flex-row ml-auto d-none d-xl-block">
<ul class="top_link">
<li><a href="pdf/Whitepaper.pdf" target="_blank"> Whitepaper </a></li>
</ul>

</div>

</div>


</div>
</div>
</header><!-- #EndLibraryItem --></div>



<!-- HEADER ENDS -->











<nav aria-label="breadcrumb" class="breadcrumb_bg">



<div class="container">



<ol class="breadcrumb">



<li class="breadcrumb-item"><a href="index.html">Home</a></li>



<li class="breadcrumb-item active" aria-current="page">Join Our Private Sale</li>



</ol>



</div>



</nav>







<div class="container">



<div class="mid_area">
<div class="cms_area">
<div class="joinus_note">
<p class="">Please provide as much information as you can. The more detailed information provided, the more chance to be selected. </p>

<p>The information you provide will help us find the right candidates to strengthen the Polkacover community. </p>

<p>Once you are approved and selected, you'll receive an email from <a href="mailto:contact@polkacover.com">contact@polkacover.com</a>.</p> 







<p>[SCAM ALERT] Please be aware of scams. Some scammers will use a forged email  still showing <a href="mailto:contact@polkacover.com">contact@polkacover.com</a></p>







<p>Please double check your email source or headers to confirm.</p></div>





<? if($err_message_con!="") {

		echo "<p><center><font style=\"color:#ee0000;\"><strong>".$err_message_con."</strong></font></center></p>";

	$err_message = '';		

	} ?>

<form action="" method="post" name="myform" id="myform" role="form" class="contactForm">

<div class="join_form_w">



<div class="reg_header"><h1>Private Sale Registration </h1></div>



<div class="form-row">



<div class="form-group col-md-6">



<label for="f_name">Name <span class="red">*</span></label>



<input type="text" name="first_name" id="first_name" class="form-control" value="<? if(isset($_POST['first_name'])){ echo $_POST['first_name'];  }?>" placeholder="First Name *">



</div>







<div class="form-group col-md-6">



<label for="l_name">Mobile No. <span class="red">*</span></label>



<input type="text" class="form-control" name="phone" id="phone" value="<? if(isset($_POST['phone'])){ echo $_POST['phone'];  }?>">



</div>







<div class="form-group col-md-6">



<label for="email">Email-ID  <span class="red">*</span></label>



<input type="text" class="form-control" name="email" id="email" value="<? if(isset($_POST['email'])){ echo $_POST['email'];  }?>" placeholder="Email ID *">



</div>







<div class="form-group col-md-6">



<label for="nationality">Nationality  <span class="red">*</span></label>



<input type="text" class="form-control" name="nationality" id="nationality" value="<? if(isset($_POST['nationality'])){ echo $_POST['nationality'];  }?>" >



<small class="fs11">We are not accepting participants from US/Canada/China/UAE/Saudi Arabia </small>



</div>











<div class="form-group col-md-12">



<label for="contribute">What is the expected size of your contribution? <span class="red">*</span> </label>



<input type="text" class="form-control" name="contribute" id="contribute" value="<? if(isset($_POST['contribute'])){ echo $_POST['contribute'];  }?>" >







</div>















<div class="form-group col-md-12">



<label for="mobile">Where did you hear about Polkacover?  <span class="red">*</span></label>



<input type="text" class="form-control" name="hear" id="hear" value="<? if(isset($_POST['hear'])){ echo $_POST['hear'];  }?>" >







</div>



<div class="form-group col-md-12">



<label for="interest">What value add would you be able to provide to Polkacover as an early contributor? <span class="red">*</span></label>



<input type="text" class="form-control" name="vaue_add" id="vaue_add" value="<? if(isset($_POST['vaue_add'])){ echo $_POST['vaue_add'];  }?>" >



</div>



















<div class="form-group col-md-12">



<label for="mobile">Verification Code <span class="red">*</span></label>



<input name="security_code" id="security_code" type="text" class="fl form-control" placeholder="Enter Code " style="width:130px">



<img src="<?php echo SITE_URL_PATH;?>/CaptchaSecurityImages.php?characters=5" id="captcha">

<a href="javascript:void(0);" onClick="document.getElementById('captcha').src='CaptchaSecurityImages.php?'+Math.random(); document.getElementById('form1').focus();" class="mt12 ml12"><img src="images/ref2.png" alt="" class="ml10 vam"></a>





</div>







<p class="mt15"><input name="Submit" type="submit" value="Join Us" class="btn btn-danger"></p>



</div>



</div>

</form>

<div class="clearfix"></div>



</div></div>



</div>















<div class="cb"></div><!-- #BeginLibraryItem "/Library/footer.lbi" -->
<footer class="footer_bg">
<div class="container">

<div class="subscribe_sect mt20">
<div class="subscribe_hed">Subscribe to Our Newsletter</div>
<div class="nwsltr_input mt20">
<input name="" type="text" placeholder="Your email address">
<input name="" type="button" class="subscribe_btn" value="Subscribe"  onClick="window.open('thankyou3.html','_parent');">

</div>

</div>

<div class="ft_link"> 
<a href="index.html" title="Home">Home   </a>       
<a href="index.html#network" title="Polkacover Network">Polkacover Network </a>         
<a href="index.html#about-token" title="About The Token">About The Token</a>          
<a href="index.html#roadmap" title="Our Roadmap">Our Roadmap </a>         
<a href="index.html#team" title="Our Core Team">Our Core Team </a>             
<a href="index.html#project-plan" title="Project Plan">Project Plan  </a>                
<a href="pdf/Whitepaper.pdf" title="Whitepaper">Whitepaper</a></div>


<div class="copy poppins mt20"> © 2020 polkacover.com. All rights reserved.
</div>

</div>
<!--copyright-->
<script type="text/javascript"> //<![CDATA[
  var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.trust-provider.com/" : "http://www.trustlogo.com/");
  document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
//]]></script>
<script language="JavaScript" type="text/javascript">
  TrustLogo("https://www.positivessl.com/images/seals/positivessl_trust_seal_md_167x42.png", "POSDV", "none");
</script>
</footer>
<div class="footer_btm">
<div class=" d-flex flex-row">
<!-- <div class="ft_L_col">

<div class="login_cre">  <a href="#"><i class="fas fa-circle"></i> Sign In</a>
  <a href="#"><i class="fas fa-circle"></i> Sign Up</a>
</div>
</div>-->

<div class="ft_R_col ml-auto">
<div class="footer-social-icons ">
<ul class="social-icons list-unstyled">

<li><a href="https://twitter.com/polkacover" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
<li><a href="https://www.linkedin.com/company/polkacover/about/" title="Linked In" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
<li><a href="https://polkacover.medium.com/" title="Medium" target="_blank"><i class="fab fa-medium-m"></i></a></li>
<li><a href="javascript:void(0)" title="Github" target="_blank"><i class="fab fa-github-alt"></i></a></li>
<!--<li><a href="javascript:void(0)" title="Bitcoin" target="_blank"><i class="fab fa-bitcoin"></i></a></li>-->


</ul>
</div>

<div class="ft_circle_lnk">
<a href="https://t.me/joinchat/Sc_DyFJogkbsi2m8ntWXtA" target="_blank" title="Telegram"><i class="fas fa-paper-plane"></i></a>
<a href="join-privatesale.html"><i class="fas fa-envelope"></i></a>
</div>
</div>
</div></div><!-- #EndLibraryItem --><!-- FOOTER ENDS --> 







<p id="back-top"><a href="#top"><span></span></a></p>



<script src="//ajax.aspnetcdn.com/ajax/jquery/jquery-1.10.2.min.js"></script>



<script type="text/javascript">var Page='';</script>



<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>







<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>







<script type="text/javascript" src="Scripts/script.int.dg.js"></script>

<script language="JavaScript" src="gen_validatorv4.js"

    type="text/javascript" xml:space="preserve"></script>

<script  type="text/javascript">

 var frmvalidator = new Validator("myform");

 frmvalidator.addValidation("first_name","req","Please enter your Name");

 frmvalidator.addValidation("first_name","maxlen=50","Max length for FirstName is 50");	

   //frmvalidator.addValidation("phone","req","Please enter your phone");

   frmvalidator.addValidation("phone","req","Please enter your Mobile or phone number ");

 frmvalidator.addValidation("phone","maxlen=50");

frmvalidator.addValidation("phone","numeric",'Please enter valid Mobile or phone number');

 //frmvalidator.addValidation("course","req","Please select your course");

  frmvalidator.addValidation("email","maxlen=50");

 frmvalidator.addValidation("email","req");

 frmvalidator.addValidation("email","email","Please enter valid email");



 /* frmvalidator.addValidation("Mobile","req","Please enter your Mobile");

 frmvalidator.addValidation("Mobile","maxlen=50");

frmvalidator.addValidation("Mobile","numeric","Please enter valide mobile number");*/

 frmvalidator.addValidation("nationality","req","Please enter your nationality");

 frmvalidator.addValidation("contribute","req","Please enter contribute");

 frmvalidator.addValidation("hear","req","Please enter your hear");

 frmvalidator.addValidation("vaue_add","req","Please enter your Contributor");

 frmvalidator.addValidation("security_code","req","Please enter Verification Code");



</script>

</body>



</html>