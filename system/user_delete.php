<?php
include("connection.php");

$user_id= $_REQUEST['user_id'];

// sql to delete a record
$sql = "DELETE FROM user_registration WHERE user_id=$user_id";

if ($conn->query($sql) === TRUE) {
  // echo "Record deleted successfully";
  header("location:users.php?success=1");
  exit;
} else {
  echo "Error deleting record: " . $conn->error;
}

?>