<head>
  <script src="vendor/jquery/jquery.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
</head>
<?php 
    
require_once('../conn.php');
 
 
    
if (!$conn){
    die("Could not connect to server:".mysqli_connect_error());
}
  else{
  		# code...
  	$id=$_GET['id'];
    $link=$_GET['location'];
    if (file_exists($link)) {
    unlink($link);
  $sql="DELETE FROM slider WHERE id = '$id'";

   if (mysqli_query($conn, $sql)) {
   
    echo "(<script>
                    Swal.fire({
                  icon: 'success',
                  title: 'Icons & Text Both submitted sucessfully',
                  showConfirmButton: true,
                }).then(function() {
                    window.location = 'upload.php';
                });
                </script>)";
    } 
    else {
       "(<script>
                      Swal.fire({
                    icon: 'error',
                    title: 'Ooops!Somethings Went Wrong.',
                    text: 'Please try again!',
                    showConfirmButton: true,
                  }).then(function() {
                      window.location = 'slider_preview.php';
                  });
                  </script>)";
    }

} else {
  "(<script>
                      Swal.fire({
                    icon: 'warning',
                    title: 'Deleted from database!',
                    text: 'File Still not Deleted from folder!',
                    showConfirmButton: true,
                  }).then(function() {
                      window.location = 'why_us.php';
                  });
                  </script>)";
}

          
    mysqli_close($conn);

}

?>