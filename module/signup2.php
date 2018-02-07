<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "taaranganadb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$name = mysqli_real_escape_string($conn,$_POST['name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$numbr = mysqli_real_escape_string($conn,$_POST['numbr']);
$clg = mysqli_real_escape_string($conn,$_POST['clg']);
$branch = mysqli_real_escape_string($conn,$_POST['branch']);

$sqlselect = "SELECT * FROM taarangana where contact_number = '$numbr' AND student_name ='$name'";
$result = mysqli_query($conn, $sqlselect);
$count=mysqli_num_rows($result);

if ($count == 0) {
	$sql = "insert into taarangana (student_name, email, contact_number, clg, branch) values ('$name', '$email', '$numbr', '$clg', '$branch')";
	if ($conn->query($sql) === TRUE) {
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	echo "<p>Your response has been recorded succesfully</p>";
	echo "<p>The Entry-Paas has been e-mailed to you</p>";
	echo "<button type=\"button\" class=\"btn btn-info\"><span>Download your Entry Paas</span></button><br><br>";
	$my_img = imagecreate( 200, 80 );
	$background = imagecolorallocate( $my_img, 0, 0, 255 );
	$text_colour = imagecolorallocate( $my_img, 255, 255, 0 );
	$line_colour = imagecolorallocate( $my_img, 128, 255, 0 );
	imagestring( $my_img, 4, 30, 25, "thesitewizard.com", $text_colour );
	imagesetthickness ( $my_img, 5 );
	imageline( $my_img, 30, 45, 165, 45, $line_colour );

	header( "Content-type: image/png" );
	imagepng( $my_img );
	imagecolordeallocate( $line_color );
	imagecolordeallocate( $text_color );
	imagecolordeallocate( $background );
	imagedestroy( $my_img );
	
	echo "<img src=\"../module/image.php\" alt=\"Image created by a PHP script\" width=\"200\" height=\"80\">";
	/*$sqlselect = "SELECT * FROM taarangana where contact_number = '$numbr' AND student_name ='$name'";
	$result = mysqli_query($conn, $sqlselect);

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<p>Your response has been recorded succesfully</p>";
		echo "<h3>User ID :{$row['id']}<br>Username :{$row['student_name']}</h3>";
		echo "<p>Please remember your User ID and Username to register for any event or to access your Entry Pass</p>";
    }*/
} else  if($count>0){
    echo "<p>Your Details already exists in the database</p>";
	echo "<p>The Entry-Paas has been e-mailed to you again</p>";
	echo "<button type=\"button\" class=\"btn btn-info\"><span>Download your Entry Paas</span></button><br><br>";
	/*$sqlselect = "SELECT * FROM taarangana where contact_number = '$numbr' AND student_name ='$name'";
	$result = mysqli_query($conn, $sqlselect);

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
		echo "<h3>User ID :{$row['id']}<br>Username :{$row['student_name']}</h3>";
		
    }*/
}

$conn->close();
?>
