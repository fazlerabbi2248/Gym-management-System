<?php
 $firstname = filter_input(INPUT_POST, 'firstname');
 $lastname = filter_input(INPUT_POST, 'lastname');
 $username = filter_input(INPUT_POST, 'username');
 $age = filter_input(INPUT_POST, 'age');
 $email = filter_input(INPUT_POST, 'email');
 $mobile = filter_input(INPUT_POST, 'mobile');

 if(!empty($firstname))
{
   if(!empty($lastname))
   {
      if(!empty($username))
      {
        if (!empty($age)) {
          if (!empty($email)) {
           if (!empty($mobile)) {

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
              $sql = "INSERT INTO memberinformation (firstname,lastname, username,age, email, mobile)
              values ('$firstname','$lastname','$username','$age','$email','$mobile')";
              if ($conn->query($sql)){
                echo "Welcome to our gymmaster";
                  }
              else{
                 echo "Error: ". $sql ."". $conn->error;
                 }
               $conn->close();
              }

             
           }
           else{
             echo "Mobile should not be empty";
             die();
           }

          }
          else{
            echo "Email should not be empty";
             die();

          }
        }
        else{

         echo "Age should not be empty";
           die();

      }
    }
      else
      {
        echo "Username should not be empty";
        die();
      }
        

   }
   else
   {
      echo "lastname should not be empty";
      die();
   }
}
else{
echo "Firstname should not be empty";
die();
}
?>