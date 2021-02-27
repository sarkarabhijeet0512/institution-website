 <?php 
 include "header.php";  
  
  
 function fill_subject($conn)  
 {  
      $output = '';  
      $sql = "SELECT * FROM notes";  
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["parent_id"].'">'.$row["subject_name"].'</option>';  
      }  
      return $output;  
 }  
 function fill_topic($connect)  
 {  
      $output = '';  
      $sql = "SELECT * FROM dynamic";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<div class="col-md-3">';  
           $output .= '<div style="border:1px solid #ccc; padding:20px; margin-bottom:20px;">'.$row["topic"].'<span style="float:right;display:flex;";><form action="notesedit.php"><input type="hidden" name="topic_id" value="'.$row["topic_id"].'"><button style="border:#f8f9fc;background-color:#f8f9fc;"><i class="fa fa-edit"></i></button></form><form action=""><input type="hidden" name="topic_id" value="'.$row["topic_id"].'"><a href="notes_delete.php?topic_id= '.$row['topic_id'].'" class="btn-del" style="color:black"><i class="fa fa-trash"></i></a></form>'.'';  
           $output .=     '</div>';  
           $output .=     '</div>';  
      }  
      return $output;  
 }  
 // Initialize the session 

    
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>notes_edit</title>   
           <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
           
      </head>  
      <body>  
          
           <div class="container">  
               
                     <select name="subject" id="subject">  
                          <option value="">Show All subjects</option>  
                          <?php echo fill_subject($conn); ?>  
                     </select>  
                     <br /><br />  
                     <div class="row" id="topic">  
                          <?php echo fill_topic($conn);?>
        
                     </div>  
               
           </div>


<?php include "footer.php";?>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>

<script>  
 $(document).ready(function(){  
      $('#subject').change(function(){  
           var parent_id = $(this).val();  
           $.ajax({  
                url:"load_data.php",  
                method:"POST",  
                data:{parent_id:parent_id},  
                success:function(data){  
                     $('#topic').html(data);  
                }  
           });  
      });  
 });  
</script>
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
  
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>  
            
      </body>  
 </html>  
 
