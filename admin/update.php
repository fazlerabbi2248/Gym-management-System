<?php  include("conn.php"); ?>


<?php 
if(isset($_POST['save_btn'])){

	


   $id = $_POST['id'];


   $day = filter_input(INPUT_POST, 'day');
   $t1 = filter_input(INPUT_POST, 't1'); 
   $t2 = filter_input(INPUT_POST, 't2');
   $t3 = filter_input(INPUT_POST, 't3');
   $t4 = filter_input(INPUT_POST, 't4');
   echo $day;
    $update="UPDATE shedule set id=$id, day='$day', t1='$t1', t2='$t2' ,t3='$t3',t4='$t4' WHERE id=$id"; 

if (mysqli_query($conn,$update)) {

    	    
	     	echo '<script language="javascript">';
            echo 'alert("updated successfully"); location.href="shedule-update.php"';
            echo '</script>';
             
  
} else {
	echo $id;
    echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);





}
?> 
