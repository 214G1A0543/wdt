<?php
Session_start();
if(issubset($_SESSION['visitor_count]))
{
$_SESSION['visitor_count']++;
}
else{
$_SESSION['visitor_count']=1;
}
<!DOCTYPE html>
<html lang="en">
<head>
<style>
.footer{
position:fixed;color:white;background:red;width:100%;bottom:0;text-align:center}
</style>
<meta charset='UTF-8'>
<meta name="viewport" content="width="device-width,initial-scale="1.0">
<title>page visitiors</title>
</head>
<body>
<h4 align="center">THIS IS MY FIRST PHP PROGRAM</h4>
<div class="footer">
<p align="center">&copy; Keerthireddy--All rights are reserved</p>
<p>This page is visited<?php echo "$_SESSION['visitor_coun'];?>times.</p>
</div>
</body>
</html>
