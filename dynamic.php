<head>
<script src="js/jquery.min.js"></script>
<script src="admin/js/sweetalert2.all.min.js"></script>
    <title></title>
</head>
<?php
require('conn.php');
 
    
if (!$conn){
    die("Could not connect to server:".mysqli_connect_error());
}
  else{
   

        $topic=test_input($_POST['topic']);
        $message=$_POST['message'];
        $subject=$_POST['subject'];


 $sql = "INSERT INTO dynamic(parent_id,topic,message) VALUES ('$subject','$topic','$message')";


if (mysqli_query($conn, $sql)) {
       
echo "(<script>
  Swal.fire({
  icon: 'success',
  title: 'Updated Sucessfully',
  showConfirmButton: false,
})</script>)";
    } 
    else {
                  echo "(<script>Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
          })</script>)";
    }
    mysqli_close($conn);
}
// Connection Closed
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