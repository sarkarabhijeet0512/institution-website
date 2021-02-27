
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php include "header.php";
$id=$_GET['id'];
// $row=mysqli_fetch_assoc($res);
$sql="SELECT * FROM program_services where id=$id";
$resl=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($resl);
 ?>
 <div class="container">
  
  <!-- start loop -->
  
  <!-- htmlstart -->
            <form action="pro_data.php" method="POST" >
              
                          <input type="hidden" name="id" class="form-control" value="<?php echo $id;?>" placeholder="" ><br>
                          <input type="text" name="title" value="<?php echo htmlspecialchars_decode($row["title"]);?>" class="form-control"><br>
                          <textarea name="icon1text" class="form-control" rows="6" cols="80" placeholder="Review Said by students"><?php echo htmlspecialchars_decode($row["details"]);?></textarea><br>
                          <input type="text" name="list1" value="<?php echo htmlspecialchars_decode($row["list1"]);?>" class="form-control"><br>
                          <input type="text" name="list2" value="<?php echo htmlspecialchars_decode($row["list2"]);?>" class="form-control"><br>
                          <input type="text" name="list3" value="<?php echo htmlspecialchars_decode($row["list3"]);?>" class="form-control"><br>
                          <input type="text" name="list4" value="<?php echo htmlspecialchars_decode($row["list4"]);?>" class="form-control"><br>

                          <button type="submit" name="" class="btn btn-primary">Upload</button>

                          <br>
                          <a href="show_program.php" class="btn btn-danger">Manage/Delete</a>
                    </form>
    <?php include "footer.php"; ?>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
 

</body>
</html>