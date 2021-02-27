<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php include "header.php";
$sql="SELECT * FROM testimonial";
$res=mysqli_query($conn,$sql);
// $row=mysqli_fetch_assoc($res);
 ?>
 <div class="container">
 	<!-- start loop -->
 	<?php

     if (mysqli_num_rows($res) > 0) 
     {
                                        

        while($row = mysqli_fetch_assoc($res)) {
                                            ?>
 	<!-- htmlstart -->
						<div class="card">
						<div class="card-body">
						<div class="">
						<div style="display:inline-flex;">
                            <img src="../<?php echo $row["photo"];?>"><br> 
                          <input type="hidden" name="id" class="form-control" value="<?php echo $row["id"];?>" placeholder="Name & Location"><br>
                          <textarea name="icon1text" class="form-control" rows="6" cols="100" placeholder="Review Said by students" style="border: none;margin-left: 17px;" readonly="readonly"><?php echo htmlspecialchars_decode($row["review"]);?><?php echo "<br>";?>- <?php echo htmlspecialchars_decode($row["name"]);?></textarea>
                          <br>

                          </div><br>
                          <a href="delete_testimonial.php?id=<?= $row["id"];?>&photo=../<?= $row["photo"];?>" class="btn btn-danger">Delete</a>
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
<script>
  $('.btn').on('click', function(e) {
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