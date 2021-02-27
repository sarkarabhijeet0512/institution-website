<head>
   <script src="vendor/jquery/jquery.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
</head>
<?php require '../conn.php';

if(isset($_POST['submit'])) {
     $title = test_input($_POST['title']);
     $description = test_input($_POST['description']);

     $sql = "INSERT INTO notification(title,description) VALUES ('$title','$description')";


    if (mysqli_query($conn, $sql)) {
        echo "(<script>
                    Swal.fire({
                  icon: 'success',
                  title: 'Icons & Text Both submitted sucessfully',
                  showConfirmButton: true,
                }).then(function() {
                    window.location = 'news-feed.php';
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
                      window.location = 'news-feed.php';
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