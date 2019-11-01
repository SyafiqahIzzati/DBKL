
<?php

/*

DELETE.PHP


*/



// connect to the database

include('db.php');



// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['title']))

{

// get id value

$id = $_GET['title'];



// delete the entry

$result = mysql_query("DELETE FROM customer WHERE email='$id'")

or die(mysql_error());


 if($result)
  {
	 echo ("<script>alert('Customer has been deleted..');document.location.href='adminIndex.php';</script>");
  }
  else
  {
      echo mysql_error();
	  echo ("<script>alert('Customer has been deleted..');document.location.href='adminIndex.php';</script>");
  }
  }
  ?>