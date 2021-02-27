
<body>
	<?php include "header.php";
	$sql="SELECT * FROM login WHERE id=1";
	$admin=mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($admin);

	 ?>
	 <div class="container">
	 
<form action="update_user.php" method="POST" style="padding: 5rem;
    box-shadow: inset 0 0 2px 0px black;" >
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
	<label>NAME</label>
	<input type="text" name="name" placeholder="NAME" class="form-control">
	<label>EMAIL</label>
	</span><input type="email" name="email" placeholder="EMAIL" class="form-control">
	<label>OLD-PASSWORD</label>
	<input type="password" name="password" placeholder="OLD PASSWORD" class="form-control" value="">
	<label>NEW-PASSWORD</label>
	<input type="password" name="newpassword" placeholder="NEW PASSWORD" class="form-control" value="" id="new"><label>CONFIRM-PASSWORD</label>
	<input type="password" name="confirmpassword" id="confirm" placeholder="CONFIRM PASSWORD" class="form-control" value="" onkeyup="return checkPassword()">
	<label>USER TYPE</label>
	<span>aminstrator</span><br>
	<button name="button" id="btn">Update</i></button>
</form>
<!-- <i class="fa fa-edit"></i> -->
<i class="fa fa-trash"></i>

</div>
<?php include "footer.php"; ?>
<script> 
          
            // Function to check Whether both passwords 
            // is same or not. 
            function checkPassword() { 
                password1 = document.getElementById("new").value; 
                password2 = document.getElementById("confirm").value; 
                btn= document.getElementById("btn");
   
                if (password1 == password2) { 
                    // alert ("\nPassword did not match: Please try again...")
                    btn.disabled = false;
                    // return false; 
                }  
                else{ 
                    btn.disabled = true; 
                     
                } 
            } 
        </script> 
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
</body>
</html>