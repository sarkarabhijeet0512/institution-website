<!-- <head>
  <script src="vendor/jquery/jquery.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
</head> -->
<?php 
    
require_once('../conn.php');
 
 
    
if (!$conn){
    die("Could not connect to server:".mysqli_connect_error());
}
  else{
  		# code...
  	$id=$_POST['id'];
    $title=test_input($_POST['title']);
    $text=test_input($_POST['icon1text']);
    $list1=test_input($_POST['list1']);
    $list2=test_input($_POST['list2']);
    $list3=test_input($_POST['list3']);
    $list4=test_input($_POST['list4']);
    
    $sql="UPDATE progam_services SET title='$title',details='$text',list1='$list1',list2='$list2',list3='$list3',list4='$list4' WHERE id = '$id'";

   if (mysqli_query($conn, $sql)) {
   
    echo "sucess";
    } 
    else {
     echo "error";
    }

    // mysqli_close($conn);
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