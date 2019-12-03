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
.resizeimg{height:120px;}
.cali1{position: absolute; top: 8px; left: 125px;}
.cali2{position: absolute; top: 8px; left: 911px;}
.teambox{font-size: 12px; font-family: Calibri;}
.memsize{width: 200px;}
.w3-modal-content{height: 620px; width: 700px; position: absolute; top: 140px; left: 330px; background-color: transparent;}
#box1{width: 1229px; height: 475px; position: absolute; top: 140px; left: 69px; overflow: auto;}
#box2{width: 1135px; height: 433px; position: absolute; top: 20px; left: 48px;}
#dropdown{position: absolute; top: 50px; left: 1251px;}
#dropcontent{position: absolute; top: 80px; left: 1138px;}
#logo{width: 160px; position: absolute; top: 10px; left: 600px; }
#navbar{width: 90%; position: absolute; top: 102px; left: 69px;}
#picture{position: absolute; top: 35px; left: 437px;}
::selection {background-color: #ffccdd; color: #000;}
</style>
<body>
  <div class="w3-dropdown-hover">
  <i class="w3-button w3-pink fa fa-align-justify" id="dropdown"></i>
  <div class="w3-dropdown-content w3-bar-block w3-border" id="dropcontent">
    <a href="images.php" class="w3-bar-item w3-button">Gallery</a>
    <a href="videos.php" class="w3-bar-item w3-button w3-pink">Videos</a>
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
<div id="picture"><img src="images/gallery/avatarvideo.png" style="height:150px;"></div>
<table align="center" class="w3-border w3-white" style="font-family:Calibri;font-size:12px;position:absolute;top:180px;left:53px;">
<tr class="w3-animate-zoom"><td><img src="images/gallery/bubblegum.png" onclick="document.getElementById('bubblegum').style.display='block'" style="cursor:pointer;" class="resizeimg">
<div id="bubblegum" class="w3-modal" onclick="this.style.display='none'"><div class="w3-modal-content w3-animate-zoom">
<video width="700" height="410" controls><source src="videos/bubblegum.mp4" type="video/mp4"></video></div></td>
<td><img src="images/gallery/candycane.png" onclick="document.getElementById('candycane').style.display='block'" style="cursor:pointer;" class="resizeimg">
<div id="candycane" class="w3-modal" onclick="this.style.display='none'"><div class="w3-modal-content w3-animate-zoom">
<video width="700" height="410" controls><source src="videos/candycane.mp4" type="video/mp4"></video></div>
</td>
<td><img src="images/gallery/jawbreaker.png" onclick="document.getElementById('jawbreaker').style.display='block'" style="cursor:pointer;" class="resizeimg">
<div id="jawbreaker" class="w3-modal" onclick="this.style.display='none'"><div class="w3-modal-content w3-animate-zoom">
<video width="700" height="410" controls><source src="videos/jawbreaker.mp4" type="video/mp4"></video></div></td>
<td><img src="images/gallery/licorice.png" onclick="document.getElementById('licorice').style.display='block'" style="cursor:pointer;" class="resizeimg">
<div id="licorice" class="w3-modal" onclick="this.style.display='none'"><div class="w3-modal-content w3-animate-zoom">
<video width="700" height="410" controls><source src="videos/licorice.mp4" type="video/mp4"></video></div></td>
<td><img src="images/gallery/lollipop.png" onclick="document.getElementById('lollipop').style.display='block'" style="cursor:pointer;" class="resizeimg">
<div id="lollipop" class="w3-modal" onclick="this.style.display='none'"><div class="w3-modal-content w3-animate-zoom">
<video width="700" height="410" controls><source src="videos/lollipop.mp4" type="video/mp4"></video></div></td>
<td><img src="images/gallery/rockcandy.png" onclick="document.getElementById('rockcandy').style.display='block'" style="cursor:pointer;" class="resizeimg">
<div id="rockcandy" class="w3-modal" onclick="this.style.display='none'"><div class="w3-modal-content w3-animate-zoom">
<video width="700" height="410" controls><source src="videos/rockcandy.mp4" type="video/mp4"></video></div></td>
<td><img src="images/gallery/skittles.png" onclick="document.getElementById('skittles').style.display='block'" style="cursor:pointer;" class="resizeimg">
<div id="skittles" class="w3-modal" onclick="this.style.display='none'"><div class="w3-modal-content w3-animate-zoom">
<video width="700" height="410" controls><source src="videos/skittles.mp4" type="video/mp4"></video></div></td>
<td><img src="images/gallery/wafer.png" onclick="document.getElementById('wafer').style.display='block'" style="cursor:pointer;" class="resizeimg">
<div id="wafer" class="w3-modal" onclick="this.style.display='none'"><div class="w3-modal-content w3-animate-zoom">
<video width="700" height="410" controls><source src="videos/wafer.mp4" type="video/mp4"></video></div></td>
<td><img src="images/gallery/japanesecandy.png" onclick="document.getElementById('japanesecandy').style.display='block'" style="cursor:pointer;" class="resizeimg">
<div id="japanesecandy" class="w3-modal" onclick="this.style.display='none'"><div class="w3-modal-content w3-animate-zoom">
<video width="700" height="410" controls><source src="videos/japanesecandy.mp4" type="video/mp4"></video></div></td></tr>
<tr style="font-family:Courier New;"><th style="width:100px;background-color:#ffccdd;text-align:center;">VIDEO NAME</th>
<th style="width:100px;background-color:#ffccdd;text-align:center;">VIDEO NAME</th>
<th style="width:100px;background-color:#ffccdd;text-align:center;">VIDEO NAME</th>
<th style="width:100px;background-color:#ffccdd;text-align:center;">VIDEO NAME</th>
<th style="width:100px;background-color:#ffccdd;text-align:center;">VIDEO NAME</th>
<th style="width:100px;background-color:#ffccdd;text-align:center;">VIDEO NAME</th>
<th style="width:100px;background-color:#ffccdd;text-align:center;">VIDEO NAME</th>
<th style="width:100px;background-color:#ffccdd;text-align:center;">VIDEO NAME</th>
<th style="width:100px;background-color:#ffccdd;text-align:center;">VIDEO NAME</th></tr>
<tr style="font-family:Calibri;"><td style="font-size:12px;width:100px;text-align:center;">How Bubblegum Is Made</td>
<td style="font-size:12px;width:100px;text-align:center;">How Candy Cane Is Made</td>
<td style="font-size:12px;width:100px;text-align:center;">How Jawbreaker Is Made</td>
<td style="font-size:12px;width:100px;text-align:center;">How Licorice Is Made</td>
<td style="font-size:12px;width:100px;text-align:center;">How Lollipop Is Made</td>
<td style="font-size:12px;width:100px;text-align:center;">How Rock Candy Is Made</td>
<td style="font-size:12px;width:100px;text-align:center;">How Skittles Is Made</td>
<td style="font-size:12px;width:100px;text-align:center;">How Candy Wafer Is Made</td>
<td style="font-size:12px;width:100px;text-align:center;">How Japanese Candy Is Made</td></tr>
<tr style="font-family:Courier New;"><td style="font-size:12px;width:100px;background-color:#ffccdd;text-align:center;">SOURCE</td>
<td style="font-size:12px;width:100px;background-color:#ffccdd;text-align:center;">SOURCE</td>
<td style="font-size:12px;width:100px;background-color:#ffccdd;text-align:center;">SOURCE</td>
<td style="font-size:12px;width:100px;background-color:#ffccdd;text-align:center;">SOURCE</td>
<td style="font-size:12px;width:100px;background-color:#ffccdd;text-align:center;">SOURCE</td>
<td style="font-size:12px;width:100px;background-color:#ffccdd;text-align:center;">SOURCE</td>
<td style="font-size:12px;width:100px;background-color:#ffccdd;text-align:center;">SOURCE</td>
<td style="font-size:12px;width:100px;background-color:#ffccdd;text-align:center;">SOURCE</td>
<td style="font-size:12px;width:100px;background-color:#ffccdd;text-align:center;">SOURCE</td></tr>
<tr style="font-family:Calibri;"><td style="font-size:12px;width:100px;text-align:center;">Design Insider</td>
<td style="font-size:12px;width:100px;text-align:center;">The Insider</td>
<td style="font-size:12px;width:100px;text-align:center;">Discovery UK</td>
<td style="font-size:12px;width:100px;text-align:center;">The Insider</td>
<td style="font-size:12px;width:100px;text-align:center;">Food Insider</td>
<td style="font-size:12px;width:100px;text-align:center;">Food Insider</td>
<td style="font-size:12px;width:100px;text-align:center;">Food Insider</td>
<td style="font-size:12px;width:100px;text-align:center;">The Insider</td>
<td style="font-size:12px;width:100px;text-align:center;">The Insider</td></tr>
</table></div>
</div></center>
<img src="images/others/logo.png" id="logo">
</body>
</html>
