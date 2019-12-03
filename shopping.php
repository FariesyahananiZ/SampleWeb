 <?php include 'dbcon.php'?>
 <?php

mysql_select_db($database_dbcon, $conn);
$query_displaycust = "SELECT * FROM customer";
$displaycust = mysql_query($query_displaycust, $conn) or die(mysql_error());
$row_displaycust = mysql_fetch_assoc($displaycust);
$customer = mysql_num_rows($displaycust);

?>
 <!DOCTYPE html>
<html>
<title>Sugar Rush!</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="images/others/icon.png" type="image/gif" sizes="16x16">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<style>
body{font-family:Courier New;background-image: url("images/others/background.PNG");background-repeat: repeat-y repeat-x;}
th{font-weight: normal;width: 40%;font-weight:bold;}
.text{overflow: auto; height: 180px; font-family: Calibri; font-size: 13px; background-color: white;}
.resizeimg{height:100px;}
.cali1{position: absolute; top: 8px; left: 143px;}
.cali2{position: absolute; top: 8px; left: 911px;}
.teambox{font-size: 12px; font-family: Calibri;}
.memsize{width: 200px;}
#box1{width: 1229px; height: 475px; position: absolute; top: 140px; left: 69px;overflow: auto;}
#dropdown{position: absolute; top: 50px; left: 1251px;}
#dropcontent{position: absolute; top: 80px; left: 1138px;}
#logo{width: 160px; position: absolute; top: 10px; left: 600px;}
#navbar{width: 90%; position: absolute; top: 102px; left: 69px;}
#aboutus1{position: absolute; top: 160px; left: 202px; width: 20%;}
#aboutus2{position: absolute; top: 160px; left: 437px; width: 20%;}
#aboutus3{position: absolute; top: 160px; left: 671px; width: 20%;}
#compbg{position: absolute; top: 160px; left: 201px; width: 20%;}
#mission{position: absolute; top: 160px; left: 436px; width: 20%;}
#vision{position: absolute; top: 160px; left: 670px; width: 20%;}
#form1{width:65%;}
::selection {background-color: #ffccdd; color: #000;}
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
  <a href="catalogue.php" style="width:25%" class="w3-bar-item w3-button w3-mobile w3-pink">CATALOGUE</a>
  <a href="members.php" style="width:25%" class="w3-bar-item w3-button w3-mobile">OUR TEAM</a>
  <a href="contact.php" style="width:25%" class="w3-bar-item w3-button w3-mobile">CONTACT US</a>
</div>
<div class="w3-container w3-white w3-border" id="box1">
<br><br>
<div class="form-group">  
<form name="form1" id="form1" onSubmit = "return checkError()" method="post" action="receipt.php">  
                               <table class="table table-bordered" id="dynamic_field">  
								<tr><th colspan="2" class="w3-pink"><center> ORDER FORM</center> </th> </tr>
								<tr>
								<th> CUSTOMER ID : </th>
								<td><?php 
								$custid=$customer + 1;
								echo $custid ?></td></tr>
								<tr><th> CUSTOMER NAME : </th>
								<td><input type="text" name="cust_name" size="47"></td>
								</tr>
								<tr><th> EMAIL : </th>
								<td><input type="text" name="cust_email" size="47"></td>
								</tr> 
								<tr><th> PHONE NUMBER : </th>
								<td> <input type = "text" name="cust_num" size="47"> </td>
								</tr>
								<tr><th> ADDRESS : </th>
								<td><textarea cols="45" rows="3"name="cust_address" size="47"></textarea></td>
								</tr>
								<tr><th align="center" > PAYMENT METHOD </th>
								<td> <input type="radio" name="payment" value="Debit" checked> Debit Card <input type="radio" name="payment" value="Cash"> Cash</td></tr>
								<tr><th >DELIVERY(Please tick if yes)</th>
								<td><input type="checkbox" name="delivery" value="delivery"> YES </td></tr>
                        <!--div class="top-row"-->
						<tr><th colspan="2" class="w3-pink">Candy Information</th></tr>
                        <div class="field-wrap">
                            <tr><th>Candy Name</th>
                            <td><?php
								$sql = "SELECT candy_name FROM candy";
								$result = mysql_query($sql);
								$row = mysql_fetch_array($result);

								echo "<select id='order_name' name='order_name' <option value = '0'>Select a candy</option>";
								while ($row = mysql_fetch_array($result)) 
							{
								if ($row['candy_name'] == $search_user['order_name']) 
								{
								$selectCurrent=' selected';
								echo '<option value="'.$search_user['order_name'].'"  '.$selectCurrent.'>'.$search_user['order_name'].'</option>';
								}
								else
								{
									echo "<option value='" . $row['candy_name'] ."'>" . $row['candy_name'] ."  </option>";
								}
							}
							echo "</select>"; ?></td></tr>
                        </div>
                        <div class="field-wrap">
                            <tr><th>Quantity</th>
                            <td><input type="text" name="order_quantity" size="42"></td></tr>
                        </div>
						<tr><td colspan="2" align="center"><input type="submit" name="submit" id="submit"  class="w3-button w3-pink" value="Submit"></td></tr>
            </table>
             </form>  
</div></center>
<img src="images/others/logo.png" id="logo">
</body>
<script>
function errorCheck()
{
	var name=document.form1.cust_name.value;
	var email=document.form1.cust_email.value;
	var phone=document.form1.cust_phonenum.value;
	var address=document.form1.cust_address.value;
	var cname=document.form1.
}
</script>
</html>
