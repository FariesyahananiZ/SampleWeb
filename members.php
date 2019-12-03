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
#box1{width: 1229px; height: 475px; position: absolute; top: 140px; left: 69px; z-index: -1; overflow: auto;}
#box2{width: 1135px; height: 433px; position: absolute; top: 20px; left: 48px;}
#dropdown{position: absolute; top: 50px; left: 1251px;}
#dropcontent{position: absolute; top: 80px; left: 1138px;}
#logo{width: 160px; position: absolute; top: 10px; left: 600px; z-index: 2;}
#navbar{width: 90%; position: absolute; top: 102px; left: 69px;}
#tabledayah{position: absolute; top: 46px; left: 250px; height: 220px; width: 340px;}
#tableamira{position: relative; top: -12px; left: 7px; height: 220px; width: 340px;}
#tableazifah{position: relative; top: -11px; left: 7px; height: 220px; width: 340px;}
#tableyasmeen{position: absolute; top: 46px; left: 250px; height: 220px; width: 340px;}
#tablefariesya{position: relative; top: -2px; left: 7px; height: 220px; width: 340px;}
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
<img src="images/others/logo.png" id="logo">
<div class="w3-bar w3-border w3-light-grey w3-center" id="navbar">
  <a href="index.php" style="width:25%" class="w3-bar-item w3-button w3-mobile">ABOUT US</a>
  <a href="catalogue.php" style="width:25%" class="w3-bar-item w3-button w3-mobile">CATALOGUE</a>
  <a href="members.php" style="width:25%" class="w3-bar-item w3-button w3-mobile w3-pink">OUR TEAM</a>
  <a href="contact.php" style="width:25%" class="w3-bar-item w3-button w3-mobile">CONTACT US</a>
</div>
<div class="w3-container w3-white w3-border" id="box1">
<div class="w3-container w3-white w3-border" id="box2" style="overflow:auto;"><br>
<div class="w3-border" style="position:absolute;top:25px;left:180px;font-family:Courier New;">TEAM MEMBERS</div>
<div class="w3-bar-block w3-white w3-card" style="width:42px;height:79px;position:absolute;top:25px;left:120px;">
  <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Team 1')" id="defaultSelect">1</button>
  <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Team 2')">2</button>
</div>
<div id="Team 1" class="w3-container optGallery w3-animate-top" style="display;width:550px;position:relative;left:20px;">
<table class="teambox">
<tr><th align="center"><img src="images/members/hidayah.png" class="memsize"></th><td></td></tr>
<tr><td align="center"><img src="images/members/hidayah1.jpg" class="memsize"></td>
<td rowspan="2"><table class="w3-striped w3-border" id="tabledayah">
<tr><th class="w3-pink">NAME</th><td>Ku Nur Hidayah Binti Ku Ahmad Romzi</td></tr>
<tr><th class="w3-pink">STUDENT NUMBER</th><td>2016483166</td></tr>
<tr><th class="w3-pink">NRIC NUMBER</th><td>980507145046</td></tr>
<tr><th class="w3-pink">PROGRAMME</th><td>Diploma in Computer Science (CS110)</td></tr>
<tr><th class="w3-pink">GROUP</th><td>M3CS1105C</td></tr>
<tr><th class="w3-pink">EMAIL</th><td>hxdayah98@gmail.com</td></tr></table></td></tr><tr><td>&nbsp;</td></tr>
<tr><th align="center"><img src="images/members/amira.png" class="memsize"></th><td></td></tr>
<tr><td align="center"><img src="images/members/amira1.jpg" class="memsize"></td>
<td rowspan="2"><table class="w3-striped w3-border" id="tableamira">
<tr><th class="w3-pink">NAME</th><td>Nuramirah Syahirah Binti Zainurin</td></tr>
<tr><th class="w3-pink">STUDENT NUMBER</th><td>2016696318</td></tr>
<tr><th class="w3-pink">NRIC NUMBER</th><td>980528106820</td></tr>
<tr><th class="w3-pink">PROGRAMME</th><td>Diploma in Computer Science (CS110)</td></tr>
<tr><th class="w3-pink">GROUP</th><td>M3CS1105C</td></tr>
<tr><th class="w3-pink">EMAIL</th><td>amira.zainurin@gmail.com</td></tr></table></td></tr><tr><td>&nbsp;</td></tr>
<tr><th align="center"><img src="images/members/azifah.png" class="memsize"></th><td></td></tr>
<tr><td align="center"><img src="images/members/azifah1.jpg" class="memsize"></td>
<td rowspan="2"><table class="w3-striped w3-border" id="tableazifah">
<tr><th class="w3-pink">NAME</th><td>Nurul Azifah Binti Mohd Khalid</td></tr>
<tr><th class="w3-pink">STUDENT NUMBER</th><td>2016801808</td></tr>
<tr><th class="w3-pink">NRIC NUMBER</th><td>981127106074</td></tr>
<tr><th class="w3-pink">PROGRAMME</th><td>Diploma in Computer Science (CS110)</td></tr>
<tr><th class="w3-pink">GROUP</th><td>M3CS1105C</td></tr>
<tr><th class="w3-pink">EMAIL</th><td>azifahkhalid98@gmail.com</td></tr></table></td></tr>
<tr><td>&nbsp;</td></tr></table>
</div>
<div id="Team 2" class="w3-container optGallery w3-animate-top" style="display;width:550px;position:relative;left:20px;">
<table class="teambox">
<tr><th align="center"><img src="images/members/yasmeen.png" class="memsize"></th><td></td></tr>
<tr><td align="center"><img src="images/members/yasmeen1.jpg" class="memsize"></td>
<td rowspan="2"><table class="w3-striped w3-border" id="tableyasmeen">
<tr><th class="w3-pink">NAME</th><td>Nur Aneesa Yasmeen Binti M Suaree</td></tr>
<tr><th class="w3-pink">STUDENT NUMBER</th><td>2016801464</td></tr>
<tr><th class="w3-pink">NRIC NUMBER</th><td>981030115548</td></tr>
<tr><th class="w3-pink">PROGRAMME</th><td>Diploma in Computer Science (CS110)</td></tr>
<tr><th class="w3-pink">GROUP</th><td>M3CS1105C</td></tr>
<tr><th class="w3-pink">EMAIL</th><td>aneesayasmeen98@gmail.com</td></tr></table></td></tr><tr><td>&nbsp;</td></tr>
<tr><th align="center"><img src="images/members/fariesya.png" class="memsize"></th><td></td></tr>
<tr><td align="center"><img src="images/members/fariesya1.jpg" class="memsize"></td>
<td rowspan="2"><table class="w3-striped w3-border" id="tablefariesya">
<tr><th class="w3-pink">NAME</th><td>Noor Fariesya Hanani Binti Zulkefle</td></tr>
<tr><th class="w3-pink">STUDENT NUMBER</th><td>2016801468</td></tr>
<tr><th class="w3-pink">NRIC NUMBER</th><td>980402385246</td></tr>
<tr><th class="w3-pink">PROGRAMME</th><td>Diploma in Computer Science (CS110)</td></tr>
<tr><th class="w3-pink">GROUP</th><td>M3CS1105C</td></tr>
<tr><th class="w3-pink">EMAIL</th><td>fiesyaz98@gmail.com</td></tr></table></td></tr><tr><td></td></tr>
<tr><td>&nbsp;</td></tr></table>
</div>
</div></center>
</body>
<script>
function openLink(evt, animName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("optGallery");
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
document.getElementById("defaultSelect").click();
</script>
</html>
