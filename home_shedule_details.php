<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/blogStyle.css">
  <link rel="stylesheet" type="text/css" href="css/footerstyle.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
  <title></title>
</head>

<body>
	   <?php include ("includes/navbar.php"); ?>
	        <div class="container-fluid">

                    <!-- Page Heading -->
                   
  
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

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>DAY</th>
                                            <th>Time(6-9AM)</th>
                                            <th>Time(9-12AM)</th>
                                            <th>Time(2-5AM)</th>
                                            <th>Time(7-10AM)</th>                                        </tr>
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
                                                      
                                                    </tr>
                                                    <?php } ?>                                     
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
    </div>
     <?php include ("includes/footer.php"); ?>

</body>
</html>