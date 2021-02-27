<?php include "header.php";
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
 }  ?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>notes admin pannel</title>
        <!-- Make sure the path to CKEditor is correct. -->
        <script src="ckeditor/ckeditor.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <div class="container">  
<form action="../dynamic.php" method="post" id="frmBox" onsubmit="return formSubmit();">
		<h1 type="hidden" name="" id="success"></h1>
            <label>Select from subjects</label>
            <select name="subject" class="form-control">  
                          <option value="">Show All subjects</option>  
                            <?php echo fill_subject($conn); ?> 
                     </select>  
									<br>
			<input type="text" name="topic" id="topic" class="form-control" placeholder="topic details"><br>							
										
		 <textarea name="message" id="text" rows="10" cols="80">this is the area text to be changed
          </textarea>
          

<input name="submit" type="submit" id="submit" value="Submit" class="btn"></input>
										
								</form>

							
</div>
<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
            CKEDITOR.replace( 'text');
            </script>
<script type="text/javascript">
    /********************************
            ajax form fillup
    *********************************/
    function formSubmit(){
    for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement();
    }
            $.ajax({
            type:'POST',
            url:'../dynamic.php',
            data:$('#frmBox').serialize(),
            success:function(response){
                $('#success').html(response);
                $('.btn').css("background-color", "Green");
                $('.btn').val("Submitted");
            }

        });
        var form=document.getElementById('frmBox').reset();
        setInterval('location.reload()', 3000); 
        return false;

    }
</script>
<script src="vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap core JavaScript-->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
    </body>
</html>