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
td{text-align: center;}
.text{overflow: auto; height: 300px; font-family: Calibri; font-size: 14px; background-color: white;}
.resizeimg{height:100px;}
.container{width:700px;position:absolute;top:75px;left:50px;}
.memsize{width: 200px;}
#box1{width: 1229px; height: 475px; position: absolute; top: 140px; left: 69px;overflow: auto;}
#dropdown{position: absolute; top: 50px; left: 1251px;}
#dropcontent{position: absolute; top: 80px; left: 1138px;}
#logo{width: 160px; position: absolute; top: 10px; left: 600px;}
#navbar{width: 90%; position: absolute; top: 102px; left: 69px;}
#aboutus1{position: absolute; top: 80px; left: 100px; width: 20%;}
#aboutus2{position: absolute; top: 80px; left: 365px; width: 20%;}
#aboutus3{position: absolute; top: 250px; left: 365px; width: 20%;}
#aboutus4{position: absolute; top: 86px; left: 630px; width: 40%;}
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
  <a href="index.php" style="width:25%" class="w3-bar-item w3-button w3-mobile w3-pink">ABOUT US</a>
  <a href="catalogue.php" style="width:25%" class="w3-bar-item w3-button w3-mobile">CATALOGUE</a>
  <a href="members.php" style="width:25%" class="w3-bar-item w3-button w3-mobile">OUR TEAM</a>
  <a href="contact.php" style="width:25%" class="w3-bar-item w3-button w3-mobile">CONTACT US</a>
</div>
<div class="w3-container w3-white w3-border" id="box1">
<br><br>
<table class="w3-border w3-striped w3-bordered" id="aboutus1">
<tr><th class="w3-pink">COMPANY BACKGROUND</th></tr>
<tr><td><div class="text">Sugar Rush! is a newly operating candy store that focus on selling myriad 
type of candies with different colours, taste, shapes and sizes to match customer's personal preferences. 
The company has been successfully founded with the join of five bestfriends who discovered the opportunity
to initiate the confectionary business at their area upon request from the communities who want to have a candy store there. 
The inspiration to use Sugar Rush! as the company's name is gained from the game appeared in "Wreck It Ralph" movie,
"Sugar Rush" that is basicaally a racing car game that use candies element such as chocolates, lollipop, jellies, cookies
and candy mints for the location of the race as well as the character themselves. </div></td></tr>
</table>
<table class="w3-border w3-striped w3-bordered" id="aboutus2">
<tr><th class="w3-pink">MISSION</th></tr>
<tr><td><div class="text" style="height:130px;">To be widely recognized by both tourist and locals
 for our exceptional and superior quality candies, jellies and cookies.
 We stand by the saying "Give Someone a delicious morsel of chocolates,
 we can count on receiving a smile in return". It means that we can guarantee
customer's satisfaction after purchasing our high quality treats. </div></td></tr>
</table>
<table class="w3-border w3-striped w3-bordered" id="aboutus3">
<tr><th class="w3-pink">VISION</th></tr>
<tr><td><div class="text" style="height:130px;">Sugar Rush Candy Store endeavors to offer 
the broadest range of flavor experiences as possible to our target
audience. We also determined to provide the best and delicious candies
in the country as well as delighting customers' taste buds daily.
Besides, we also aim to satisfy the needs, serve quality candies and render 
great services to customers.
</div></td></tr>
</table>
<table class="w3-border w3-striped w3-bordered" id="aboutus4">
<tr><th class="w3-pink" colspan="3">WE PROVIDE CANDIES FOR:</th></tr>
<tr><td><img src="images/aboutus/pic17.jpg" style="height:115px;"></td><td><img src="images/aboutus/pic15.png" style="height:115px;"></td>
<td><img src="images/aboutus/pic11.jpg" style="height:115px;"></td></tr>
<tr><td class="w3-pink">BIRTHDAY PARTY</td><td class="w3-pink">ANNIVERSARY</td><td class="w3-pink">GRADUATION DAY</td></tr>
<tr><td><img src="images/aboutus/pic9.jpg" style="height:115px;"></td><td><img src="images/aboutus/pic13.jpg" style="height:115px;"></td>
<td><img src="images/aboutus/pic1.jpg" style="height:115px;"></td></tr>
<tr><td class="w3-pink">SCHOOL EVENTS</td><td class="w3-pink">DOOR GIFTS</td><td class="w3-pink">PRESENTS</td></tr>
</table>
</div></center>
<img src="images/others/logo.png" id="logo">
</body>
</html>
