<?php  include("conn.php"); ?>


<?php 
if(isset($_POST['save_btn'])){

	


   $id = $_POST['id'];


   $firstname = filter_input(INPUT_POST, 'firstname');
   $lastname = filter_input(INPUT_POST, 'lastname'); 
   $username = filter_input(INPUT_POST, 'username');
   $age = filter_input(INPUT_POST, 'age');
   $email = filter_input(INPUT_POST, 'email');
    $mobile = filter_input(INPUT_POST, 'mobile');


    $update="UPDATE memberinformation set id=$id, firstname='$firstname', lastname='$lastname', username='$username' ,age='$age',email='$email',mobile='$mobile' WHERE id=$id"; 

if (mysqli_query($conn,$update)) {

    	    
	     	echo '<script language="javascript">';
            echo 'alert("updated successfully"); location.href="update_member_information.php"';
            echo '</script>';
             
  
} else {
	echo $id;
    echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);





}
?> 
