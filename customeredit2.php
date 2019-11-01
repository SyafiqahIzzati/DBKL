<?php
  session_start();
  $x=$_SESSION['adminID'];
  
$n=$_POST["email"];	

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

// Create connection
$conn=mysqli_connect("localhost","root","","customer_data");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//SQL Statement
//INSERT INTO customer(email,customer_name,ic_no,phone_no,o_phoneNo,race,religion,address1
	//,address2,postcode,city,province,note,name,occupation) 
	//VALUES ('$n','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l', '$file_contents','$m')"
	
$sql = "UPDATE customer SET 
  customer_name ='$a',
	  ic_no='$b',
	  phone_no='$c',
	  o_phoneNo='$d',
	  race='$e',
	  religion='$f',
	 address1	='$g',
	address2='$h',
	 postcode='$i',
	  city='$j',
	  province='$k',
	 note='$l',
	  occupation='$m',
	  name='$file_contents'
		WHERE email='$n'";

if (mysqli_query($conn, $sql)) {
	echo ("<script>alert('Your Update Success');document.location.href='adminIndex.php';</script>");
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);




?>