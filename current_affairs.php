
<!DOCTYPE html>
<html>
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
  
 	<title>CURRENT AFFAIRS</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	
 	<link  rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<link rel="stylesheet" type="text/css" href="css/templete.css">
  	<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- <link href="plugins/iconmoon/css/iconmoon.css" rel="stylesheet"> -->
    <!-- <link href="plugins/animate/animate-slider.css" rel="stylesheet"> -->
	
	<!--js-->

    <script src="js/jquery.min.js"></script>
     <!-- <script src="plugins/bxslider/js/bxslider.min.js"></script>
    <script async src="plugins/counter/counterup.min.js"></script>
    <script async src="plugins/counter/waypoints.min.js"></script> -->
    <script async src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script defer src="js/dz.carousel.js"></script>
    <script defer src="plugins/owl-carousel/owl.carousel.js"></script> -->
    <script src="js/custom-new.js"></script>
    <style>
    	
.inner-box{
    		overflow-y: scroll;
    height: 30rem;
    	}
.blog-artical li a .date span {
    font-size: 35px;
    font-weight: 700 !important;
    color: #f7ca18 !important;
    line-height: 35px;
    font-family: montserrat !important;
}
.blog-artical li a .title {
    font-family: montserrat;
    font-weight: 600;
    line-height: 30px;
    color: #444;
    font-size: 18px;
    /* margin-bottom: 0; */
    color: #2d2d2d;
    line-height: 1.4;
    /* margin-bottom: 10px; */
    margin-top: -5px;
}
.action-box {
    background: #9999991c;
    border-radius: 4px;
    box-shadow: 3px 1px 9px 3px rgba(0, 0, 0, 0.42);
    height: 35rem;
    margin-bottom: 30px;
    
}
.titl{
	padding: 14px 20px 15px;
    background-color: #1a265c;
    color: papayawhip;
        border-radius: 4px;
}
.action-box .action-area {
    padding: 10px 15px;
}
    </style>


</head>
<body>
<?php include "header.php";?>

<br>
<br>
<br>
<br>
<?php include"conn.php";
$cur_sql="SELECT * FROM affairs group by MONTH(created_at) desc";

 ?>
<div class="container">
	<div>
	<div class="row">
		
			<?php 	
					$cur_result=mysqli_query($conn,$cur_sql);
					 if (mysqli_num_rows($cur_result)>0) {
						while($cur_row=mysqli_fetch_assoc($cur_result)){
							$month_num=$cur_row['month'];
							$month_name = date("F", mktime(0, 0, 0, $month_num, 10));

							?>
							
		 	<div class="col-md-6">
			<!-- <div class="affair-box">
				
				<div class="inner-box"> -->
					<div class="action-box">
								
									<h4 class="titl"><?php echo $month_name; ?></h4>
									<div class="inner-box justify">
				
					<?php 
						$month_sql="SELECT * FROM affairs where month='".$cur_row['month']."' order by created_at desc";
						$mth_rslt=mysqli_query($conn,$month_sql);
					 	if (mysqli_num_rows($mth_rslt)>0) {
						while($mth_row=mysqli_fetch_assoc($mth_rslt)){ 
							$var= $mth_row['created_at'];
							$date = str_replace('/', '-', $var);
							$formated_month=date('M', strtotime($date));
							$formated_date=date('d', strtotime($date));
							$formated_year=date('Y', strtotime($date));
							?>
							
						
						<!-- new design -->
						<div class="action-area">
									<ul class="blog-artical">
										<li>
											<a href="cur_details.php?id=<?= $mth_row['id']; ?>">
												<div class="date">
													<span><?php echo $formated_date; ?></span>
													<strong><?php echo $formated_month;  ?></strong>
													<strong><?php echo $formated_year; ?></strong>
												</div>
												<h5 class="title"><?php echo $mth_row['title']; ?></h5>
											</a>
										</li>
										
									</ul>
								</div>
						
							
						<?php }
					}

mysqli_free_result($mth_rslt);
				?>

			<!-- </ol>
		</div> -->
		</div>
	</div>
		</div>
		

		<?php	} 
					} ?>
</div> 
</div>
</div>

<?php include "footer.php" ?>
</body>
</html>