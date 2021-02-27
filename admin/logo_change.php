<?php include "header.php";
include "logo_Data.php";
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
                            <img src="../<?php echo $row["header_logo"]; ?>">
                          <input type="file" name="icon1" onChange="displayImage(this)" id="profileImage">

                        	</div>
                        	<div class="display">
                            <img src="../<?php echo $row["footer_logo"]; ?>">
                            <input type="file" name="icon2" onChange="displayImage(this)" id="profileImage">
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