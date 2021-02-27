<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" >
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<?php include "header.php";
include "test.php";
$sql="SELECT * FROM user_defined_settings Where id=1";
 $data=mysqli_query($conn,$sql);
 $user_settings=mysqli_fetch_assoc($data);
 ?>
<div class="container">
<form action="caption.php" method="POST" enctype="multipart/form-data">
							<h2 class="text-center mb-3 mt-3">ADD caption Area Image</h2>
                        <?php if (!empty($msg)): ?>
                          <div class="alert <?php echo $msg_class ?>" role="alert">
                            <?php echo $msg; 
                            ?>
                          </div>
                        <?php endif; ?>
                        <div class="form-group text-center" style="position: relative;" >
                        
							<span class="img-div">
                            <div class="text-center img-placeholder"  onClick="triggerClick()">
                              <h4>Update image</h4>
                            </div>
                            <img src="../<?php echo $user_settings['caption_img'];  ?>" onClick="triggerClick()" id="profileDisplay">
                          </span>
                          <input type="file" name="image" onChange="displayImage(this)" id="profileImage"style="display: ;">
                        </div>
							<label>Preview Image</label><br>
              <input type="text" name="head" value="<?php echo htmlspecialchars_decode($user_settings['caption_title']); ?>" class="form-control" placeholder="Heading"><br>
							<textarea name="caption" id="text" rows="10" cols="80"><?php echo $user_settings['caption']; ?></textarea>
     <br>

                        <div class="form-group">
                          <button type="submit" name="submit" class="btn btn-primary btn-block">Upload</button>
                        </div>
						</form>
					</div>
<?php include "footer.php"; ?>
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
</html>