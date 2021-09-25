<!DOCTYPE html>
<html lang="en">

<head>
    <title>


        www.gymmaster.com

    </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css">-->

    <link rel="stylesheet" href="css/schedulestyle.css">
    <link rel="stylesheet" type="text/css" href="css/footerstyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />

</head>

<body>
    <?php include("includes/navbar.php"); ?>

    <div class="container">

        <div class="row">
            <div class="col-lg-2">
                <!--first card-->
                <div class="card">
                    <img class="card-img-top" src="img/18.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-success">Schedule 1(For Men)</h5>
                        <p class="card-text text-primary">Saturday-Monday-Wednesday
                            5pm to 7pm
                        </p>
                        <a href="#" class="btn btn-danger">More Info</a>
                    </div>
                </div>
            </div>



            <!--Second card-->
            <div class="col-lg-2">
                <div class="card">
                    <img class="card-img-top" src="img/17.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Schedule 2(For Women)</h5>
                        <p class="card-text text-danger">Sunday-Tuesday-Thursday
                            5pm to 7pm
                        </p>
                        <a href="#" class="btn btn-success">More Info</a>
                    </div>
                </div>
            </div>

            <!--third card-->
            <div class="col-lg-2">
                <div class="card">
                    <img class="card-img-top" src="img/3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title text-info">Reserve Day</h2>
                        <p class="card-text text-danger">Friday
                        </p>
                        <a href="#" class="btn btn-warning">More Info</a>
                    </div>
                </div>
            </div>


        </div>


    </div>



    <?php include("includes/footer.php"); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>

</html>