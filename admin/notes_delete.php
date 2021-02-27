<?php 
    
require_once('../conn.php');
 
 
    
if (!$conn){
    die("Could not connect to server:".mysqli_connect_error());
}
  else{
  		# code...
  	$topic_id=$_GET['topic_id'];
    
     

         $sql="DELETE FROM dynamic WHERE topic_id = '$topic_id'";

   if (mysqli_query($conn, $sql)) {
   
    header('location:update_data.php');
    } 
    else {
        echo "Error: ";
    }
    mysqli_close($conn);

}

?>