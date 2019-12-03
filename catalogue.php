 <?php include 'candy/databases.php'?>
 
 <!DOCTYPE html>
<html>
<title>Sugar Rush!</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="images/others/icon.png" type="image/gif" sizes="16x16">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body{font-family:Courier New;background-image: url("images/others/background.PNG");background-repeat: repeat-y repeat-x;}
th{font-weight: normal;}
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
<?php
	$per_hal=5;
	$jumlah_record=mysql_query("SELECT COUNT(*) FROM candy");
	$jum=mysql_result($jumlah_record, 0);
	$halaman=ceil($jum / $per_hal);
	$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
	$start = ($page - 1) * $per_hal;
?>
	<table class="w3-border" style="width:70%">
	<tr><td><form action="catalogue.php" method="get" enctype="multipart/form-data">
	<input type="text" placeholder="Search Candy Code" name="Find" size="30">
	<input type="submit" class="w3-button w3-pink" name="bsubmit" value="Search!"></form></td><td>OR</td>
	<td><form action="catalogue.php" method="get" enctype="multipart/form-data">
		<select name="Colour" >
		<option value="Assorted"> Assorted</option>
		<option value="Black"> Black</option>
		<option value="Blue"> Blue</option>
		<option value="Brown"> Brown</option>
		<option value="Green"> Green</option>
		<option value="Orange"> Orange</option>
		<option value="Pink"> Pink</option>
		<option value="Purple"> Purple </option>
		<option value="Red"> Red </option>
		<option value="White"> White </option>
		<option value="Yellow">Yellow</option></select>
		<input type="submit" name="bsubmit" class="w3-button w3-pink" value="Search!">
		</form></td>
	<td>Total Candy : <?php echo $jum; ?></td>
	</tr>
	</table>
	<table align="center" class="w3-border w3-bordered" style="width:70%;">
	<center>
	<br>
	<tr><th class="w3-pink">CANDY</th>
		<th style="width:400px;" class="w3-pink">DETAILS</th>
		</tr>
		<?php 
		if(isset($_GET['Find'])){
		$Find=mysql_real_escape_string($_GET['Find']);
		$query=mysql_query("SELECT * FROM candy 
		WHERE `candy_code` = '$Find'
		ORDER BY candy_code limit $start, $per_hal");

		}
		else if(isset($_GET['Colour'])){
		$Colour=mysql_real_escape_string($_GET['Colour']);
		$query=mysql_query("SELECT * FROM candy 
		WHERE `candy_color` = '$Colour'	ORDER BY candy_code limit $start, $per_hal");}
		else{
		$query=mysql_query("SELECT * FROM candy ORDER BY candy_code limit $start, $per_hal");}
		$no=1;
		while($row=mysql_fetch_array($query)){
		$code = $row["candy_code"];
		$name = $row['candy_name'];
		$color = $row['candy_color'];
		$quantity = $row['candy_quantity'];
		$price = $row['candy_price'];
		$id = base64_encode($code);
		echo "<tr>
		<td align='center'><img src='data:image/jpeg;base64,".base64_encode($row['candy_image'])."' height='200px'></td>
		<td align='center'><b>Code : </b>$code<br><b>Name : </b>$name<br><b>Color : </b>$color<b><br>Quantity (kg) : </b>$quantity<br><b>Price (per kg) : </b>RM $price</td>
		</tr>";}	
		?>
		</center></table>
		<table><tr><td><?php 
		for($x=1;$x<=$halaman;$x++){
		?><a href="?page=<?php echo $x ?>"><?php echo $x ?></a>
		<?php } ?></td></tr></table>
</div>
</center>
<img src="images/others/logo.png" id="logo">
</body>

</html>
