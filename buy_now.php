<?php
session_start();
include("dbconnect.php");
extract($_POST);
$uname1=$_SESSION['uname'];
//echo $uname;
$bid=$_REQUEST['bid'];
$uname=$_REQUEST['uname'];
$qry=mysqli_query($connect,"select * from add_product where id=$bid");
$row=mysqli_fetch_array($qry);
$get_product=$row['product'];
if(isset($btn))
{
$q1=$_REQUEST['quantity'];
$_SESSION['q1']=$q1;
$_SESSION['bid']=$bid;
}
function cryp($string)
 {

    // Let's define our key here
    $key = ('magic_key');

    // Our plaintext/ciphertext
    $text = $string;

    // Our output text
    $outText = '';

    // Iterate through each character
    for($i=0; $i<strlen($text); )
    {
        for($j=0; ($j<strlen($key) && $i<strlen($text)); $j++,$i++)
        {
            $outText = $text ($i) ^ $key ($j);
            //echo 'i=' . $i . ', ' . 'j=' . $j . ', ' . $outText{$i} . '<br />'; // For debugging
        }
    }
    return $outText;
}

$encrypt=cryp(get_product);
// echo $key_value;
 $s2=cryp($encrypt);
$max_qry = mysqli_query("select max(id) maxid from search_count");
$max_row = mysqli_fetch_array($max_qry);
$id=$max_row['maxid']+1;
$qry=mysqli_query("insert into search_count values('$id','$uname1','$get_product','0','0','$encrypt','0')");
//echo "insert into search_count values('$id','$uname','$get_product','','','$encrypt')";
if($qry)
{
header("location:payment.php?id=".$bid);
}
else
{
echo "<script>alert('Not encrypted!!!!');</script>";
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
											<li class="home-icon"><a href="user_home.php"><span class="fa fa-home" aria-hidden="true"></span></a></li>
											<li><a href="search.php">Search</a></li>
											<li><a href="pruchase_product.php">Purchase Product</a></li>
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
			<h2 class="inner-heading-agileits-w3layouts">Buy Product</h2>
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
		  <table width="428" height="430" border="0" align="center" cellpadding="5">
            <tr>
              <th height="48" colspan="2" class="txt" scope="col"><div align="center">Buy product</div></th>
            </tr>
            <tr>
              <td>Product</td>
              <td><?php echo $row['product']; ?>
                  <p>&nbsp;</p></td>
            </tr>
            <tr>
              <td>Product Type </td>
              <td><?php echo $row['ptype']; ?>
                  <p>&nbsp;</p></td>
            </tr>
            <tr>
              <td>Model no.</td>
              <td><?php echo $row['model']; ?>
                  <p>&nbsp;</p></td>
            </tr>
            <tr>
              <td>Price</td>
              <td><?php echo $row['price']; ?>
                  <p>&nbsp;</p></td>
            </tr>

		    <tr>
              <td>Quantity</td>
		      <td><p>
                  <input type="text" name="quantity" required/>
                </p>
		          <p>&nbsp; </p></td>
	        </tr>
  <td>&nbsp;&nbsp;&nbsp;</td>
      <td><p>
          <input type="submit" name="btn" value="Buy Now" />
        </p>
          <p>&nbsp; </p>
          <p></p></td>
  </tr>
          </table>
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