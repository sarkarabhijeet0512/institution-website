<?php include "header.php";
include "features_data.php";
$sql="SELECT * FROM user_defined_settings where id=1";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
 ?>
<head>
<style>
	.display{
		display: inline-flex;
	}
</style>
</head>
<body>
							<form method="POST" enctype="multipart/form-data">
							<div class="text-center" style="position: relative;" >
               				<span class="">
                            <div class=""  onClick="triggerClick()">
                              <h4>Update image</h4><br>
                            <img src="" onClick="triggerClick()" id="profileDisplay">

                            </div>

                          </span>
                          <div class="display">
                            <img src="../<?php echo $row["fet_study_icon"]; ?>">
                          <input type="file" name="icon1" onChange="displayImage(this)" id="profileImage">
                          <textarea name="title1" class="form-control" placeholder="<?php echo htmlspecialchars_decode($row["title1"]); ?>"><?php echo htmlspecialchars_decode($row["title1"]); ?></textarea>&nbsp;&nbsp;
                          <textarea name="icon1text" class="form-control" placeholder="<?php echo htmlspecialchars_decode($row["title1"]); ?>"><?php echo htmlspecialchars_decode($row["study"]); ?></textarea>

                        	</div>
                        	<div class="display">
                            <img src="../<?php echo $row["fet_place_icon"]; ?>">
                            <input type="file" name="icon2" onChange="displayImage(this)" id="profileImage">
                          <textarea name="title2" class="form-control" placeholder="<?php echo htmlspecialchars_decode($row["title2"]); ?>"><?php echo htmlspecialchars_decode($row["title2"]); ?></textarea>&nbsp;&nbsp;
                          <textarea name="icon2text" class="form-control" placeholder="<?php echo htmlspecialchars_decode($row["title2"]); ?>"><?php echo htmlspecialchars_decode($row["place"]); ?></textarea>

                        	</div>
                          
                        <div class="display">
                            <img src="../<?php echo $row["fet_easy_icon"]; ?>">
                            <input type="file" name="icon3" onChange="displayImage(this)" id="profileImage">
                          <textarea name="title3" class="form-control" placeholder="<?php echo htmlspecialchars_decode($row["title3"]); ?>"><?php echo htmlspecialchars_decode($row["title3"]); ?></textarea>&nbsp;&nbsp;
                          <textarea name="icon3text" class="form-control" placeholder="<?php echo htmlspecialchars_decode($row["title3"]); ?>"><?php echo htmlspecialchars_decode($row["easy"]); ?></textarea>

                        	</div>
                          
                          <div class="display">
                            <img src="../<?php echo $row["fet_on_icon"]; ?>">
                          <input type="file" name="icon4" onChange="displayImage(this)" id="profileImage">
                          <textarea name="title4" class="form-control" placeholder="<?php echo htmlspecialchars_decode($row["title4"]); ?>"><?php echo htmlspecialchars_decode($row["title4"]); ?></textarea>&nbsp;&nbsp;
                          <textarea name="icon4text" class="form-control" placeholder="<?php echo htmlspecialchars_decode($row["title4"]); ?>"><?php echo htmlspecialchars_decode($row["on_the_go"]); ?></textarea>

                        	</div>
                          <div class="display">
                            <img src="../<?php echo $row["fet_innova_icon"]; ?>">
                          <input type="file" name="icon5" onChange="displayImage(this)" id="profileImage">
                          <textarea name="title5" class="form-control" placeholder="<?php echo htmlspecialchars_decode($row["title5"]); ?>"><?php echo htmlspecialchars_decode($row["title5"]); ?></textarea>&nbsp;&nbsp;
                          <textarea name="icon5text" class="form-control" placeholder="<?php echo htmlspecialchars_decode($row["title5"]); ?>"><?php echo htmlspecialchars_decode($row["innova"]); ?></textarea>

                          </div>
                          <div class="display">
                            <img src="../<?php echo $row["fet_practic_icon"]; ?>">
                          <input type="file" name="icon6" onChange="displayImage(this)" id="profileImage">
                          <textarea name="title6" class="form-control" placeholder="<?php echo htmlspecialchars_decode($row["title6"]); ?>"><?php echo htmlspecialchars_decode($row["title6"]); ?></textarea>&nbsp;&nbsp;
                          <textarea name="icon6text" class="form-control" placeholder="<?php echo $row["title6"]; ?>"><?php echo htmlspecialchars_decode($row["practic"]); ?></textarea>

                          </div>
                        
                        </div>
                      
                        <div class="form-group">
                          <button type="submit" name="submit" class="">Upload</button>
                        </div>
                    </form>

    <script>
		  function triggerClick(e) {
		  document.querySelector('#profileImage').click();
		}
		function displayImage(e) {
		  if (e.files[0]) {
		    var reader = new FileReader();
		    reader.onload = function(e){
		      document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
		    }
		    reader.readAsDataURL(e.files[0]);
		  }
		}
		
	</script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>