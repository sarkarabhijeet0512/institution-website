<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php include "header.php";
$sql="SELECT * FROM program_services";
$res=mysqli_query($conn,$sql);
$img=mysqli_fetch_assoc($res);
$resl=mysqli_query($conn,$sql);

// $row=mysqli_fetch_assoc($res);
 ?>
 <div class="container">
  <div style="text-align: center;">
<img src="../<?php echo $img["photo"];?>">
</div> <br>
  <!-- start loop -->
  <?php

     if (mysqli_num_rows($resl) > 0) 
     {
                                        

        while($row = mysqli_fetch_assoc($resl)) {
                                            ?>
  <!-- htmlstart -->
            <div class="card">
            <div class="card-body">
            <div class="">
            <div style="">
                          <input type="hidden" name="id" class="form-control" value="<?php echo $row["id"];?>" placeholder="" ><br>
                          <input type="text" name="title" value="<?php echo htmlspecialchars_decode($row["title"]);?>" class="form-control" readonly="readonly"><br>
                          <textarea name="icon1text" class="form-control" rows="6" cols="80" placeholder="Review Said by students" style="border: none;" readonly="readonly"><?php echo htmlspecialchars_decode($row["details"]);?>- <?php echo htmlspecialchars_decode($row["list1"]);?></textarea><br>
                          <input type="text" name="list1" value="<?php echo htmlspecialchars_decode($row["list1"]);?>" class="form-control" readonly="readonly"><br>
                          <input type="text" name="list2" value="<?php echo htmlspecialchars_decode($row["list2"]);?>" class="form-control" readonly="readonly"><br>
                          <input type="text" name="list3" value="<?php echo htmlspecialchars_decode($row["list3"]);?>" class="form-control" readonly="readonly"><br>
                          <input type="text" name="list4" value="<?php echo htmlspecialchars_decode($row["list4"]);?>" class="form-control" readonly="readonly"><br>

                          </div><br>
                          <!-- <a href="pro_del.php?id=<?= $row["id"];?>" class="btn btn-danger">Delete</a> -->
                          <a href="program_services.php?id=<?= $row["id"];?>" class="btn btn-warning">Update</a>
                          </div>
              </div>
            </div><br>
            <!-- html end -->
             <?php }
                                } 
                            
                                    ?>
<!-- end loop -->
</div>
<?php include "footer.php";?>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>

  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
</body>
</html>