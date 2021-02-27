<?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "", "ias");  
 $output = '';  
 if(isset($_POST["parent_id"]))  
 {  
      if($_POST["parent_id"] != '')  
      {  
           $sql = "SELECT * FROM dynamic WHERE parent_id = '".$_POST["parent_id"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM dynamic";  
      }  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
       // var_dump($row);
        $output .= '<div class="col-md-3">';  
           $output .= '<div style="border:1px solid #ccc; padding:20px; margin-bottom:20px;">'.$row["topic"].'<span style="float:right;display:flex;";><form action="notesedit.php"><input type="hidden" name="topic_id" value="'.$row["topic_id"].'"><button style="border:#f8f9fc;background-color:#f8f9fc;"><i class="fa fa-edit"></i></button></form><form action=""><input type="hidden" name="topic_id" value="'.$row["topic_id"].'"><a href="notes_delete.php?topic_id= '.$row['topic_id'].'" class="btn-del" style="color:black"><i class="fa fa-trash"></i></a></form>'.'';  
           $output .=     '</div>';  
           $output .=     '</div>'; 
      }  
      echo $output;  
 }  
 ?>  
 <script src="vendor/jquery/jquery.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>

<script>
  $('.btn-del').on('click', function(e) {
    e.preventDefault();
    const href = $(this).attr('href')

    Swal.fire({
          title : 'are you sure?',
          text : 'record will be deleted?',
          type : 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Delete record?',
        }).then((result) => {
        if (result.value) {
          document.location.href = href;
        }

      })
  })

</script>