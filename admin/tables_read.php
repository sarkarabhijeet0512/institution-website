<?php 
include "header.php"; 
 $sql = "SELECT * FROM `enquiry` where status=1 order by created_at desc ";
 $results = mysqli_query($conn, $sql); 

 //var_dump($result);
 ?>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">OLD/Read DataTable</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>SR-no</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Contact</th>
                      <th>Enquiry About</th>
                      <th>Time</th>
                      <th>Action</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>SR-no</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Contact</th>
                      <th>Enquiry About</th>
                      <th>Time</th>
                      <th>Action</th>
                      
                    </tr>
                  </tfoot>
                  <tbody>
<?php

     if (mysqli_num_rows($results) > 0) 
     {
                                        
$count = 1;
        while($row = mysqli_fetch_assoc($results)) {
                                           
                                            ?>                          
                  
                    <tr>
                      <td><?php echo $count++ ;?></td>
                      <td><?php echo $row["name"];?></td>
                      <td><?php echo $row["email"];?></td>
                      <td><?php echo $row["contact"];?></td>
                      <td><?php echo $row["message"];?></td>
                      <td><?php echo $row["created_at"];?></td>
                      <td style="text-align: center;"><a href="delete_table.php?id=<?= $row['id']; ?>" class="btn-del"><i  class="fa fa-trash-o"></i></a></td>
                      
                      

                    </tr>                      
                        <?php }
                                }

                                ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php include "footer.php" ?>
  <!-- Bootstrap core JavaScript-->
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
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  

</body>

</html>
