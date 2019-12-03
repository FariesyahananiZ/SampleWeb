<?php include 'dbcon.php'?>
<!DOCTYPE html>
<html>
<title>Sugar Rush!</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="images/others/icon.png" type="image/gif" sizes="16x16">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body{font-family:Courier New;background-image: url("images/others/background.PNG");background-repeat: repeat-y repeat-x;}
th{font-weight: normal; font-family: Courier New; font-size: 13px;}
td{font-family: Calibri; font-size: 14px;}
.text{overflow: auto; height: 180px; font-family: Calibri; font-size: 13px; background-color: white;}
.resizeimg{height:100px;}
.memsize{width: 220px;}
#box1{width: 1229px; height: 475px; position: absolute; top: 140px; left: 69px; overflow: auto;}
#box2{width: 1135px; height: 433px; position: absolute; top: 20px; left: 48px;}
#dropdown{position: absolute; top: 50px; left: 1251px;}
#dropcontent{position: absolute; top: 80px; left: 1138px;}
#logo{width: 160px; position: absolute; top: 10px; left: 600px;}
#navbar{width: 90%; position: absolute; top: 102px; left: 69px;}
::selection {background-color: #ffccdd; color: #000;
}
</style>
<body>
 <div class="w3-dropdown-hover">
  <i class="w3-button w3-pink fa fa-align-justify" id="dropdown"></i>
  <div class="w3-dropdown-content w3-bar-block w3-border" id="dropcontent">
    <a href="order.php" class="w3-bar-item w3-button">Order Tracker</a>
    <a href="videos.php" class="w3-bar-item w3-button">Videos</a>
  </div>
  </div>
<center>
<div class="w3-bar w3-border w3-light-grey w3-center" id="navbar">
  <a href="index.php" style="width:25%" class="w3-bar-item w3-button w3-mobile">ABOUT US</a>
  <a href="catalogue.php" style="width:25%" class="w3-bar-item w3-button w3-mobile">CATALOGUE</a>
  <a href="members.php" style="width:25%" class="w3-bar-item w3-button w3-mobile">OUR TEAM</a>
  <a href="contact.php" style="width:25%" class="w3-bar-item w3-button w3-mobile">CONTACT US</a>
</div>
<div class="w3-container w3-white w3-border" id="box1">
<div class="w3-container w3-white w3-border" id="box2" style="overflow:auto;"><br>
<table class="w3-border" name="ordert" cellpadding="3" style="width:80%;">
<tr><th colspan="2" class="w3-pink"><h4>ORDER TRACKER</h4></th></tr>
<form method="POST" action="order.php"><tr><th>ENTER YOUR EMAIL ADDRESS: <input type="text" name="txtsearch" style="border: 1px grey solid;text-align:center;font-weight:bold;" size="45">
&nbsp;<input type="submit" name="submit" value="Search"></th></tr>
</form>
</table>
<?php

if ((isset($_POST["txtsearch"]))) 
{
  $search=$_POST["txtsearch"];
  $query_displaycust = "SELECT cust_id FROM customer WHERE cust_email='$search'";
  $displaycust = mysql_query($query_displaycust);
  $idcust = $displaycust;

	$query_displayorder = "SELECT * FROM orders where cust_id = $idcust";
	$row_displayorder = mysql_query($query_displayorder);
	$total=mysql_result($row_displayorder, 0);
	if($total > 0){
		$orderid = $row_displayorder["order_id"];
		$candycode = $row_displayorder['candy_code'];
		$ordername = $row_displayorder['order_name'];
		$orderquantity = $row_displayorder['order_quantity'];
		$orderdate = $row_displayorder['order_date'];
		$orderstat = $row_displayorder['order_status'];
		echo "
		<table class='w3-border w3-striped w3-bordered' id='orderTab' style='width:80%'>
		<tr><th>ORDER ID</th><td>$orderid</td></tr>
		<tr><th>CANDY CODE</th><td>$candycode</td></tr>
		<tr><th>CANDY NAME</th><td>$ordername</td></tr>
		<tr><th>QUANTITY</th><td>$orderquantity</td></tr>
		<tr><th>ORDER DATE</th><td>$orderdate</td></tr>
		<tr><th>ORDER STATUS</th><td>$orderstat</td></tr>
		</table>";
	}
	else
		echo "<table class='w3-border w3-striped w3-bordered'><tr>Sorry, there is no record found!</tr></table>";
}
?>
</div></center>
<img src="images/others/logo.png" id="logo">
</body>
</html>
