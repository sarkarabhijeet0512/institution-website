<!DOCTYPE html>
<html>
<head>
	<head>
 	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="keywords" content="IAS,Coaching,Councelling" />
  	<meta name="author" content="Abhijeet Sarkar" />
	<meta name="robots" content="" />
	<meta name="description" content="IAS institute: coaching classes" />
	<meta property="og:title" content="IAS institute: coaching classes" />
	<meta property="og:description" content="IAS institute:Empress IAS Best coaching classes In Bhubaneswar" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=9835139958">
  
  <!-- FAVICONS ICON ->
  <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  <!favicons end-->
  
 	
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	
 	<link  rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<link rel="stylesheet" type="text/css" href="css/templete.css">
  	<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
    <link href="plugins/iconmoon/css/iconmoon.css" rel="stylesheet">
    <link href="plugins/animate/animate-slider.css" rel="stylesheet">
<!--js-->

    <script src="js/jquery.min.js"></script>
    <!-- <script src="plugins/bxslider/js/bxslider.min.js"></script>
    <script async src="plugins/counter/counterup.min.js"></script>
    <script async src="plugins/counter/waypoints.min.js"></script>
    <script async src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script defer src="js/dz.carousel.js"></script>
    <script defer src="plugins/owl-carousel/owl.carousel.js"></script>-->
    <script src="js/custom-new.js"></script>
	<title>
		current Aafairs
	</title>
</head>
<body>
	<?php include "header.php";
	require "conn.php";
	$id=$_GET['id'];
	?>
	<br>
	<br>
	<br>
	<section>
		<div class="container">
			<!-- <img src="images/background/banner4.jpg"> -->
		<div class="form" style="margin-block-end: 40px;">
			<?php 
						$month_sql="SELECT * FROM affairs where id=$id";
						$mth_rslt=mysqli_query($conn,$month_sql);
					 	if (mysqli_num_rows($mth_rslt)>0) {
						while($mth_row=mysqli_fetch_assoc($mth_rslt)){ ;?>
							
						<div><?php echo htmlspecialchars_decode($mth_row['message']); ?></div>  
						
							
						<?php }
					}

mysqli_free_result($mth_rslt);
?>
		</div>
	</div>
	</section>


<?php include"footer.php"; ?>
</body>
</html>