<head>
<script src="../js/jquery.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
</head>
<?php
require('../conn.php');
// date_default_timezone_set('Asia/Calcutta'); 
 
    
if (!$conn){
    die("Could not connect to server:".mysqli_connect_error());
}
else{

     $checkid = $_POST['id'];
     $name=$_POST['name'];
     $email=$_POST['email'];
     $password=$_POST['password'];
     $new=$_POST['newpassword'];
     $confirm=$_POST['confirmpassword'];
    // $updated_at=date("Y-m-d h:i:sa");
$query="SELECT * FROM login WHERE id=$checkid";

  $admin=mysqli_query($conn,$query);
  $row = mysqli_fetch_assoc($admin);
  $database_password=$row['password'];

if (password_verify($password, $database_password)) {
  $hash = password_hash($new, PASSWORD_DEFAULT);
  $sql = "UPDATE login SET name='$name',email='$email',password='$hash' WHERE id ='$checkid'";

   if (mysqli_query($conn, $sql)) {
       
    echo "(<script>
    Swal.fire({
  icon: 'success',
  title: 'Updated Sucessfully',
  showConfirmButton: true,
}).then(function() {
                    window.location = 'settings.php';
                });</script>)";
    }
    } 
    else {
        echo "(<script>Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'You Have Entered wrong! Password please Retry!!',
  showConfirmButton:true,
})</script>).then(function() {
                    window.location = 'settings.php';
                }); ";
    }
}
?>