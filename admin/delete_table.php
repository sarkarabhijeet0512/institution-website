<?php
require('../conn.php');
 
 
    
if (!$conn){
    die("Could not connect to server:".mysqli_connect_error());
}
  else{

    $id=$_GET['id'];
    
  $delete_sql="DELETE FROM enquiry WHERE id = '$id'";
 if (mysqli_query($conn,$delete_sql)) {
  
  header("location:tables_read.php");
 }else{
  echo "error deleting the table try again";
 }
mysqli_close($conn);
}

 
?>