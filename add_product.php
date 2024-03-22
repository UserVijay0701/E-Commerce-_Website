<?php
session_start();
include("dbconnect.php");
extract($_POST);
$rdate=date("d-m-Y");
if(isset($btn))
{
$max_qry = mysqli_query($connect,"select max(id) maxid from add_product");
$max_row = mysqli_fetch_array($max_qry);
$id=$max_row['maxid']+1;
$pimage = $_FILES['file']['name'];



$ins=mysqli_query("insert into add_product  values('$id','$product','$ptype','$brand','$model','$price','$quantity','$pimage','0','0','$rdate')");
//echo "insert into add_product  values('$id','$product','$ptype','$brand','$model','$price','$quantity','$pimage','$rdate')";
	if($ins)
	{
	move_uploaded_file($_FILES['file']['tmp_name'],"products/".$pimage);
	?>
	<script language="javascript">
	alert("ADD Successfully..");
	window.location.href="add_product.php";
	</script>
	<?php
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
											<li class="home-icon"><a href="admin_home.php"><span class="fa fa-home" aria-hidden="true"></span></a></li>
											<li><a href="add_product.php">Add Products</a></li>
											<li><a href="user_details.php">User Details</a></li>
											<li><a href="purchase_details.php">Purchase Details</a></li>
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
			<h2 class="inner-heading-agileits-w3layouts">Add Products</h2>
			<!--banner Slider starts Here-->
      </div>
   </div>
</div>
<!-- //banner -->
<!--contact-->

<!-- contact-form-->
		<form action="" method="post" name="form1" enctype="multipart/form-data">
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <table width="451" height="345" border="0" align="center">
              <tr>
                <th width="165" scope="row"><div align="left">Product</div></th>
                <td width="187"><label>
                  <div align="center">
                    <input name="product" type="text" id="product">
                  </div>
                </label></td>
              </tr>
              <tr>
                <th scope="row"><div align="left">Product Type </div></th>
                <td><label>
                  <div align="center">
                    <input name="ptype" type="text" id="ptype">
                    </div>
                </label></td>
              </tr>
              <tr>
                <th scope="row"><div align="left">Brand</div></th>
                <td><label>
                  <div align="center">
                    <input name="brand" type="text" id="brand">
                    </div>
                </label></td>
              </tr>
              <tr>
                <th scope="row"><div align="left">Model no.</div></th>
                <td><label>
                  <div align="center">
                    <input name="model" type="text" id="model">
                    </div>
                </label></td>
              </tr>
              <tr>
                <th scope="row"><div align="left">Price</div></th>
                <td><label>
                  <div align="center">
                    <input name="price" type="text" id="price">
                    </div>
                </label></td>
              </tr>
              <tr>
                <th scope="row"><div align="left">Quantity</div></th>
                <td><label>
                  <div align="center">
                    <input name="quantity" type="text" id="quantity">
                    </div>
                </label></td>
              </tr>
              <tr>
                <th height="76" scope="row">Image</th>
                <td><label>
                  <input type="file" name="file">
                </label></td>
              </tr>
              <tr>
                <th scope="row"><div align="left"></div></th>
                <td><label>
                  <input type="submit" name="btn" value="Submit">
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