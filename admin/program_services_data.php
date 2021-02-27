<head>
   <script src="vendor/jquery/jquery.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
</head>
<?php
   $conn = mysqli_connect("localhost", "root", "", "ias");
  if (isset($_POST['submit'])) {
    $text=test_input($_POST['icon1text']);
    $list1=test_input($_POST['list1']);
    $list2=test_input($_POST['list2']);
    $list3=test_input($_POST['list3']);
    $list4=test_input($_POST['list4']);
    $title=test_input($_POST['title']);
    


    // for the database
    $icon1 = 'images/programs/'.time() . '-' . $_FILES["icon1"]["name"];
    
    // For image upload
    $target_dir = "../images/programs/";
    $target_file1 = $target_dir . basename($icon1);
    


    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['icon1']['size'] > 2000000) {
      echo "Too big file to upload";
    }
    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["icon1"]["tmp_name"], $target_file1)) {
        
              
        $sql = "INSERT INTO program_services(title,details,list1,list2,list3,list4,photo)VALUES ('$title','$text','$list1','$list2','$list3','$list4','$icon1')";
        
        if(mysqli_query($conn, $sql)){
          echo "(<script>
                      Swal.fire({
                    icon: 'success',
                    title: 'Icons & Text Submitted Sucessfully',
                    showConfirmButton: true,
                  }).then(function() {
                      window.location = 'program_services.php';
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
                      window.location = 'program_services.php';
                  });
                  </script>)";
        }
      // }
    }  else {
        $sql = "INSERT INTO program_services(title,details,list1,list2,list3,list4)VALUES ('$title','$text','$list1','$list2','$list3','$list4')";
        
        if(mysqli_query($conn, $sql)){
          echo "(<script>
                      Swal.fire({
                    icon: 'success',
                    title: 'Only Text Submitted Sucessfully',
                    text: 'For uploading Icons select all the icons',
                    showConfirmButton: true,
                  }).then(function() {
                      window.location = 'program_services.php';
                  });
                  </script>)";
        } else {
          echo "(<script>
                      Swal.fire({
                    icon: 'error',
                    title: 'Ooops!Somethings Went Wrong.',
                    text: 'Please try again! using photo',
                    showConfirmButton: true,
                  }).then(function() {
                      window.location = 'program_services.php';
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