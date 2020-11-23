<!DOCTYPE html>
<html>
<head>
	<title></title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/footerstyle.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
</head>
<body>


<?php include ("includes/navbar.php"); ?>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">About Us</h2>
  </div >
   <div class="container-fluid">
    <div class="row" >
      <div class="col-lg-6 col-md-6 col-12">
        <div class="card">
           <img class="card-img-top" src="img/sivlu.jpg" alt="Card image">
             <div class="card-body">
             <h4 class="card-title">Fazle Rabbi</h4>
             <p class="card-text">Website Developer</p>
             <a href="MyProfile.php" class="btn btn-primary">See Details</a>
             </div>
        </div>
      </div>
 

      <div class="col-lg-6 col-md-6 col-12" >
        <div class="card" >
           <img class="card-img-top" src="img/priyo.jpg" alt="Card image" >
             <div class="card-body">
             <h4 class="card-title">Shariar Priyo</h4>
             <p class="card-text">Website Developer</p>
             <a href="priyoprofile.php" class="btn btn-primary">See Details</a>
             </div>
        </div>

        

      </div>
    </div>
  </div>
</section>


<?php include ("includes/footer.php"); ?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>