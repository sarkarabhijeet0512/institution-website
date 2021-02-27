<?php include 'processForm.php';
include "header.php";?>

<!DOCTYPE html>
<html>
<head>
    <title>Image resize to upload</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" >
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>


<div class="container">
    <div class="col-4 offset-md-4 form-div">
                      <form action="" method="post" enctype="multipart/form-data">
                        <select name="animation_style" class="form-control">
                          <option selected>SELECT ANIMATION STYLE</option>
                          <option value="fadeInRight">text fade from right</option>
                          <option value="fadeInUp">text fade from up</option>
                          <option value="fadeInLeft">text fade from left</option>
                        </select>
                        <select name="color" class="form-control">
                          <option selected>SELECT TEXT COLOR</option>
                          <option value="white">white</option>
                          <option value="black">black</option>
                        </select>
                        <select name="text_alignment" class="form-control">
                          <option selected>SELECT TEXT POSITION</option>
                          <option value="fl-right">Right Side Text</option>
                          <option value="center">Centered Text</option>
                          <option value="">Left Side Tet</option>
                        </select>
                        <input type="text" name="heading" class="form-control" placeholder="Add a Heading to your Image">
                        <input type="text" name="description" class="form-control" placeholder="Add Heading description to your Image">
                        <input type="text" name="details" class="form-control" placeholder="Add details of heading for your Image">

                        <h2 class="text-center mb-3 mt-3">Add New Slider Image</h2>
                        <?php if (!empty($msg)): ?>
                          <div class="alert <?php echo $msg_class ?>" role="alert">
                            <?php echo $msg; ?>
                          </div>
                        <?php endif; ?>
                        <div class="form-group text-center" style="position: relative;" >
                          <span class="img-div">
                            <div class="text-center img-placeholder"  onClick="triggerClick()">
                              <h4>Update image</h4>
                            </div>
                            <img src="img/upload.png" onClick="triggerClick()" id="profileDisplay">
                          </span>
                          <input type="file" name="image" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
                          <label>Preview Image</label>
                        </div>
                        <div class="form-group">
                          <button type="submit" name="submit" class="btn btn-primary btn-block">Upload</button>
                        </div>
                      </form>
                    </div>
</div>


</body>
</html>

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
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
                                              
                                              