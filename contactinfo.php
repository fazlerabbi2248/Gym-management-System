<?php
 $username = filter_input(INPUT_POST, 'username');
 $email = filter_input(INPUT_POST, 'email');
 $mobile = filter_input(INPUT_POST, 'mobile');
 $comment = filter_input(INPUT_POST, 'comment');
 if(!empty($username))
{
   if(!empty($email))
   {
      if(!empty($mobile))
      {
         if(!empty($comment))
         {
            
               	$host = "localhost";
	            $dbusername = "root";
	            $dbpassword = "";
	            $dbname = "gymmaster";
// Create connection
	            $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
	            if (mysqli_connect_error()){
	             die('Connect Error ('. mysqli_connect_errno() .') '
	             . mysqli_connect_error());
	            }
	           else{
	            $sql = "INSERT INTO contactinformation (username, email, mobile, comment)
	            values ('$username','$email','$mobile', '$comment')";
	            if ($conn->query($sql)){
	              echo "Thank you for your  comment";
	                }
	            else{
	               echo "Error: ". $sql ."". $conn->error;
	               }
	             $conn->close();
	            }
           

         }
         else
        {
           echo "Comment should not be empty";
           die();
        }

      }
      else
      {
        echo "Mobile should not be empty";
        die();
      }

   }
   else
   {
      echo "Email should not be empty";
      die();
   }
}
else{
echo "Username should not be empty";
die();
}
?>