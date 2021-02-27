<?php

require "../conn.php";

$sql = "SELECT * FROM `enquiry`";
 $result = mysqli_query($conn, $sql); 
 $admin = "SELECT * FROM `login` where id = 1";
 $admin_name = mysqli_query($conn, $admin);
 $enquiry_new="SELECT * FROM enquiry WHERE status=0";
 $enquiry_new_total= mysqli_query($conn,$enquiry_new);
 $enquiry_read="SELECT * FROM enquiry WHERE status=1";
 $enquiry_read_total=mysqli_query($conn,$enquiry_read);
 $cur_sql="SELECT * FROM affairs";
 $cur_count=mysqli_query($conn,$cur_sql); 
 ?>
 <?php include "header.php"; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Enquiry</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php



      
    // Execute the query and store the result set 
    $result = mysqli_query($conn, $sql); 
      
    if ($result) 
    { 
        // it return number of rows in the table. 
        $row = mysqli_num_rows($result); 
          
           if ($row) 
              { 
                 printf("Total Enquiry : " . $row); 
              } 
        // close the result. 
        mysqli_free_result($result); 
    } 
  
    // Connection close  
   
?> 
</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Unread Enquiry</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
       
                      if ($enquiry_new_total) 
                      { 
                          // it return number of rows in the table. 
                          $enquiry_new_row = mysqli_num_rows($enquiry_new_total); 
                            
                             if ($enquiry_new_row) 
                                { 
                                   printf("Total Unread Enquiry : " . $enquiry_new_row); 
                                } 
                          // close the result. 
                          mysqli_free_result($enquiry_new_total); 
                      } 
                    
                      // Connection close  
                     
                  ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Current Affairs</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php  
                                            if ($cur_count) 
                                            { 
                                                // it return number of rows in the table. 
                                                $row1 = mysqli_num_rows($cur_count); 
                                                  
                                                   if ($row1) 
                                                      { 
                                                         printf("Total current Affairs : " . $row1); 
                                                      } 
                                                // close the result. 
                                                mysqli_free_result($cur_count); 
                                            } 
                                          
                                            // Connection close  
                                           
                                        ?> </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

                  </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include "footer.php" ?>

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
