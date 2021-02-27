<?php include 'header.php'; ?>    
<!-- header END -->
    <!-- Content -->
    <div class="page-content">
		<!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-dark" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Contact Us</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.html"><i class="fa fa-home"></i></a></li>
							<li>Home</li>
							<li>Contact Us</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
		<!-- inner page banner END -->
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
									<p>Phone 01:(+032) 3456 7890 <br/> Phone 02: (+032) 3427 7670</p>
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
									<p>Spring Store London Oxford Street, 012 United Kingdom</p>
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
									<p>info@example.com <br/> info@example.com</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row content-inner-4">
						<div class="banner-map col-md-12">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.482829625307!2d85.81353511443459!3d20.3629729155495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a190925736a2851%3A0x84359eb5cf5bdc1b!2sSPARTA!5e0!3m2!1sen!2sin!4v1584209624536!5m2!1sen!2sin"   height="400" frameborder="0" style="border:0; width: 100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>
					</div>
					<div class="row contact-box content-inner-5">
						<div class="section-head text-center col-md-12">
							<h2 class="title text-secondry">Contact Me</h2>
							<p class="ext m-b0">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8</p>
						</div>
						<div class="dzFormMsg"></div>
						<form method="post" class="dzForm col-md-12" action="https://smartclass.dexignzone.com/xhtml/script/contact.php">
							<input type="hidden" value="Contact" name="dzToDo">
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<div class="form-group">
										<input name="dzName" type="text" required class="form-control" placeholder="Enter your name">
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="form-group">
										<input name="dzEmail" type="email" class="form-control" required  placeholder="Your Email Address" >
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="form-group">
										<input name="dzOther[Phone]" type="text" required class="form-control" placeholder="Phone">
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<textarea name="dzMessage" rows="4" class="form-control" required placeholder="Your message here"></textarea>
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="form-group recaptcha-box">
										<div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
										<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
									</div>
								</div>
								<div class="col-md-12 col-sm-12 text-center">
									<button name="submit" type="submit" value="Submit" class="btn radius-xl btn-lg">Send Message<span></span></button>
								</div>
							</div>
						</form>
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
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="plugins/wow/wow.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
<script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script src="plugins/lightgallery/js/lightgallery-all.min.js"></script><!-- LIGHTGALLERY JS -->
<script src="plugins/magnific-popup/magnific-popup.js"></script><!-- LIGHTGALLERY JS -->
<script src="plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
<script src="plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
<script src="plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
<script src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyBjirg3UoMD5oUiFuZt3P9sErZD-2Rxc68&amp;sensor=false"  ></script><!-- GOOGLE MAP -->
<script src='../../www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha  -->
<script src="js/dz.ajax.js"></script><!-- CONTACT JS  -->
<script src="js/map.script.js"></script><!-- CONTACT JS  -->
<script src="plugins/loading/anime.js"></script><!-- LOADING JS -->
<script src="plugins/loading/anime-app.js"></script><!-- LOADING JS -->
</body>

<!-- Mirrored from smartclass.dexignzone.com/xhtml/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Mar 2020 06:23:48 GMT -->
</html>
