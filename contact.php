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
.text{overflow: auto; height: 50px; font-family: Calibri; font-size: 13px; background-color: white;}
.resizeimg{height:100px;}
.cali1{position: absolute; top: 8px; left: 125px;}
.cali2{position: absolute; top: 8px; left: 911px;}
.teambox{font-size: 12px; font-family: Calibri;}
.memsize{width: 200px;}
#box1{width: 1229px; height: 475px; position: absolute; top: 140px; left: 69px; z-index: -1; overflow: auto;}
#box2{width: 1135px; height: 433px; position: absolute; top: 20px; left: 48px;}
#dropdown{position: absolute; top: 50px; left: 1251px;}
#dropcontent{position: absolute; top: 80px; left: 1138px;}
#logo{width: 160px; position: absolute; top: 10px; left: 600px; z-index: 2;}
#navbar{width: 90%; position: absolute; top: 102px; left: 69px;}
#conbox1{position: absolute; top: 160px; left: 220px; width: 57%;}
#movingpic{width: 760px; height: 100px; position: absolute; top: 47px; left: 175px;}
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
  <a href="catalogue.php" style="width:25%" class="w3-bar-item w3-button w3-mobile">CATALOGUE</a>
  <a href="members.php" style="width:25%" class="w3-bar-item w3-button w3-mobile">OUR TEAM</a>
  <a href="contact.php" style="width:25%" class="w3-bar-item w3-button w3-mobile w3-pink">CONTACT US</a>
</div>
<div class="w3-container w3-white w3-border" id="box1">
<br><br><marquee id="movingpic" scrollamount="10" behavior="scroll"><table align="center">
<tr><td><img src="images/aboutus/image1.jpg" class="resizeimg"></td>
<td><img src="images/aboutus/image2.jpg" class="resizeimg"></td>
<td><img src="images/aboutus/image3.jpg" class="resizeimg"></td>
<td><img src="images/aboutus/image4.jpg" class="resizeimg"></td>
<td><img src="images/aboutus/image5.jpg" class="resizeimg"></td>
<td><img src="images/aboutus/image6.jpg" class="resizeimg"></td>
<td><img src="images/aboutus/image7.jpg" class="resizeimg"></td></tr>
</table></marquee>
<br><table class="w3-border w3-striped w3-bordered" id="conbox1">
<tr><td><table class="w3-border w3-striped" style="height:230px;">
<tr><th colspan="2" style="background-color:white;"><img src="images/others/contact.png" style="width:400px;"></th></tr>
<tr><th style="background-color:white;"><i class="fa fa-google" style="font-size:30px;"></i></th>
<td style="font-family:Calibri;font-size:13px;background-color:#ffccdd;">&nbsp;sugarrushdotcom@gmail.com</td></tr>
<tr><th style="background-color:white;"><i class="fa fa-phone" style="font-size:30px;"></i></th>
<td style="font-family:Calibri;font-size:13px;background-color:#ffccdd;">&nbsp;+(60)-355451765 (Fax) <br> &nbsp;+(60)-192902563 (Office)</td></tr>
<tr><th style="background-color:white;"><i class="fa fa-map-pin" style="font-size:30px;"></i></th>
<td style="font-family:Calibri;font-size:13px;background-color:#ffccdd;">&nbsp;A-G-2 Block A, Taman Ostia Utama Seksyen 14,<br>&nbsp;43650 Bandar Baru Bangi, Selangor Darul Ehsan</td></tr>
</table></td>
<td rowspan="4"><img src="images/others/map.jpg" class="w3-border" style="height:260px;"></td></tr>
</table></div></center>
<img src="images/others/logo.png" id="logo">
</body>
<script>
function openLink(evt, animName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-pink", "");
  }
  document.getElementById(animName).style.display = "block";
  evt.currentTarget.className += " w3-pink";
}
</script>
</html>
