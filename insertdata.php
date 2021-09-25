<?php

$connection = mysqli_connect("localhost" ,"root" ,"");
$db = mysqli_select_db($connection,'gym_db');

if(isset($_POST['insertdata']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $course = $_POST['course'];
    $contact = $_POST['contact'];

    $query = "INSERT INTO member_info(`fname` , `lname` , `Schedule` ,`contact`) VALUES ('$fname' , '$lname' , '$course' , '$contact')";
    $query_run = mysqli_query($connection,$query);

    // in the insert option always look into the sign ``

    if($query_run)
    {
        echo '<script>alert("Data Saved"); </script>';
        header('Location: AddMember.php');

    }
    else{
        echo '<script>alert("Data not Saved"); </script>';
    }
}
?>