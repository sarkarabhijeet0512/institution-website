<head>

<script src="../js/jquery.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
    <title></title>
</head>

<?php
require('../conn.php');
date_default_timezone_set('Asia/Calcutta'); 
 
    
if (!$conn){
    die("Could not connect to server:".mysqli_connect_error());
}
  else{

    $checkid = $_POST['topic_id'];
     $topic = test_input($_POST['topic']);
     $message=$_POST['message'];
     $updated_at=date("Y-m-d h:i:sa");

         $sql = "UPDATE dynamic SET topic='$topic',message='$message',updated_at='$updated_at' WHERE topic_id ='$checkid'";

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
  footer: '<a href>Why do I have this issue?</a>'
})</script>) ";
    }
    mysqli_close($conn);

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