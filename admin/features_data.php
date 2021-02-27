<head>
   <script src="vendor/jquery/jquery.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
</head>
<?php
  $msg = "";
  $msg_class = "";
   $conn = mysqli_connect("localhost", "root", "", "ias");
  if (isset($_POST['submit'])) {
    $text1=test_input($_POST['icon1text']);
    $text2=test_input($_POST['icon2text']);
    $text3=test_input($_POST['icon3text']);
    $text4=test_input($_POST['icon4text']);
    $text5=test_input($_POST['icon5text']);
    $text6=test_input($_POST['icon6text']);
    $title1=test_input($_POST['title1']);
    $title2=test_input($_POST['title2']);
    $title3=test_input($_POST['title3']);
    $title4=test_input($_POST['title4']);
    $title5=test_input($_POST['title5']);
    $title6=test_input($_POST['title6']);


    // for the database
    $icon1 = 'images/icon/'.time() . '-' . $_FILES["icon1"]["name"];
    $icon2 = 'images/icon/'.time() . '-' . $_FILES["icon2"]["name"];
    $icon3 = 'images/icon/'.time() . '-' . $_FILES["icon3"]["name"];
    $icon4 = 'images/icon/'.time() . '-' . $_FILES["icon4"]["name"];
    $icon5 = 'images/icon/'.time() . '-' . $_FILES["icon5"]["name"];
    $icon6 = 'images/icon/'.time() . '-' . $_FILES["icon6"]["name"];
    
    // For image upload
    $target_dir = "../images/icon/";
    $target_file1 = $target_dir . basename($icon1);
    $target_file2 = $target_dir . basename($icon2);
    $target_file3 = $target_dir . basename($icon3);
    $target_file4 = $target_dir . basename($icon4);
    $target_file5 = $target_dir . basename($icon5);
    $target_file6 = $target_dir . basename($icon6);


    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['icon1']['size'] > 2000000) {
      $msg = "Image size should not be greated than 2mb";
      $msg_class = "alert-danger";
    }
    if($_FILES['icon2']['size'] > 200000) {
      $msg = "Image size should not be greated than 200kb";
      $msg_class = "alert-danger";
    }if($_FILES['icon3']['size'] > 200000) {
      $msg = "Image size should not be greated than 200kb";
      $msg_class = "alert-danger";
    }if($_FILES['icon4']['size'] > 200000) {
      $msg = "Image size should not be greated than 200kb";
      $msg_class = "alert-danger";
    }if($_FILES['icon5']['size'] > 200000) {
      $msg = "Image size should not be greated than 200kb";
      $msg_class = "alert-danger";
    }if($_FILES['icon6']['size'] > 200000) {
      $msg = "Image size should not be greated than 200kb";
      $msg_class = "alert-danger";
    }
    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["icon1"]["tmp_name"], $target_file1) && move_uploaded_file($_FILES["icon2"]["tmp_name"], $target_file2) && move_uploaded_file($_FILES["icon3"]["tmp_name"], $target_file3) && move_uploaded_file($_FILES["icon4"]["tmp_name"], $target_file4) && move_uploaded_file($_FILES["icon4"]["tmp_name"], $target_file5) && move_uploaded_file($_FILES["icon4"]["tmp_name"], $target_file6) ) {
        
              
        $sql = "UPDATE user_defined_settings SET study='$text1', place='$text2', easy='$text3', on_the_go='$text4',innova='$text5',practic='$text6' fet_study_icon='$icon1', fet_place_icon='$icon2', fet_easy_icon='$icon3', fet_on_icon='$icon4' ,fet_innova_icon='$icon5',fet_practic_icon='$icon6',title1='$title1',title2='$title2',title3='$title3',title4='$title4',title5='$title5',title6='$title6' WHERE id=1";
        
        if(mysqli_query($conn, $sql)){
          echo "(<script>
                      Swal.fire({
                    icon: 'success',
                    title: 'Icons & Text Submitted Sucessfully',
                    showConfirmButton: true,
                  }).then(function() {
                      window.location = 'features.php';
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
                      window.location = 'features.php';
                  });
                  </script>)";
        }
      // }
    }  else {
        $sql = "UPDATE user_defined_settings SET study='$text1', place='$text2', easy='$text3', on_the_go='$text4',innova='$text5',practic='$text6',title1='$title1',title2='$title2',title3='$title3',title4='$title4',title5='$title5',title6='$title6' WHERE id=1";
        
        if(mysqli_query($conn, $sql)){
          echo "(<script>
                      Swal.fire({
                    icon: 'success',
                    title: 'Only Text Submitted Sucessfully',
                    text: 'For uploading Icons select all the icons',
                    showConfirmButton: true,
                  }).then(function() {
                      window.location = 'features.php';
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
                      window.location = 'features.php';
                  });
                  </script>)";
        }
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