<?php
include("connection.php");

$fname=$_POST['fname'];
print_r($fname);
$lname=$_POST['lname'];
print_r($lname);
$email=$_POST['email'];
print_r($email);
$password=$_POST['password'];
print_r($password);
$address1=$_POST['address_1'];
print_r($address1);
$address2=$_POST['address_2'];
print_r($address2);
$contact_no=$_POST['contact_no'];
print_r($contact_no);
$dob=$_POST['dob'];
print_r($dob);
$city=$_POST['city'];
print_r($city);
$state=$_POST['state'];
print_r($state);
$pincode=$_POST['pincode'];
print_r($pincode);
$status=$_POST['status'];
print_r($status);
$role=$_POST['role'];
print_r($role);

$sql = "INSERT INTO user_registration (first_name,last_name,email,password,address_1,address_2,contact_no,dob,city,state,pincode,status,role)
VALUES ('$fname','$lname','$email','$password','$address1','$address2','$contact_no','$dob','$city','$state','$pincode','$status','$role')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// $conn->close();
?>