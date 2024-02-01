<?php
include("connection.php");

$fname=$_POST['fname'];
//print_r($fname);
$lname=$_POST['lname'];
//print_r($lname);
$email=$_POST['email'];
//print_r($email);
$password=$_POST['password'];
//print_r($password);
$address1=$_POST['address_1'];
// print_r($address1);
$address2=$_POST['address_2'];
// print_r($address2);
$contact_no=$_POST['contact_no'];
// print_r($contact_no);
$dob=$_POST['dob'];
// print_r($dob);
$city=$_POST['city'];
// print_r($city);
$state=$_POST['state'];
// print_r($state);
$pincode=$_POST['pincode'];
// print_r($pincode);
$status=$_POST['status'];
// print_r($status);
$role=$_POST['role'];
// print_r($role);

$sql = "INSERT INTO user_registration (first_name,last_name,email,password,address_1,address_2,contact_no,dob,city,state,pincode,status,role)
VALUES ('$fname','$lname','$email','$password','$address1','$address2','$contact_no','$dob','$city','$state','$pincode','$status','$role')";

if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT id,first_name,last_name,email,password,address_1,address_2,contact_no,dob,city,state,pincode,status,role FROM user_registration";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo "<table><tr><th>name</th><th>email</th><th>password</th><th>address_1</th><th>address_2</th><th>contact_no</th><th>dob</th><th>city</th><th>state</th><th>pincode</th><th>status</th><th>role</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>". $row["first_name"]. " " . $row["last_name"]."</td><td>". $row["email"]. "</td><td>". $row["password"]. "</td><td>". $row["address_1"]. "</td><td>". $row["address_2"]."</td><td>". $row["contact_no"]."</td><td>". $row["dob"]."</td><td>". $row["city"]."</td><td>". $row["state"]. "</td><td>". $row["pincode"]. "</td><td>" . $row["status"]."</td><td>". $row["role"]."</td></tr>";
  }
  echo "</table>";
}
else {
  echo "0 results";
}
$conn->close();
?>