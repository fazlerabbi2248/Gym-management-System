<?php include('security.php'); ?>
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

  <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">GYM Shedule </h1>
                    <p class="mb-4">
                    	Here we are showing GYM Shedule for a this week 
                    </p>
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">GYM Shedule  </h6>
                        </div>
                            


                        
                        <div class="card-body">
                                                          <div class="table-responsive">
                                <table class="table table-bordered table-striped table-dark" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>DAY</th>
                                            <th>Time(6-9AM)</th>
                                            <th>Time(9-12AM)</th>
                                            <th>Time(2-5AM)</th>
                                            <th>Time(7-10AM)</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>DAY</th>
                                            <th>Time(6-9AM)</th>
                                            <th>Time(9-12AM)</th>
                                            <th>Time(2-5AM)</th>
                                            <th>Time(7-10AM)</th> 
                                             <th>Action</th>
                                                          </tr>
                                    </tfoot>
                                    <tbody>
                                          
                                         
                                         <?php  include("conn.php"); ?>


                                                  <?php
 
                                                       
                                                      $sql= "select * from shedule"; 
                                                      $Q=mysqli_query($conn,$sql);
                                                      while($data=mysqli_fetch_assoc($Q)){
                                                  ?>
                                                  <tr>
                                                      <td><?php echo $data['day'];?></td>
                                                      <td><?= $data['t1']; ?></td>
                                                      <td><?= $data['t2']; ?></td>
                                                      <td><?= $data['t3']; ?></td>
                                                      <td><?= $data['t4']; ?></td>
                                                    <td>
                                                      <form action="shedule-update-process.php" method="post">
                                                              <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                                              <button type="submit" name="update_btn" class="btn btn-danger"> Update</button>
                                                            </form>
                                                        </td>                                                      
                                                    </tr>
                                                    <?php } ?>                                     
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>



<?php  include("includes/script.php"); ?>
<?php  include("includes/footer.php"); ?>