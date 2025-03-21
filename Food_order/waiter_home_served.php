
<?php
include("include\dbconnect.php"); 
extract($_POST);
session_start();
 $id=$_REQUEST['id'];
 
$up_fees="update booking_details set  report='1' where id='$id'"; 
if($conn->query($up_fees) === TRUE)
{
?>
		 <script language="javascript">
           alert("Food Served");
             window.location.href="waiter_home.php";
            </script>
			<?php
}

?>