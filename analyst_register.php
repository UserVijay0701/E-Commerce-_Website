<?php
session_start();
include("dbconnect.php");
extract($_POST);
$rdate=date('d-m-y');
$otp=rand(99999,10000);
//echo $otp;
if(isset($btn))
{
$max_id=mysqli_query($connect,"select max(id) maxid from analyst_reg");
$max_row=mysqli_fetch_array($max_id);
$id=$max_row['maxid']+1;
$qry=mysqli_query($connect,"insert into analyst_reg values('$id','$name','$contact','$email','$otp','$rdate')");
	if($qry)
	{
	include("email.php");
	$objEmail  =  new CI_Email();
						  $objEmail->from('securtiy@gmail.com',"Avoidance Of User Behaviour");
						  $objEmail->to($email);
						  $objEmail->subject("OTP");
						  $objEmail->message("OTP,".$otp);
						  //echo $otp;
						       if($objEmail->send())
							   {

								}
								?>
	<script language="javascript">
	alert("Register Successfully..");
	window.location.href="analyst_login.php";
	</script>
	<?php
	}
	else
	{
	echo "<script>alert('Invalide UserName Password');</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Prezzie an Ecommerce Online Shopping Category Bootstrap Responsive Website Template | Contact :: w3layouts</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="prezzie Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- banner -->
<div class="banner_top" id="home">
	<div data-vide-bg ="video/gift-packs">
		<div class="center-container inner-container">
			<div class="w3_agile_header">
						<div class="w3_agileits_logo">
								<h1><a href="index.php">Avoidance<span>of User Behaviour</span></a></h1>
			  </div>
							<div class="w3_menu">
							<div class="agileits_w3layouts_banner_info">
				
								
							</div>
								<div class="top-nav">
								<nav class="navbar navbar-default">
									<div class="container">
										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
										</button>
									</div>
									<!-- Collect the nav links, forms, and other content for toggling -->
									<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										<ul class="nav navbar-nav">
											<li class="home-icon"><a href="index.php"><span class="fa fa-home" aria-hidden="true"></span></a></li>
											<li><a href="admin.php">Admin</a></li>
											<li><a href="user_login.php">User</a></li>
											<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Intermediator <span class="caret"></span></a>
												<ul class="dropdown-menu">
													<li><a class="hvr-bounce-to-bottom" href="analyst.php">Analyst</a></li>
													<li><a class="hvr-bounce-to-bottom" href="aggregator_login.php">Aggregator</a></li>
													<li><a class="hvr-bounce-to-bottom" href="authority.php">Authority</a></li>
												</ul>
											</li>
											<!--<li><a href="contact.html" class="active">Contact</a></li>-->
											
										</ul>	
										<div class="clearfix"> </div>
									</div>	
								</nav>	
							</div>
						</div>

					<div class="clearfix"></div>
	      </div>
				<!-- banner-text -->
			<h2 class="inner-heading-agileits-w3layouts">Analyst Register</h2>
			<!--banner Slider starts Here-->
      </div>
   </div>
</div>
<!-- //banner -->
<!--contact-->

<!-- contact-form-->
		<form action="" method="post">
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <table width="382" height="246" border="0" align="center">
              <tr>
                <th scope="row">Name</th>
                <td><label>
                  <div align="center">
                    <input name="name" type="text" id="name" required="">
                    </div>
                </label></td>
              </tr>
              <tr>
                <th height="62" scope="row">contact</th>
                <td><label>
                  <div align="center">
                    <input name="contact" type="text" id="contact" required="">
                    </div>
                </label></td>
              </tr>
              <tr>
                <th height="56" scope="row">Email</th>
                <td><label>
                  
                <div align="center">
                  <input type="email" name="email" id="email" required="">
                </div>
                </label></td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td><label>
                  <div align="center">
                    <input type="submit" name="btn" value="Submit">
                    </div>
                </label></td>
              </tr>
            </table>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		</form>
		
	<div class="clearfix"></div>
<!-- //contact-form -->

<!-- //contact -->
<!--footer-->
	
		<div class="copyright">
	           <p>© 2020  All rights reserved | Design by <a href="#">Admin</a></p>
        </div>
 
  <!-- Modal1 -->
						
						<!-- //Modal1 -->

<!--//footer-->

	<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- cart-js -->
	<script src="js/minicart.min.js"></script>
	<script>
		// Mini Cart
		paypal.minicart.render({
			action: '#'
		});

		if (~window.location.search.indexOf('reset=true')) {
			paypal.minicart.reset();
		}
	</script>
<!-- //cart-js --> 
<!-- video-bg -->
<script src="js/jquery.vide.min.js"></script>
<!-- //video-bg -->
<!-- Nice scroll -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- //Nice scroll -->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
</body>
</html>