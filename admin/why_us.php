<?php include "header.php";
include "why_us_upload.php";
$sql="SELECT * FROM user_defined_settings where id=1";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
 ?>
<head>
<style>
	.display{
		display: inline-flex;
	}
</style>
</head>
<body>
							<form method="POST" enctype="multipart/form-data">
							<div class="text-center" style="position: relative;" >
               				<span class="">
                            <div class=""  onClick="triggerClick()">
                              <h4>Update image</h4><br>
                            <img src="" onClick="triggerClick()" id="profileDisplay">

                            </div>

                          </span>
                          <div class="display">
                            <img src="../<?php echo $row["loc_int_icon"]; ?>">
                          <input type="file" name="icon1" onChange="displayImage(this)" id="profileImage">
                          <textarea name="icon1text" class="form-control" placeholder="Integrated Coaching"><?php echo htmlspecialchars_decode($row["intergrated"]); ?></textarea>

                        	</div>
                        	<div class="display">
                            <img src="../<?php echo $row["loc_test_icon"]; ?>">
                            <input type="file" name="icon2" onChange="displayImage(this)" id="profileImage">
                          <textarea name="icon2text" class="form-control" placeholder="Test Series"><?php echo htmlspecialchars_decode($row["test"]); ?></textarea>
                        	</div>
                          
                        <div class="display">
                            <img src="../<?php echo $row["loc_moc_icon"]; ?>">
                            <input type="file" name="icon3" onChange="displayImage(this)" id="profileImage">
                          <textarea name="icon3text" class="form-control" placeholder="Mock Interview"><?php echo htmlspecialchars_decode($row["mock"]); ?></textarea>
                        	</div>
                          
                          <div class="display">
                            <img src="../<?php echo $row["loc_postal_icon"]; ?>">
                          <input type="file" name="icon4" onChange="displayImage(this)" id="profileImage">
                          <textarea name="icon4text" class="form-control" placeholder="Postal Courses"><?php echo htmlspecialchars_decode($row["postal"]); ?></textarea>
                        	</div>
                          
                        
                        </div>
                      
                        <div class="form-group">
                          <button type="submit" name="submit" class="">Upload</button>
                        </div>
                    </form>

    <script>
		  function triggerClick(e) {
		  document.querySelector('#profileImage').click();
		}
		function displayImage(e) {
		  if (e.files[0]) {
		    var reader = new FileReader();
		    reader.onload = function(e){
		      document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
		    }
		    reader.readAsDataURL(e.files[0]);
		  }
		}
		
	</script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="ckeditor/ckeditor.js"></script>
  <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
            CKEDITOR.replace( 'text');
            </script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>