<?php
session_start();
include("dbconnect.php");
extract($_POST);
$uname=$_SESSION['uname'];
$rdate=date("d-m-Y");
$qry1=mysqli_query($connect,"select * from add_product");

if(isset($btn))
{
 $key_value=$_REQUEST['search'];

$qry=mysqli_query($connect,"select * from add_product where product='$key_value' or brand='$key_value' or model='$key_value' or price='$key_value'");

$val=mysqli_fetch_array($qry);
//echo $val;
$count_val=$val['count'];
$get_product=$val['product'];
echo $get_product;
//echo $count_val;
$count=$count_val+1;
//echo $count;
mysqli_query($connect,"update add_product set uname='$uname',count='$count' where product='$key_value'");

$qry1=mysqli_query($connect,"select * from  add_product  where product='$key_value' or brand='$key_value' or model='$key_value' or price='$key_value'");
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
			<h2 class="inner-heading-agileits-w3layouts">User Search Product</h2>
			<!--banner Slider starts Here-->
      </div>
   </div>
</div>
<!-- //banner -->
<!--contact-->

<!-- contact-form-->
		<form action="" method="post">
		  <p>&nbsp;</p>
		  
=		  <table width="317" height="138" border="0" align="center">
              <tr>
                <th scope="row"><div align="center">
                  <label>
                  <input name="search" type="text" id="search">
                  </label>
                </div></th>
                <td><label>
                  <div align="center">
                    <label>
                    <input name="btn" type="submit" id="btn" value="Submit">
                    </label>
                  </div>
                </label></td>
              </tr>
            </table>
		  <p>&nbsp;</p>
		  <table width="942" height="101" border="0" align="center">
            <tr>
              <th scope="row"><div align="center">id</div></th>
              <td><div align="center">product</div></td>
              <td><div align="center">Product type </div></td>
              <td><div align="center">Brand</div></td>
              <td><div align="center">Model</div></td>
              <td><div align="center">Price</div></td>
              <td><div align="center">Quantity</div></td>
              <td><div align="center">Image</div></td>
              <td><div align="center">Buy Now </div></td>
            </tr>
            <?php
			while($row=mysqli_fetch_array($qry1))
			{
			?>
            <tr>
              <th scope="row"><div align="center"><?php echo $row['id'];?></div></th>
              <td><div align="center"><?php echo $row['product'];?></div></td>
              <td><div align="center"><?php echo $row['ptype'];?></div></td>
              <td><div align="center"><?php echo $row['brand'];?></div></td>
              <td><div align="center"><?php echo $row['model'];?></div></td>
              <td><div align="center"><?php echo $row['price'];?></div></td>
              <td><div align="center"><?php echo $row['quantity'];?></div></td>
              <td><div align="center"><img src="products/<?php echo $row['image']; ?>" alt="img" width="42" height="42" /></div></td>
              <td><div align="center"><a href="buy_now.php?bid=<?php echo $row['id'];?>&&uname=<?php echo $uname;?>">Click Here</a></div></td>
            </tr>
            <?php
			}
			?>
          </table>
		  <p>&nbsp;</p>
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