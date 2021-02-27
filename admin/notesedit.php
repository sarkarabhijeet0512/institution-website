<?php include "header.php";
$topic_id=$_GET['topic_id'];
$sql = "SELECT * FROM `dynamic` where topic_id=$topic_id";
 $result = mysqli_query($conn, $sql); 
 $rstl = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
 ?>
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
<form action="update.php" method="post" id="frmBox" onsubmit="return formSubmit();">
    <input type="hidden" name="" id="success">
            
            <input type="hidden" name="topic_id" value="<?php echo $topic_id; ?>">
                  <br>
      <input type="text" name="topic" id="topic" value="<?php echo $row['topic'] ;?>" class="form-control" placeholder="topic Name Do not use and special Characters"><br>              
                    
     <textarea name="message" id="text" rows="10" cols="80"><?php echo $row['message'] ;?>
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
            url:'update.php',
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
<!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
    </body>
</html>