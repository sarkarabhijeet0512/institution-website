
<body>
	<?php include "header.php";
	$sql="SELECT * FROM login WHERE id=1";
	$admin=mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($admin);

	 ?>
	 <div class="container">
	 
<form action="edit_user.php" style="padding: 5rem;
    box-shadow: inset 0 0 2px 0px black;">
	<label>NAME</label>
	<span><?php echo $row['name']; ?></span><br>
	<label>EMAIL</label>
	<span><?php echo $row['email']  ?></span> <br>
	<label>PASSWORD</label>
	<span><?php echo $row['password'];  ?></span><br>
	<label>USER TYPE</label>
	<span>aminstrator</span><br>
	<button><i class="fa fa-edit"></i></button>
</form>
<!-- <i class="fa fa-edit"></i> -->
<i class="fa fa-trash"></i>

</div>
<?php include "footer.php"; ?>
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
</body>
</html>