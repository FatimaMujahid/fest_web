<?php
error_reporting(0);
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'taaranganadb';
   
   $conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);
   
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}     
	   
if (empty($_POST['userid']) || empty($_POST['name'])) 
{
	print "Please fill both the details";
} 
			
$myuserid =mysqli_real_escape_string($conn,$_POST['userid']); // Escapes special characters in a string for use in an SQL statement
$myname =mysqli_real_escape_string($conn,$_POST['name']); 
 
$query = "SELECT * FROM taarangana WHERE id = '$myuserid' and student_name = '$myname'"; //Fetching all the records with input credentials
$result = mysqli_query($conn,$query);
  
if(mysqli_num_rows($result) == 1)
{
	while($row = mysqli_fetch_assoc($result)) {
		echo "<p>User ID: {$row['id']}<br>
		Username: {$row['student_name']}<br>
		Email Id: {$row['email']}<br>
		Contact Number: {$row['contact_number']}<br>
		Year: {$row['year']}<br>
		College: {$row['clg']}</p>";
	} 	
	
}else{	
	
	echo "<p>INVALID USER ID</p>";
	echo "<p>First create your account on Signup portal</p>";
}   
$conn->close();
?>


            
