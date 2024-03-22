<?php
session_start();
include("dbconnect.php");
extract($_POST);
$rdate=date("d-m-Y");
$uname=$_SESSION['uname'];
$q1=$_SESSION['q1'];
$bid=$_SESSION['bid'];
$quantity="";
$price="";
//echo $uname;
	  $qry1=mysql_query("select * from add_product  where id=$bid");
			while($row=mysql_fetch_array($qry1))
			{
			 $quantity=$row['quantity'];
			$price1=$row['price'];
			$ptype=$row['ptype'];
			$productname=$row['product'];
			$model=$row['model'];
			$image=$row['image'];
			//echo $quantity,$price1,$productname,$model;
			
			}
$total=$q1*$price1;

 

if(isset($btn))
{

$p1=$quantity-$q1;
mysql_query("update add_product set quantity=$p1 where id=$bid");


$max_qry = mysql_query("select max(id) maxid from payment");
$max_row = mysql_fetch_array($max_qry);
$id=$max_row['maxid']+1;

$par=mysql_query("insert into  purchase_details values('$id','$uname','$productname','$ptype','$model','$price1','$p1','$total','$image','$rdate')");
echo "insert into  purchase_details values('$id','$uname','$productname','$ptype','$model','$price1','$p1','$total','$image','$rdate')";
if($par)
	{
	?>
	<script language="javascript">
	alert("Purchase Successfully..");
	window.location.href="search.php";
	</script>
	<?php
	}
$qry=mysql_query("insert into payment values('$id','$uname','$accountno','$cardno','$vdate','$rdate')");
if($qry)
	{
	
	?>
	<script language="javascript">
	alert("Payment Successfully..");
	window.location.href="search.php";
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
			<h2 class="inner-heading-agileits-w3layouts">payment</h2>
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
		  <table width="363" height="161" border="0" align="center" cellpadding="5">
            <tr>
              <th colspan="2" class="txt" scope="col"><div align="center"></div></th>
            </tr>
            <tr>
              <td>Product Id </td>
              <td><?php echo $bid;?>&nbsp;
                  <p>&nbsp;</p></td>
            </tr>
            <tr>
              <td>Quantity</td>
              <td><?php echo $q1;?>
                  <p>&nbsp;</p></td>
            </tr>
            <tr>
              <td>Price</td>
              <td><?php echo $price1;?>
                  <p>&nbsp;</p></td>
            </tr>
            <tr>
              <td>Total</td>
              <td><?php echo $total;?>&nbsp;
                  <p>&nbsp;</p></td>
            </tr>
            <tr>
              <td>Holder Name</td>
              <td><p>
                  <input type="text" name="uname" required/>
                </p>
                  <p>&nbsp;</p>
                <p>&nbsp; </p></td>
            </tr>
            <tr>
              <td>Account No</td>
              <td><p>
                  <input type="text" name="accountno" required/>
                </p>
                  <p>&nbsp;</p>
                <p>&nbsp; </p></td>
            </tr>
            <tr>
              <td>card No</td>
              <td><p>
                  <input type="text" name="cardno" required/>
                </p>
                  <p>&nbsp;</p>
                <p>&nbsp; </p></td>
            </tr>
            <tr>
              <td>vaild date</td>
              <td><p>
                  <input type="date" name="vdate" required/>
                </p>
                  <p>&nbsp;</p>
                <p>&nbsp; </p></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><p>&nbsp; </p>
                  <p>
                    <input type="submit" name="btn" value="Submit" />
                  </p>
                <p>&nbsp; </p></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><?php echo $msg; ?></td>
            </tr>
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
	           <p>© 2020 Prezzie. All rights reserved | Design by <a href="#">Admin</a></p>
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