<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="keywords" content="IAS,Coaching,Councelling" />
  	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="IAS institute: coaching classes" />
	<meta property="og:title" content="IAS institute: coaching classes" />
	<meta property="og:description" content="IAS institute: coaching classes" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=9835139958">
  
  <!-- FAVICONS ICON ->
  <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  <!favicons end-->
  
 	<title>about us:Empress IAS</title>
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

    
 </head>

<body >
<?php 
require "conn.php";
$sql="SELECT * FROM testimonial";
$res=mysqli_query($conn,$sql);
$sql="SELECT * FROM user_defined_settings where id=1";
$resu=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($resu);
$sql1="SELECT * FROM program_services";
$rest=mysqli_query($conn,$sql1);
$img=mysqli_fetch_assoc($rest);
$resl=mysqli_query($conn,$sql1);
$second=mysqli_query($conn,$sql1);


  ?>
	<!-- header -->
	<?php include 'header.php'; ?>

    <!-- header END -->
		<!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-dark" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">About Us</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php"><i class="fa fa-home"></i></a></li>
							<li>Home</li>
							<li>About Us</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
    
    <!-- Content -->
    
    
        <!-- inner page banner END -->
         <section>
        <!--begin programs & services-->
        <div class="programs-services">
            <div class="container">
                <div class="row">
                    <div class="services-img col-md-6 col-sm-12 col-xs-12">
                        <img class="img-responsive" src="<?php echo $img["photo"];?>" alt="">
                    </div>
                    <div class="services-content col-md-6 col-sm-12 col-xs-12">
                        <h2 class="heading-regular">Programs &amp; Services</h2>
                        <div id="tab_services">
                            <!--Nav tabs-->
                            <!-- loop starts -->
                            
                            <ul class="nav nav-tabs" role="tablist">
                                <?php

                                 if (mysqli_num_rows($resl) > 0) 
                                 {
                                                                    

                                    while($row1 = mysqli_fetch_assoc($resl)) {
                                                                        ?>
                                <li role="presentation" class="active">
                                    <a href ="#<?php echo htmlspecialchars_decode($row1["title"]);?>" class="menu-btn"><?php echo htmlspecialchars_decode($row1["title"]);?></a>
                                </li>
                                <!-- <li role="presentation" class="active">
                                    <a class="" href="#professional" aria-controls="professional" role="tab" data-toggle="tab">Professional</a>
                                </li>
                                <li role="presentation" class="active" >
                                    <a class="" href="#intelectual" aria-controls="intelectual" role="tab" data-toggle="tab">Intelectual</a>
                                </li> -->
                                <?php }
                                } 
                            
                                    ?>
                            </ul>
                            <!--Tab panes-->
                            
                            <div class="tab-content">
                                <!-- second loop start -->
                                <?php

                                     if (mysqli_num_rows($second) > 0) 
                                     {
                                                                        
                                   while($row2 = mysqli_fetch_assoc($second)) {
                                        ?>
                                
                                <!-- <div role="tabpanel" class="tab-pane active animated zoomIn" id="<?php echo htmlspecialchars_decode($row2["title"]);?>"> -->
                                   
                                        <div class="menu-content  <?php echo htmlspecialchars_decode($row2["title"]);?> ">
                                             
                                        <p class="">
                                            <?php echo htmlspecialchars_decode($row2["details"]);?>
                                        </p>
                                        <ul class="list-item">
                                            <li><?php echo htmlspecialchars_decode($row2["list1"]);?></li>
                                            <li><?php echo htmlspecialchars_decode($row2["list2"]);?></li>
                                            <li><?php echo htmlspecialchars_decode($row2["list3"]);?></li>
                                            <li><?php echo htmlspecialchars_decode($row2["list4"]);?></li>
                                        </ul>
                                        </div>     
                                        <?php }
                                        } 
                            
                                        ?>
                                    <!-- </div>
                                </div> -->
                                <!-- second loop end -->
                                <!-- <div role="tabpanel" class="tab-pane animated zoomIn" id="professional">
                                    <div class="tab-content-wrapper">
                                        <p class="">
                                            Crack our scholarship test & grab your seat with India's top most affordable yet best known IAS coaching  Institution.After enrolling with EMPRESS IAS you will have accesses to our:</p>
                                        <ul class="list-item">
                                            <li>Weekly Current affairs classes(every Saturday)Worth  15000 for free.</li>
                                            <li>Weekly spoken English-personality classes taken by foreign faculties (Every Sunday) worth 12000 for free.</li>
                                            <li>Officer's party,Booklets,lectures videos,notes & many  more.</li>
                                            <li>Vulputate velit esse molestie consequat.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane animated zoomIn" id="intelectual">
                                    <div class="tab-content-wrapper">
                                        <p class="">
                                            Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.
                                        </p>
                                        <ul class="list-item">
                                            <li>Delenit augue duis dolore vulputate velit esse molestie consequat</li>
                                            <li>Vulputate velit esse molestie consequat.</li>
                                            <li>Luptatum zzril delenit augue duis dolore.</li>
                                            <li>Feugiat nulla facilisis at vero eros et accumsan et iusto.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                            
                            <!-- loopends -->
                            
                        </div>
                        
                                
                    </div>
                </div>
            </div>
        </div>
        <!--end programs & services-->
