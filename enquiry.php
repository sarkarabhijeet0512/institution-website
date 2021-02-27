<!DOCTYPE html>
<html>
<head>

<script src="js/jquery.min.js"></script>
<script src="admin/js/sweetalert2.all.min.js"></script>
    <title></title>
</head>
<body>

</body>
</html>
<?php
require('conn.php'); //include auth.php file on all secure pages 
if (!$conn){
    die("Could not connect to server:".mysqli_connect_error());
}
  else{
        $name=test_input($_POST['name']);
        $email=test_input($_POST['email']);
        $contact=test_input($_POST['contact']);
        $message =test_input( $_POST['message']);


 $sql = "INSERT INTO enquiry(name,email,contact,message) VALUES ('$name','$email','$contact','$message')";


if (mysqli_query($conn, $sql)) {
       
    echo "(<script>
    Swal.fire({
  icon: 'success',
  title: 'Submitted Sucessfully',
  showConfirmButton: true,
})</script>)";
    } 
    else {
        echo "(<script>Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Something went wrong!',
  footer: '<a href>Why do I have this issue?</a>'
})</script>) ";
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