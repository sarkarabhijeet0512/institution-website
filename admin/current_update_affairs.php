
<html>
<body>
<?php include "header.php";
$current_query="SELECT * FROM affairs"
?>
<div class="container">
	<div>
		<form action="current_affairs_action.php" method="POST">
			<input type="text" name="title" placeholder="Enter Title" class="form-control"><br>
			<input type="date" name="data" class="form-control"><br>
			
	
			<textarea name="message" id="text" rows="10" cols="80">this is the area text to be changed
          </textarea><br>
			<button type="submit" name="submit" class="btn btn-primary">submit</button>
		</form>		
	</div>
</div>
<?php include "footer.php";?>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="ckeditor/ckeditor.js"></script>
<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
            CKEDITOR.replace( 'text');
            </script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>