<head>
  <script src="vendor/jquery/jquery.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
</head>
<?php
  $msg = "";
  $msg_class = "";
   $conn = mysqli_connect("localhost", "root", "", "ias");
  if (isset($_POST['submit'])) {
    $animation_style =$_POST['animation_style'];
    $color=$_POST['color'];
    $text_alignment=$_POST['text_alignment'];
    $heading=test_input($_POST['heading']);
    $description=test_input($_POST['description']);
    $details=test_input($_POST['details']);
    // for the database
    $profileImageName = 'images/main-slider/'.time() . '-' . $_FILES["image"]["name"];
    
    // For image upload
    $target_dir = "../images/main-slider/";
    $target_file = $target_dir . basename($profileImageName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['image']['size'] > 2000000) {
      $msg = "Image size should not be greated than 2mb";
      $msg_class = "alert-danger";
    }
    // check if file exists
    if(file_exists($target_file)) {
      $msg = "File already exists";
      $msg_class = "alert-danger";
    }
    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO slider SET location='$profileImageName',animation_style='$animation_style',color='$color',text_alignment='$text_alignment',heading='$heading',description='$description',details='$details'";
        if(mysqli_query($conn, $sql)){
          echo "(<script>
                    Swal.fire({
                  icon: 'success',
                  title: 'Image & text sucessfully Uploaded',
                  showConfirmButton: true,
                }).then(function() {
                    window.location = 'upload.php';
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
                      window.location = 'upload.php';
                  });
                  </script>)";
        }
      } else {
        "(<script>
                      Swal.fire({
                    icon: 'error',
                    title: 'Ooops!icons Not upload .',
                    text: 'Please try again!',
                    showConfirmButton: true,
                  }).then(function() {
                      window.location = 'upload.php';
                  });
                  </script>)";
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