<?php
require 'conn.php';
include 'newsfetch.php';
$image_sql="SELECT * FROM slider";
 $admin_result = mysqli_query($conn, $image_sql);
 $sql="SELECT * FROM user_defined_settings Where id=1";
 $data=mysqli_query($conn,$sql);
 $user_settings=mysqli_fetch_assoc($data); 
 ?>
 <!DOCTYPE html>
 <html lang="en">
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
  
 	<title>Homepage:Empress IAS</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	
 	<link  rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<link rel="stylesheet" type="text/css" href="css/templete.css">
  	<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
  	<//link rel="stylesheet" href="http://www.jacklmoore.com/colorbox/example1/colorbox.css" />
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
    <link href="plugins/iconmoon/css/iconmoon.css" rel="stylesheet">
    <link href="plugins/animate/animate-slider.css" rel="stylesheet">
<!--js-->

    <script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
    <script src="plugins/bxslider/js/bxslider.min.js"></script><!--addition of new file for slider-->
    <script async src="plugins/counter/counterup.min.js"></script><!--slider work-->
    <script async src="plugins/counter/waypoints.min.js"></script><!--slider work-->
    <script async src="plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
    <script defer src="js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS -->
    <script defer src="plugins/owl-carousel/owl.carousel.js"></script>
    <script src="js/custom-new.js"></script>
 
 <style type="text/css">
    .item{
        background-image:url(images/background/b2.webp);
        background-size: cover;
        height: 100%;
        overflow: hidden;
        color: #FFFFFF;
    }
     .item2{
         background: rgba(39,62,84,0.82);
    
        overflow: hidden;
        height: 100%;
        z-index: 2;
     }
 </style>   
 </head>

<body>
<!--div class="page-wraper">
<div id="loading-area">
	<h1 class="ml4">
		<span class="letters letters-1">Loading..</span>
		<!span class="letters letters-2">Set</span>
		<span class="letters letters-3">Go</span>
	</h1>