</section>
<!-- ==============================================
    ** Our Importance **
    =================================================== -->
    <section class="our-impotance padding-lg">
        <div class="container">
            <ul class="row">
                <li class="col-sm-4 equal-hight">
                    <div class="inner"> <img src="<?php echo $row["fet_study_icon"]; ?>" alt="Malleable Study Time">
                        <h3><?php echo htmlspecialchars_decode($row['title1']);  ?></h3>
                        <p><?php echo htmlspecialchars_decode($row['study']);  ?></p>
                    </div>
                </li>
                <li class="col-sm-4 equal-hight">
                    <div class="inner"> <img src="<?php echo $row["fet_place_icon"]; ?>" alt="Placement Assistance">
                        <h3><?php echo htmlspecialchars_decode($row['title2']);  ?></h3>
                        <p><?php echo htmlspecialchars_decode($row['place']);  ?></p>
                    </div>
                </li>
                <li class="col-sm-4 equal-hight">
                    <div class="inner"> <img src="<?php echo $row["fet_easy_icon"]; ?>" alt="Easy To Access">
                        <h3><?php echo htmlspecialchars_decode($row['title3']);  ?></h3>
                        <p><?php echo htmlspecialchars_decode($row['easy']);  ?></p>
                    </div>
                </li>
                <li class="col-sm-4 equal-hight">
                    <div class="inner"> <img src="<?php echo $row["fet_on_icon"]; ?>" alt="Study on the Go">
                        <h3><?php echo htmlspecialchars_decode($row['title4']);  ?></h3>
                        <p><?php echo htmlspecialchars_decode($row['on_the_go']);  ?></p>
                    </div>
                </li>
                <li class="col-sm-4 equal-hight">
                    <div class="inner"> <img src="<?php echo $row["fet_innova_icon"]; ?>" alt="Get an Innovative, In-depth Transition">
                        <h3><?php echo htmlspecialchars_decode($row['title5']);  ?></h3>
                        <p><?php echo htmlspecialchars_decode($row['innova']);  ?></p>
                    </div>
                </li>
                <li class="col-sm-4 equal-hight">
                    <div class="inner"> <img src="<?php echo $row["fet_practic_icon"]; ?>" alt="Practical & Interactive Participation">
                        <h3><?php echo htmlspecialchars_decode($row['title6']);  ?></h3>
                        <p><?php echo htmlspecialchars_decode($row['practic']);  ?></p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

		
			<div class="section-full bg-white content-inner-2 about-content bg-img-fix" style="background-image:url(images/background/bg5.jpg);">
				<div class="about-overlay-box"></div>
                <div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12 col-12 wow fadeIn" data-wow-delay="0.2s"  data-wow-duration="2s">
							<div class="section-head m-b0">
								<h2 class="title text-yellow">Education from birth<br>begins with us</h2>
								<p class="ext text-white m-b0">Our children's academy, together with one of the oldest private schools, created a joint school preparation project. The goal of the project is the harmonious development, socializationfor admission to the best educational institutions of our city.</p>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-12"></div>
					</div>
				</div>
            </div>
				<div class="section-full content-inner bg-white" style="background-image:url(images/background/bg1.jpg)">
                <div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12 col-12 student-bx">
							<div class="section-head">
								<h2 class="title">Student Testimonial</h2>
								<div class="dlab-separator bg-primary"></div>
							</div>
							<div class="client-box2">
								<div class="client-carousel-2 owl-carousel owl-theme">
									<!-- loop start -->
                                    <?php
                        if (mysqli_num_rows($res) > 0) 
                         {
                         while($row1 = mysqli_fetch_assoc($res)) {
                                            ?>     
                                            <!-- html area -->
                                    <div class="item">
                                        <div class="client-box style-2">
                                            <div class="testimonial-pic">
                                                <img src="<?php echo $row1["photo"];?>" alt=""/>
                                            </div>
                                            <div class="testimonial-text">
                                                <p><?php echo htmlspecialchars_decode($row1["review"]);?></p>
                                                <div class="testimonial-detail clearfix">
                                                    <h5 class="testimonial-name m-t0 m-b5"><?php echo htmlspecialchars_decode($row1["name"]);?></h5> 
                                                    <!-- <span>KVS - PRT 2016</span> --> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- html area ends -->
                                     <?php }
                                    } 
                            
                                    ?>
                                    <!-- loop end -->
                                    
									
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="section-head">
								<h2 class="title">Meet our Teachers</h2>
								<div class="dlab-separator bg-primary"></div>
							</div>
							<div class="row sp20">
								<div class="col-lg-4 col-md-4 col-sm-6">
									<div class="team-box">
										<div class="media">
											<img src="images/team/pic8.jpg" alt="">
											<div class="media-info">
												<h4 class="title"><a href="teachers-details.html">Amy</a></h4>
												<span>MBA</span>
											</div>
										</div>
										<div class="team-info">
											<h4 class="title"><a href="teachers-details.html">Amy</a></h4>
											<span>Teacher</span>
											<p>We have an excellent teacher to child ratio at our Kindergarten to ensure that each child receives the attention he or she needs</p>
											<ul class="list-inline">
												<li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6">
									<div class="team-box">
										<div class="media">
											<img src="images/team/pic7.jpg" alt="">
											<div class="media-info">
												<h4 class="title"><a href="teachers-details.html">Alina</a></h4>
												<span>M.Com</span>
											</div>
										</div>
										<div class="team-info">
											<h4 class="title"><a href="teachers-details.html">Alina</a></h4>
											<span>M.Com</span>
											<p>We have an excellent teacher to child ratio at our Kindergarten to ensure that each child receives the attention he or she needs</p>
											<ul class="list-inline">
												<li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6">
									<div class="team-box">
										<div class="media">
											<img src="images/team/pic9.jpg" alt="">
											<div class="media-info">
												<h4 class="title"><a href="teachers-details.html">William</a></h4>
												<span>BBA BCA</span>
											</div>
										</div>
										<div class="team-info">
											<h4 class="title"><a href="teachers-details.html">William</a></h4>
											<span>BBA BCA</span>
											<p>We have an excellent teacher to child ratio at our Kindergarten to ensure that each child receives the attention he or she needs</p>
											<ul class="list-inline">
												<li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
    <!-- Content END-->
	<!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- Footer END-->
    <button class="scroltop fa fa-chevron-up" ></button>
<!-- JAVASCRIPT FILES ========================================= -->
</body>
		<script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
    <script async src="plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
    <script defer src="js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS -->
    <script defer src="plugins/owl-carousel/owl.carousel.js"></script>
    <script src="js/custom-new.js"></script>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<script type="text/javascript">
    var $content = $('.menu-content');

function showContent(type) {
  $content.hide().filter('.' + type).show();
}

$('.nav').on('click', '.menu-btn', function(e) {
  showContent(e.currentTarget.hash.slice(1));
  e.preventDefault();
}); 

// show 'about' content only on page load (if you want)
showContent('Social');
</script>
</html>
