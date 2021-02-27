<head>
  <script src="vendor/jquery/jquery.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
</head>
<?php require '../conn.php';

if(isset($_POST['submit'])) {
     $title = test_input($_POST['title']);
      $message=test_input($_POST['message']);
     $var = $_POST['data'];
$date = str_replace('/', '-', $var);
$formated_month=date('m', strtotime($date));
$formated_year=date('Y', strtotime($date));
$formated_date=date('Y-m-d', strtotime($date));

     $sql = "INSERT INTO affairs(title,month,message,created_at) VALUES ('$title','$formated_month','$message','$formated_date')";


    if (mysqli_query($conn, $sql)) {
      echo "(<script>
                    Swal.fire({
                  icon: 'success',
                  title: 'Icons & Text Both submitted sucessfully',
                  showConfirmButton: true,
                }).then(function() {
                    window.location = 'current_update_affairs.php';
                });
                </script>)";
    } 
    else {
        echo "(<script>
                      Swal.fire({
                    icon: 'error',
                    title: 'Ooops!Somethings Went Wrong.',
                    text: 'Please try again!',
                    showConfirmButton: true,
                  }).then(function() {
                      window.location = 'current_update_affairs.php';
                  });
                  </script>)";
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