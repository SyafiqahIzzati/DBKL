<?php
session_start();

  $n=$_POST["email"];	
  $q=$_POST["password"];
  $r=$_POST["Cpassword"];
  
    $a=$_POST["Cname"];	
  $b=$_POST["icNo"];
  $c=$_POST["phoneNo"];
  $d=$_POST["offphoneNo"];
 $e=$_POST["race"];
   $f=$_POST["religion"];
   $g=$_POST["add1"];
    $h=$_POST["add2"];
$i=$_POST["poscode"];
$j=$_POST["city"];
$k=$_POST["province"];
$l=$_POST["note"];
$m=$_POST["occupation"];
$MY_FILE = $_FILES['file']['tmp_name'];
 
// To open the file and store its contents in $file_contents
$file = fopen($MY_FILE, 'r');
$file_contents = fread($file, filesize($MY_FILE));
fclose($file);
/* We need to escape some stcharacters that might appear in  file_contents,so do that now, before we begin the query.*/
$file_contents = addslashes($file_contents);

if($q == $r){

	// Create connection
	$conn=mysqli_connect("localhost","root","","customer_data");

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
				}
				


	//SQL Statement
	$sql = "INSERT INTO customer(email,password,customer_name,ic_no,phone_no,o_phoneNo,race,religion,address1
	,address2,postcode,city,province,note,name,occupation) 
	VALUES ('$n','$q','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l', '$file_contents','$m')";

	if (mysqli_query($conn, $sql)) {
	echo ("<script>alert('Registration Success');document.location.href='home.php';</script>");
	$_SESSION['customer']= $r;
	}
	else {
   	echo ("<script>alert('Registration Failed . Try Again..');document.location.href='register.php';</script>");
	}
	

// Close connection
mysqli_close($conn);
}

else{
	//header('Location: register.php?msg=Password Incorrect!!');
	echo ("<script>alert('Registration Failed. Try Again..');document.location.href='register.php';</script>");
}
?>