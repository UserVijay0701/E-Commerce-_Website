<?php
session_start();
include("dbconnect.php");
extract($_POST);
$uname=$_SESSION['uname'];
$bid=$_REQUEST['bid'];
$select=mysqli_query($connect,"select * from search_count");
if($bid)
{

$qry=mysqli_query($connect,"select * from add_product where id='$bid'");
echo "select * from add_product where id='$bid'";
$r2= mysqli_fetch_array($qry);
	
	$uname1=$r2['uname'];
	$product=$r2['product'];
	$encrypted=md5($r2['product']);
	$public_key=substr($encrypted,0,8);
	$private_key=substr($encrypted,8,8);

	
	$qry=mysql_query("update search_count set private_key='$private_key',public_key='$public_key',status='1' where id='$bid'");
	//echo "update search_count set private_key='$private_key',public_key='$public_key',status='1' where id='$bid'";
	//echo "insert into search_count values('$id','$uname1','$product','$public_key','$private_key','$encrypted')";
	$email="karunchandru99@gmail.com";
		if($qry)
		{
		include("email.php");
		$objEmail  =  new CI_Email();
						  $objEmail->from('securtiy@gmail.com',"Avoidance Of User Behaviour");
						  $objEmail->to($email);
						  $objEmail->subject("Private Key");
						  $objEmail->message("Private Key : ".$private_key);
						  //echo $otp;
						       if($objEmail->send())
							   {
								echo $email;
								}
		$fp=fopen("Encrypt.txt","w");
		fwrite($fp,$product);
		echo "<script>alert('Key Generated success');location:decrypt_search.php;</script>";
		}
	
		else
		{
		echo "<script>alert('Not Generated Key!!!!');</script>";
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
<style type="text/css">
<!--
.style1 {font-weight: bold}
-->
</style>
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
											<li class="home-icon"><a href="authority_home.php"><span class="fa fa-home" aria-hidden="true"></span></a></li>
											<li><a href="key_generated.php">Key Generated</a></li>
											<li><a href="decrypt_search.php">Decrypt Search</a></li>
											<li><a href="index.php">Logout</a></li>
											
										</ul>	
										<div class="clearfix"> </div>
									</div>	
								</nav>	
							</div>
						</div>

					<div class="clearfix"></div>
	      </div>
				<!-- banner-text -->
			<h2 class="inner-heading-agileits-w3layouts">Authority Key Generate</h2>
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
		  <table width="475" height="84" border="0" align="center">
            <tr>
              <th scope="row"><div align="center"><strong>id</strong></div></th>
              <td><div align="center"><strong>Username</strong></div></td>
              <td><div align="center"><strong>Key Generated </strong></div></td>
            </tr>
			<?php
			while($row=mysqli_fetch_array($select))
			{
			?>
            <tr>
              <th scope="row"><div align="center"><?php echo $row['id'];?></div></th>
              <td><div align="center"><?php echo $row['encrypted'];?></div></td>
              <td>
			    <div align="center">
			      <?php
			  $sts=$row['status'];
			  if($sts==1)
			  {
			  echo "Already Generated.";
			  }
			  elseif($sts==0)
			  {
			  ?>
			        <a href="key_generated.php?bid=<?php echo $row['id'];?>">Key Generated</a>
		          <?php
			  
			  }
			  ?>
	          </div></td>
            </tr>
			<?php
			}
			?>
          </table>
		  <h1 align="center" class="h1 style1" >&nbsp;</h1>
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