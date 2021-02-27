<?php include "header.php";
$res=mysqli_query($conn,"SELECT * FROM slider");

?>
<!DOCTYPE html>
<html>
<head>
<title>Image retrieve</title>
</head>

<body>
  <div class="container">
<form name="form1" action="delete_slider.php" method="GET" enctype="multipart/form-data">
  <?php
while($row=mysqli_fetch_array($res)){
?>
<!-- <img src="../images/main-slider/banner1.jpg"> -->
<img style="width: 27rem;margin-bottom: 1rem;" src="../<?php echo $row["location"];?>">
<input type="hidden" name="id" value="<?php echo $row["id"];?>">

<input type="hidden" name="location" value="../<?php echo $row["location"];?>">

<button class="btn btn-danger">delete</button><br>
<?php } ?>
</form>
</div>
<?php include "footer.php" ?>
<script></script>

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
