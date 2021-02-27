<head>
  <script src="vendor/jquery/jquery.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
</head>
<?php
  $msg = "";
  $msg_class = "";
   $conn = mysqli_connect("localhost", "root", "", "ias");
  if (isset($_POST['submit'])) {
    $caption=$_POST['caption'];
    $heading=test_input($_POST['head']);
    // for the database
    $profileImageName = 'logo/'.time() . '-' . $_FILES["image"]["name"];
    
    // For image upload
    $target_dir = "../logo/";
    $target_file = $target_dir . basename($profileImageName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['image']['size'] > 2000000) {
      $msg = "Image size should not be greated than 2mb";
      $msg_class = "alert-danger";
    }
    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $sql = "UPDATE user_defined_settings SET caption='$caption',caption_img='$profileImageName' WHERE id=1";
        if(mysqli_query($conn, $sql)){
          echo "(<script>
                    Swal.fire({
                  icon: 'success',
                  title: 'Icons & Text Both submitted sucessfully',
                  showConfirmButton: true,
                }).then(function() {
                    window.location = 'caption.php';
                });
                </script>)";

        } else {
          echo "(<script>
                      Swal.fire({
                    icon: 'error',
                    title: 'Ooops!Somethings Went Wrong.',
                    text: 'Please try again!',
                    showConfirmButton: true,
                  }).then(function() {
                      window.location = 'caption.php';
                  });
                  </script>)";
        }
      } else {
        $sql1 = "UPDATE user_defined_settings SET caption='$caption',caption_title='$heading' WHERE id=1";
        if(mysqli_query($conn, $sql1)){
          echo "(<script>
                      Swal.fire({
                    icon: 'success',
                    title: 'Only Text Submitted Sucessfully',
                    text: 'For uploading Icons select all the icons',
                    showConfirmButton: true,
                  }).then(function() {
                      window.location = 'caption.php';
                  });
                  </script>)";
        } else {
          echo "(<script>
                      Swal.fire({
                    icon: 'error',
                    title: 'Ooops!Somethings Went Wrong.',
                    text: 'Please try again!',
                    showConfirmButton: true,
                  }).then(function() {
                      window.location = 'caption.php';
                  });
                  </script>)";
        }
      }
    }
  }
  function test_input($data){
        // $data=trim($data);
        // $data=stripcslashes($data);
        // $data=htmlspecialchars($data);
        $data=str_replace("'","&#39;" , $data);
        $data=str_replace('"',"&quot;" , $data);
        $data=str_replace("&","&amp;" , $data);

        return $data;
    }
?>