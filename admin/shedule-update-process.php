<?php include('security.php'); ?>
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<?php 

if(isset($_POST['update_btn'])){
	$id = $_POST['id'];


  

       $sql= "select * from shedule where id=$id"; 
       $q=mysqli_query($conn,$sql);
       $data= mysqli_fetch_array($q);

}


?>

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Shedule </h1>
                    <p class="mb-4">
                   here we are going to update Shedule

                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Update Shedule</h6>
                        </div>
                        <div class="card-body">
                                       <form class="form-horizontal" method="POST" action="update.php">

                                        

                                              <div class="form-group">
                                                  <label class="control-label col-sm-2"> <h5 class="font-weight-bold">Day :</h5> </label>
                                                <input type="text" name="day" class="form-control" value="<?php echo $data['day']; ?>" reaadonly>
                                              </div>


                                              
                                               

                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Time(6-9AM)</h5></label>


                                               <input type="text"  value="<?php echo $data['t1']; ?>"  name="t1">                                                

                                                </div>                                                

                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Time(9-12AM)</h5></label>


                                               <input type="text" value="<?php echo $data['t2']; ?>" id="included-date" name="t2">                                                

                                                </div> 
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Time(2-5pm)</h5></label>


                                               <input type="text" value="<?php echo $data['t3']; ?>" id="included-date" name="t3">                                                

                                                </div> 
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Time(7-10pm)</h5></label>


                                               <input type="text" value="<?php echo $data['t4']; ?>" id="included-date" name="t4">                                                

                                                </div> 
                                          
                                          <div class="modal-footer">
                                              <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                              <button type="submit" id="save-btn" name="save_btn" class="btn btn-primary">Save</button>
                                          </div>
                                        </form>

                          </div>
                        </div>
                        </div>



<?php  include("includes/script.php"); ?>
<?php  include("includes/footer.php"); ?>