<?php include 'header.php';
include 'newsfetch.php';
 ?>
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
  <meta property="og:description" content="IAS institute: coaching classes" />
  <meta property="og:image" content="" />
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <!-- FAVICONS ICON -->
  <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
  
	<title>spscs-mains-series</title>
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/templete.css">
	<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
	<style type="text/css">
		.action-box1{
	background: #fff;
    border-radius: 4px;
    box-shadow: 5px 5px 40px 0px rgba(0,0,0,0.05);
    	
}
.action-box1 .head{
    background: #4582ff;
    color: #fff;
    padding: 15px 20px;
    border-radius: 4px 4px 0px 0;
}
.action-box1 .head .title{
    color: #fff;
    font-size: 22px;
    font-weight: 500;
    margin-bottom: 0;
}
	</style>
	</head>

<body>
	<h1 class="container" style="color:red;">SPSCs MAINS TEST SERIES</h1>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9">
				
<div class="owl-slider owl-carousel owl-theme owl-btn-center-lr dots-none">
      <div class="item slide-item">
        <div class="slide-item-img"><img src="images/main-slider/slide1.jpg" class="" alt=""/></div>
        <div class="slide-content">
          <div class="slide-content-box container">
            <div class="slide-content-area">
              <h2 class="slider-title">Start Investing in You</h2>
              <p>With over 1200 courses in 18 subjects, you're guaranteed to find something that's right for you.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="item slide-item">
        <div class="slide-item-img"><img src="images/main-slider/slide1.jpg" class="" alt=""/></div>
        <div class="slide-content">
          <div class="slide-content-box container">
            <div class="slide-content-area">
              <h2 class="slider-title">Ask, Learn & Lead It</h2>
              <p>With Better Score, Better Career & Ultimately by Building Better India with the Power of Knowledge</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    			
			</div>
			<div class="col-md-3"> 
				<!--enquiry grid starts-->
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
													<input type="number" name="contact" rows="4" class="form-control" required placeholder="Contact-No" onKeyPress="if(this.value.length==10) return false;"></input>
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
								</form><br>
								<br>
								<!--enquiry grid end-->
								<!--notification grid starts-->
								<div class="action-box1">
								<div class="head">
									<h4 class="title">Notification</h4>
								</div>
								<div class="action-area marquee1">
									<?php  
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                                      ?>							
									<ul>
										<li><a href="courses-details.php"><?php echo "Description: " . $row["description"];?> </a></li>
									</ul>
							<?php }
                    			} 
                    		else 	{
                        	echo "0 results";
                    				}
                					?>
								
								</div>
							</div>
							
			</div>
			
		</div>
		
	</div>
	

	<?php
	include 'testimonial.php';
	include 'footer.php' ;?>
	</body>
	<script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
<script src="js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS -->

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
        setInterval('location.reload()', 5000); 
        return false;
    }
</script>

