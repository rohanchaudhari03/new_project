<?php
include("connection.php");

$user_id= $_REQUEST['user_id'];

$sql = "UPDATE user_registration SET city='Doe' WHERE user_id=$user_id";

if (mysqli_query($conn, $sql)) {
//   echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

