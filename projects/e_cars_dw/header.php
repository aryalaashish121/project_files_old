<!DOCTYPE html>
<html>
		<head>
			<title>Eco-Friendly-car</title>
			<link rel="stylesheet" href="style.css" type="text/css">
		
<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
</head>

<body onload="startTime()">
  




    <header>
	<nav>
		<div class="main">
			<ul>
			<li><a href="index.php">Eco-Friendly-car.com </a></li>
			</ul>
			
			<div class="nav-login">
			
                            <a href="index.php"">Log out</a>
			<img src="images/user.png" style="height:35px; width:35px; padding-top:8px;" >
			</div>
	</nav>
		</div>
</header>