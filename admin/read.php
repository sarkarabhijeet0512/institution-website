<?php
require('../conn.php');
 
 
    
if (!$conn){
    die("Could not connect to server:".mysqli_connect_error());
}
  else{

    $checkid=$_GET['id'];
    
     

         $sql = "UPDATE enquiry SET status=1 WHERE id ='$checkid'";
        

   if (mysqli_query($conn, $sql)) {
       
    header("location:tables.php");
    } 
    else {
        echo "Error: ";
    }
  $delete_sql="DELETE FROM enquiry WHERE id = '$check_id'";
 if (mysqli_query($conn,$delete_sql)) {
  echo "sucess delete";
  // header("location:tables_read.php");
 }else{
  echo "error deleting the table try again";
 }
mysqli_close($conn);
}

 
?>