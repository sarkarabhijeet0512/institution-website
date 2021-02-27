<?php 
$sql="SELECT * FROM testimonial";
$res=mysqli_query($conn,$sql);
  ?>

<head>
	<meta charset="utf-8">
</head>
<div class="section-full bg-white content-inner-2">
                <div class="container">
					<div class="section-head text-center">
						<h2 class="title text-secondry">Testimonials about center</h2>
						<p class="ext">We have an excellent teacher to student ratio at our Center to ensure that each student receives the attention he or she needs</p>
					</div>
					<div class="client-box2">
						<div class="client-carousel-3 owl-carousel owl-theme sprite-nav">
							<!-- lopp here -->
							<?php
						if (mysqli_num_rows($res) > 0) 
    					 {
                         while($row = mysqli_fetch_assoc($res)) {
                                            ?>                          
                              <!-- html area -->


							<div class="item">
								<div class="client-box style-2">
									<div class="testimonial-pic">
										<img src="<?php echo $row["photo"];?>" alt="">
									</div>
									<div class="testimonial-text">
										<p><?php echo htmlspecialchars_decode($row["review"]);?></p>
										<div class="testimonial-detail clearfix">
											<h5 class="testimonial-name m-t0 m-b5">—  <?php echo $row["name"];?></h5> 
											<span></span> 
										</div>
									</div>
								</div>
							</div>
 
               <!-- html area end -->
                <?php }
                                } 
                            
                             ?>
																
						</div>
					</div>
				</div>
            </div>
	