<?php  include("conn.php"); ?>


<?php 
if(isset($_POST['delete_btn'])){

	$id = $_POST['id'];
$delete_member= "DELETE FROM memberinformation WHERE id=$id";

if (mysqli_query($conn,$delete_member)) {

    	     echo '<script>alert("Records deleted successfully.")</script>';
	     	echo '<script language="javascript">';
            echo 'alert("Successfully delete"); location.href="remove_member.php"';
            echo '</script>';
             
  
} else {
	echo $id;
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);





}
?> 