</div-->
<?php 
include 'header.php';
?>
    <!-- header END -->
	<!-- Content -->
    <div class="page-content bg-white">
        <!-- Slider Banner -->
       
        	<!--new slider-->
                        
        	<div class="banner-outer">
        <div class="banner-slider">
            <?php
            
     if (mysqli_num_rows($admin_result) > 0) 
     {
                                        

        while($image_row=mysqli_fetch_assoc($admin_result)) {
                                            ?> 

            <div class="slider" style="background: url(<?php echo $image_row["location"];?>) no-repeat center top / cover;">
                <div class="container">
                    <div class="content">
                        <div class="<?php echo $image_row["text_alignment"] ?>">
                            <h1 class="animated <?php echo $image_row["animation_style"];?>"><?php echo $image_row["heading"];?><span class="animated <?php echo $image_row["animation_style"];?>"><?php echo $image_row["description"];?></span> </h1>
                            <p class="animated <?php echo $image_row["animation_style"];?>"><?php echo $image_row["details"];?></p>
                            <!-- <a href="about-1.php" class="btn animated <?php echo $image_row["animation_style"];?>">Know More <span class="icon-more-icon"></span></a> -->
                        </div>
                    </div>
                </div>
            </div>
             <?php }
                                } 
                            
                                    ?>
            
        </div>
    </div>
   
		<!--marquee area-->
    <div class="d-xl-inline d-lg-inline d-md-inline d-sm-none d-none">
    <div class="floating-tab">
    	<h1 style="float: left;">Notifications</h1>
		<marquee style="inline-size: max-content;padding-block-start: 11px;margin-block-end: -10px;"behavior="loop" scrollamount="15" onmouseover="this.stop();" onmouseout="this.start();" direction="left">
									<?php  
				                    if (mysqli_num_rows($result) > 0) {
				                        while($row = mysqli_fetch_assoc($result)) {
				                            ?>							
										<ul class="notific">
										<li class="d-xl-inline-block d-lg-inline-block d-sm-none d-none">
                                    <a  style="color:black;    margin-right: 83px;"; class="" href="">
                                        <img src="logo/Caution-06-june.gif" style="height:30px; 
 											width:37px;"></span>
                                        <span class="text"><?php echo "Description: " . $row["description"];?> </span>
                                    </a>
                                </li>
                                </ul>
							<?php }
                    			} 
                    		else 	{
                        	echo "0 results";
                    				}
                					?>
				</marquee>	
			</div>
    		</div>
    	</div>
    <!--content text-->
					<section class="d-xl-inline d-lg-inline d-md-inline d-sm-none d-none">
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-5">
									<div class="img1">
									<img src="<?php  echo $user_settings['caption_img']; ?>">	
									</div>
								</div>
								<div class="col-md-7"> 
										
									<div class="box-container">
		              	   		    <img style="height: 60px;width: 60px;padding-block-start: 8px;" src="logo/unnamed.png">
									<div class="style-head"> <?php echo htmlspecialchars_decode($user_settings['caption_title']); ?></div>
									<div class="my-style"><span style="font-size: 40px;position: relative;float: left;top:-15px;right:-10px;">&#10077;</span><?php echo htmlspecialchars_decode($user_settings['caption']);?><span style="position: relative;float: right;top: -40px;font-size: 35px;">&#10078;</span></div>
									</div>
									
										</div>
									</div>
									</div>
									

								</section>

	<!--mobile view--quotes-->
					<div class="d-xl-none d-lg-none d-md-none d-sm-inline d-inline" >
						<div class="text-center">
                		<img style="height:50px;width:50px;" src="logo/unnamed.png">
							<div class="my-style-head"><?php echo htmlspecialchars_decode($user_settings['caption_title']); ?></div>
							<div class="my-style-mobile">
							<span style="font-size: 35px;position: relative;float: left;top: -10px;right: -10px;">&#10077;</span>  <?php echo htmlspecialchars_decode($user_settings['caption']); ?> <span style="position: relative;float: right;top: -39px;font-size: 25px;left: -15px;">&#10078;</span></div>
						</div>	
					</div>     
				<!-- ==============================================
    ** Our Cources **
    =================================================== -->
    <section class="our-cources padding-lg">
        <div class="container">
            <h2> <span>Unique Features of our programs</span> What do you want to study?</h2>
            <ul class="course-list owl-carousel">
                <li>
                    <div class="inner">
                        <figure><img src="office/edumart/images/course-img1.jpg" alt=""></figure>
                        <h3>Online <span>MBA General</span></h3>
                        <p>A comprehensive study of modern business...</p>
                        <div class="bottom-txt clearfix">
                            <div class="duration">
                                <h4>2 Year</h4>
                                <span> Courses</span>
                            </div>
                            <a href="#"><span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inner">
                        <figure><img src="office/edumart/images/course-img2.jpg" alt=""></figure>
                        <h3>Online MBA <span>Operations</span></h3>
                        <p>A comprehensive study of modern business...</p>
                        <div class="bottom-txt clearfix">
                            <div class="duration">
                                <h4>1 Year</h4>
                                <span> Courses</span>
                            </div>
                            <a href="#"><span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inner">
                        <figure><img src="office/edumart/images/course-img3.jpg" alt=""></figure>
                        <h3>Online MBA <span>Marketing</span></h3>
                        <p>A comprehensive study of modern business...</p>
                        <div class="bottom-txt clearfix">
                            <div class="duration">
                                <h4>3 Year</h4>
                                <span> Courses</span>
                            </div>
                            <a href="#"><span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inner">
                        <figure><img src="office/edumart/images/course-img4.jpg" alt=""></figure>
                        <h3>Online MBA <span>Human</span><span>Resource</span></h3>
                        <p>A comprehensive study of modern business...</p>
                        <div class="bottom-txt clearfix">
                            <div class="duration">
                                <h4>2 Year</h4>
                                <span> Courses</span>
                            </div>
                            <a href="#"><span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
           					
			 <!-- ==============================================
    ** What Makes Different **
    =================================================== -->
    <section class="wt-makes-different">
        <div class="bg-image" style="background-image:url(images/background/make-different-img.jpg)"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 left">
                    <div class="q-mark">?</div>
                    <h2>Whats Makes Us Different ?</h2>
                    <a href="#" class="read-more">
                        <span class="icon-more-icon"></span>Read More
                    </a>
                </div>
                <div class="col-sm-7">
                    <div class="right">
                        <ul class="row makes-different-list">
                            <li class="col-xs-6 col-sm-6">
                                <div class="inner">
                                    <img src="<?php echo $user_settings['loc_int_icon'];  ?>" alt="">
                                    <h3>INTEGRATED COACHING</h3>
                                    <p><?php echo htmlspecialchars_decode($user_settings["intergrated"]);?> </p>
                                </div>
                            </li>
                            <li class="col-xs-6 col-sm-6">
                                <div class="inner">
                                    <img src="<?php echo $user_settings['loc_test_icon'];  ?>" alt="">
                                    <h3>TEST SERIES</h3>
                                    <p><?php echo htmlspecialchars_decode($user_settings["test"]);?></p>
                                </div>
                            </li>
                            <li class="col-xs-6 col-sm-6">
                                <div class="inner">
                                    <img src="<?php echo $user_settings['loc_moc_icon'];  ?>" alt="">
                                    <h3>MOCK INTERVIEWS</h3>
                                    <p><?php echo htmlspecialchars_decode($user_settings["mock"]);?></p>
                                </div>
                            </li>
                            <li class="col-xs-6 col-sm-6">
                                <div class="inner">
                                    <img src="<?php echo $user_settings['loc_postal_icon'];  ?>" alt="">
                                    <h3>POSTAL COURSE</h3>
                                    <p><?php echo htmlspecialchars_decode($user_settings["postal"]);?></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--fix banner image-->
  	<div class="section-full bg-white content-inner-2 about-content bg-img-fix item">
        
				<div class="about-overlay-box"></div>
                <div class="item2">
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
        </div>

						
						<!--mobile view academic highligts-->
						<section>
						<div class="d-xl-none d-lg-none d-md-none d-sm-inline d-inline">
						
							<div style="background-color:#f1fad74a;box-shadow: inset 0px 0px 5px -4px black;">
							<div class="text-center">
								<p class="font_2-mobile">Academy Highlights</p>
							</div>
							<div style="text-align:center;margin: 20px">
								<span class="text-style-mobile"><span style="font-size: 35px">&#10077;</span> <?php echo htmlspecialchars_decode($user_settings["academic"]);?> <span style="font-size: 35px;vertical-align: bottom;">&#10078;</span></span>
									<p><br></p>
							</div>
						
						</div>
					</div>
				</section>

			<?php include 'scroll.php' ;?>

			<div class="section-full bg-white content-inner-2 enquiry-area" style="background-image:url(images/background/bg2.jpg);">
                <div class="container">
					<div class="row">
						<div class="col-md-6">
							
						</div>
						<div class="col-md-6">
							<div class="enquiry-bx">
								<div class="head">
									<h2 class="title">Quicky Enquiry</h2>
									<p>Please fill the below form.</p>
								</div>
								
								
								<div class="dzFormMsg"></div>
								<form  action="enquiry.php" method="post" id="frmBox" onsubmit="return formSubmit();">
									<input type="hidden" name="" value="" id="success">
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
												<div class="input-group">
													<input name="name" type="text" required class="form-control" placeholder="Your Name">
												</div>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<div class="input-group"> 
													<input name="email" type="email" class="form-control" required  placeholder="Your Email Id" id="email" >
												</div>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<div class="input-group">
													<input type="number" name="contact" rows="4" class="form-control" required placeholder="Contact-No" onKeyPress="if(this.value.length==11) return false;"></input>
												</div>
											</div>
										</div>
										<!--div  class="col-lg-12">
											<div class="form-group">
											 
													<select style="height: calc(3rem + 5px);" class="form-control">
														<option>subject</option>
														<option>subject</option>
														<option>subject</option>
													</select>
											
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												 
													<select style="height: calc(3rem + 5px);" class="form-control">
														<option>Price</option>
														<option>price</option>
														<option>price</option>
													</select> 
												
											</div>
										</div-->
										
										
										<div class="col-lg-12">
											<div class="form-group">
												<div class="input-group">
													<textarea name="message" id="message" rows="4" class="form-control" required placeholder="Your Message..."></textarea>
												</div>
											</div>
										</div>

										<!--div class="col-lg-12">
											<div class="form-group recaptcha-box">
												<div class="input-group">
													<div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
													<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
												</div>
											</div>
										</div-->
										<div class="col-lg-12">
											<button name="submit" type="submit" id="submit" value="Submit" class="btn">Submit </button>
										</div>
									</div>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>	
			<div class="section-full bg-gray content-inner-2">
                <div class="container">
					<div class="client-logo-bx owl-carousel owl-btn-center-lr owl-btn-3">
						<div class="item">
							<div class="client-bx">
								<img src="images/logo/logo-1.jpg" alt=""/>
							</div>
						</div>
						<div class="item">
							<div class="client-bx">
								<img src="images/logo/logo-2.jpg" alt=""/>
							</div>
						</div>
						<div class="item">
							<div class="client-bx">
								<img src="images/logo/logo-3.jpg" alt=""/>
							</div>
						</div>
						<div class="item">
							<div class="client-bx">
								<img src="images/logo/logo-4.jpg" alt=""/>
							</div>
						</div>
						<div class="item">
							<div class="client-bx">
								<img src="images/logo/logo-5.jpg" alt=""/>
							</div>
						</div>
						<div class="item">
							<div class="client-bx">
								<img src="images/logo/logo-6.jpg" alt=""/>
							</div>
						</div>
						
					</div>

				</div>
            </div>
		</div>
    </div>
        <!-- maps start -->
        
    
      
  
    	<!-- maps END -->
