<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="Abhijeet Sarkar" />
	<meta name="robots" content="" />
	<meta name="description" content="Smart Class: coaching classes" />
	<meta property="og:title" content="Smart Class: coaching classes" />
	<meta property="og:description" content="Smart Class: coaching classes" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>Coming soon</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/templete.css">
	<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
</head>
<body id="bg">
<div class="page-wraper"><!-- Content -->
	<div class="content-block">
		<div class="coming-soon" style="background-image:url(images/background/bg10.jpg); background-position: center;background-size: cover; ">
			<div class="countdown-box">
				<div class="button-home">
					<a href="index.php" class="btn btn-lg radius-xl"><i class="fa fa-home"></i>info@empressias.com</a>
				</div>
				<div class="countdown">
					<div class="date">
						<span class="time days text-primary" id="day"></span>
						<div><strong>Days</strong></div>
					</div>
					<div class="date">
						<span class="time hours text-primary" id="hour"></span>
						<div><strong>Hours</strong></div>
					</div>
					<div class="date">
						<span class="time mins text-primary" id="minute"></span>
						<div><strong>Minutess</strong></div>
					</div>
					<div class="date">
						<span class="time secs text-primary" id="second"></span>
						<div><strong>Second</strong></div>
					</div>
				</div>
				<!-- to be changed here -->
				<div id="demo"></div>
			</div>
			<div class="coming-head">
				<h2><span>Coming soon</span><strong>days</strong></h2>
				<div class="subscribe-form p-a0 max-w400">
					<form>
						<div class="input-group">
							<input name="text" class="form-control radius-no bg-black" placeholder="Search For Pages" type="text">
							<span class="input-group-btn">
								<button type="submit" class="btn radius-xl"><i class="fa fa-search"></i></button>
							</span> 
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
    <!-- Content END-->
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
  
<script> 
  
var deadline = new Date("dec 31, 2020 15:37:25").getTime(); 
  
var x = setInterval(function() { 
  
var now = new Date().getTime(); 
var t = deadline - now; 
var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
var seconds = Math.floor((t % (1000 * 60)) / 1000); 
document.getElementById("day").innerHTML =days ; 
document.getElementById("hour").innerHTML =hours; 
document.getElementById("minute").innerHTML = minutes;  
document.getElementById("second").innerHTML =seconds;  
if (t < 0) { 
        clearInterval(x); 
        document.getElementById("demo").innerHTML = "TIME UP"; 
        document.getElementById("day").innerHTML ='0'; 
        document.getElementById("hour").innerHTML ='0'; 
        document.getElementById("minute").innerHTML ='0' ;  
        document.getElementById("second").innerHTML = '0'; } 
}, 1000); 
</script>
</body>
 
 