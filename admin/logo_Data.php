<head>
   <script src="vendor/jquery/jquery.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
</head>
<?php
  $msg = "";
  $msg_class = "";
   $conn = mysqli_connect("localhost", "root", "", "ias");
  if (isset($_POST['submit'])) {
    
    // for the database
    $icon1 = 'images/icon/'.time() . '-' . $_FILES["icon1"]["name"];
    $icon2 = 'images/icon/'.time() . '-' . $_FILES["icon2"]["name"];
    
    // For image upload
    $target_dir = "../images/icon/";
    $target_file1 = $target_dir . basename($icon1);
    $target_file2 = $target_dir . basename($icon2);
    
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['icon1']['size'] > 2000000) {
      $msg = "Image size should not be greated than 2mb";
      $msg_class = "alert-danger";
    }
    if($_FILES['icon2']['size'] > 2000000) {
      $msg = "Image size should not be greated than 2mb";
      $msg_class = "alert-danger";
    }
    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["icon1"]["tmp_name"], $target_file1) && move_uploaded_file($_FILES["icon2"]["tmp_name"], $target_file2)) {
        
              
        $sql = "UPDATE user_defined_settings SET header_logo='$icon1', footer_logo='$icon2' WHERE id=1";
        
        if(mysqli_query($conn, $sql)){
          echo "(<script>
                      Swal.fire({
                    icon: 'success',
                    title: 'Sucessfully Uploaded',
                    showConfirmButton: true,
                  }).then(function() {
                      window.location = 'logo_change.php';
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
                      window.location = 'logo_change.php';
                  });
                  </script>)";
        }
      // }
    }  else {
        echo "error in uploading file";
      }
    }
  }
  function test_input($data){
        $data=trim($data);
        $data=stripcslashes($data);
        $data=htmlspecialchars($data);
        $data=str_replace("'","&#39;" , $data);
        $data=str_replace('"',"&quot;" , $data);
        $data=str_replace("&","&amp;" , $data);

        return $data;
    }
?>