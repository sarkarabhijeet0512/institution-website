<?php include 'header.php';
$sql="SELECT * FROM user_defined_settings Where id=1";
 $data=mysqli_query($conn,$sql);
 $user_settings=mysqli_fetch_assoc($data); ?>
<body>						<div class="col-md-4">
							</div>
							<div class="col-md-4">
							<div class="enquiry-bx">
								<div class="head">
									<p>ACADEMIC HIGHLIGHTS</p>
								</div>
						
							<div class="dzFormMsg"></div>
								<form  action="academic_Data.php" method="post" class="">
									<!--input type="hidden" value="Contact" name="dzToDo" -->
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
												<div class="input-group">
													<input name="title" type="text" id="title" required class="form-control" placeholder="Tittle For Heading in Academic Section" value="<?php echo $user_settings['academic_title'] ?>">
												</div>
											</div>
										</div>
										
										<div class="col-lg-12">
											<div class="form-group">
												<div class="input-group">
													<textarea name="description" id="description" rows="4" class="form-control" required placeholder="Details of the Title to be written"><?php echo $user_settings['academic'] ?></textarea>
												</div>
											</div>
										</div>

										<div class="col-lg-12">
											<button name="submit" type="submit" id="submit" value="" class="btn">Submit </button>
										</div>
									</div>
								</form>
</div>
</div>
<?php include 'footer.php'; ?>
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>