<div class="content-block">
			<div class="section-full bg-gray">
                <div class="container">
					<div class="row align-items-center content-inner">
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="icon-bx-wraper m-b30 left">
								<div class="icon-md m-b20 m-t5">
									<a href="javascript:void(0)" class="icon-cell text-blue">
										<i class="ti-headphone-alt"></i>
									</a>
								</div>
								<div class="icon-content">
									<h4 class="dlab-tilte m-b5">Phone</h4>
									<p>Phone 01:+91 8847896784 <br/> Phone 02: +91 8847896784</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="icon-bx-wraper m-b30 left">
								<div class="icon-md m-b20 m-t5">
									<a href="javascript:void(0)" class="icon-cell text-green">
										<i class="ti-location-pin"></i>
									</a>
								</div>
								<div class="icon-content">
									<h4 class="dlab-tilte m-b5">Address</h4>
									<p>M-32,Sparta,KIIT University,Near OTV office,Bhubaneswar,Odisha.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="icon-bx-wraper m-b30 left">
								<div class="icon-md m-b20 m-t5">
									<a href="javascript:void(0)" class="icon-cell text-orange">
										<i class="ti-email"></i>
									</a>
								</div>
								<div class="icon-content">
									<h4 class="dlab-tilte m-b5">Email</h4>
									<p>hedeptia@gmail.com <br/> hedeptia@gmail.com</p>
								</div>
							</div>
						</div>
					</div>
					
			</div>
		</div>
		 <!--why choose us-->
								    <section class="why-choose padding-lg">
								        <div class="container">
								            <h2><span>The Numbers Say it All</span>Why Choose Us</h2>
								            <ul class="our-strength">
								                <li>
								                    <div class="icon"><span class="icon-certification-icon"> </span></div>
								                    <span class="counter">36</span>
								                    <div class="title">Certified Courses</div>
								                </li>
								                <li>
								                    <div class="icon"><span class="icon-student-icon"></span></div>
								                    <span class="counter">258,658</span>
								                    <div class="title">Students Enrolled </div>
								                </li>
								                <li>
								                    <div class="icon"><span class="icon-book-icon"></span></div>
								                    <div class="couter-outer"><span class="counter">95</span><span>%</span></div>
								                    <div class="title">Passing to Universities</div>
								                </li>
								                <li>
								                    <div class="icon"><span class="icon-parents-icon"></span></div>
								                    <div class="couter-outer"><span class="counter">100</span><span>%</span></div>
								                    <div class="title">Satisfied Parents</div>
								                </li>
								            </ul>
								        </div>
								    </section>

		 
		<!--h2 class="title text-secondry">REACH US AT.</h2-->
    <!--The div element for the map -->
    <div id="map" style="height: 400px;  width: auto;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.482829625307!2d85.81353511443459!3d20.3629729155495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a190925736a2851%3A0x84359eb5cf5bdc1b!2sSPARTA!5e0!3m2!1sen!2sin!4v1584209624536!5m2!1sen!2sin"   height="400" frameborder="0" style="border:0; width: 100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
		       
	<!-- Content END-->
	<!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- Footer END-->
    <button class="scroltop fa fa-chevron-up"></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->

    
<script type="text/javascript">
    /********************************
            ajax form fillup
    *********************************/
    function formSubmit(){
            $.ajax({
            type:'POST',
            url:'enquiry.php',
            data:$('#frmBox').serialize(),
            success:function(response){
                $('#success').html(response);
                $('.btn').css("background-color", "Green");
                $('.btn').val("Submitted");
            }

        });
        var form=document.getElementById('frmBox').reset();
        setInterval('location.reload()', 3000); 
        return false;
    }
</script>
   
</body>

</html>
