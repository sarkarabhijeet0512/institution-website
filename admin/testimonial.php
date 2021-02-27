<?php include "header.php";
include "testimonial_data.php";
?>
<head>
</head>
<body>
  <!-- <a href="show_testimonal.php">Delete Existing testimonials</a> -->
              <form method="POST" enctype="multipart/form-data">
                      <div class="text-center" style="position: relative;" >
                      <span class="">
                            <div class=""  onClick="triggerClick()">
                              <h4>Click On the image to Upload</h4><br>
                            <!-- <img src="" onClick="triggerClick()" id="profileDisplay"> -->

                            </div>

                          </span>
                          <div class="container">
                            <img src="img/avatar.jpg" onClick="triggerClick()" id="profileDisplay"> <br>
                          <input type="file" name="icon1" onChange="displayImage(this)" id="profileImage" style="display: none"><br>
                          <input type="text" name="name" class="form-control" placeholder="Name & Location"><br>
                          <textarea name="icon1text" class="form-control" placeholder="Review Said by students"></textarea>
                          <br>
                          <button type="submit" name="submit" class="btn btn-primary">Upload</button>

                          </div><br>
                          <a href="show_testimonial.php" class="btn btn-danger">Existing testimonials</a>
                          </div>
                      
                    </form>
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
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>