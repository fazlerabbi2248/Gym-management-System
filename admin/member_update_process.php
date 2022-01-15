<?php include('security.php'); ?>
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<?php 

if(isset($_POST['update_btn'])){
	$id = $_POST['id'];


  

       $sql= "select * from memberinformation where id=$id"; 
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
                                       <form class="form-horizontal" method="POST" action="update_member.php">

                                        
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">First Name</h5></label>


                                               <input type="text"  value="<?php echo $data['firstname']; ?>"  name="firstname">                                                

                                                </div>  

                                              
                                               

                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Last Name</h5></label>


                                               <input type="text"  value="<?php echo $data['lastname']; ?>"  name="lastname">                                                

                                                </div>                                                

                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Username</h5></label>


                                               <input type="text" value="<?php echo $data['username']; ?>" id="included-date" name="username">                                                

                                                </div> 
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Age</h5></label>


                                               <input type="text" value="<?php echo $data['age']; ?>" id="included-date" name="age">                                                

                                                </div> 
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Email</h5></label>


                                               <input type="text" value="<?php echo $data['email']; ?>" id="included-date" name="email">                                                

                                                </div> 
                                          
                                                <div class="form-group"> 
                                                  <label class="control-label col-sm-4"><h5 class="font-weight-bold">Mobile No</h5></label>


                                               <input type="text" value="<?php echo $data['mobile']; ?>" id="included-date" name="mobile">                                                

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