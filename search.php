<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>DBKL | WELCOME </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Owl carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>
		
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

<style>
table, th, td {
    border: 1px solid black;
	
	height:8px;
	

		td{
          border: 1px solid black;
	align:center;
	height:8px;
	width=90%;
	
	 white-space: nowrap;
	 overflow: hidden;
	 text-overflow: ellipsis;
	 word-wrap: break-word;
	  table-layout: fixed;
	     white-space: pre-wrap; /* css-3 */
        white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
        white-space: -pre-wrap; /* Opera 4-6 */
        white-space: -o-pre-wrap; /* Opera 7 */
		}
		
</style>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
    $("a.delete").click(function(e){
        if(!confirm('Are you sure?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});
</script>
    </head>

    <body>

<?php 
session_start();
if(!isset($_SESSION['adminID']))
echo ("<script>alert('Please log in!');document.location.href='index.php';</script>");

$a = $_SESSION['adminID'];
ob_start();
include('db.php');
ob_end_flush();
?>
    <header class="main-header">
        
    
        <nav class="navbar navbar-static-top">

            <div class="navbar-top">

              <div class="container">
                  <div class="row">

                    <div class="col-sm-6 col-xs-12">

                        <ul class="list-unstyled list-inline header-contact">
                            <li> <h1>MAJLIS PERBANDARAN KUALA LUMPUR</li>
                           
                       </ul> <!-- /.header-contact  -->
                      
                    </div>

                    <div class="col-sm-6 col-xs-12 text-right">

                        <ul class="list-unstyled list-inline header-social">

                            <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-twitter"></i>  </a> </li>
                            <li>
                              <label></label>
                            <a href="#"> <i class="fa fa-google"></i>  </a> </li>
                            <li><a href="#"><i class="fa fa-youtube"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa fa-pinterest-p"></i>  </a> </li>
                       </ul> 
                      <!-- /.header-social  -->
                      
                    </div>


                </div>
              </div>

            </div>

            <div class="navbar-main">
              
              <div class="container">                </div>



        </nav>

          <!-- /. main-header --><br>
     
<form method="get" action="logoutAdmin.php">	   
     &nbsp;&nbsp;  &nbsp;&nbsp;        <input name="logout" type="submit" class="btn-default" id="button" value="Log Out">
         </form>       

<form method="get" action="registerUser.php">	   
   		 &nbsp;&nbsp;  &nbsp;&nbsp;        <input name="button" type="submit" class="btn-default" id="button" value="Register New Customer">
         </form> 
       
        <p><h1><b>&nbsp;&nbsp;List Of Customers<b></h1> 
		<form action="search.php" method="get">
 	 &nbsp;&nbsp;  &nbsp;&nbsp;   Search User:
  	 <input type="search" name="search">
  	 <input type="submit" value="submit">
		</form>
        <blockquote>
          <p>&nbsp;&nbsp;
            <?php
			
			 $query = $_GET['search']; 
			 
			$con=mysqli_connect("localhost","root","","customer_data");

			// Check connection
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }

			// SQL statement
			$result = mysqli_query($con,"SELECT * FROM customer
			  WHERE (`email` LIKE '%".$query."%') OR (`customer_name` LIKE '%".$query."%') OR (`ic_no` LIKE '%".$query."%')");
			//$ada = mysqli_num_rows($result);

			$v=1;
           
			if($row = mysqli_fetch_array($result)) 

			  {
				
				  $nama=$row['customer_name'];
  $email=$row['email'];					  
  $ic=$row['ic_no']; 
  $noPhone=$row['phone_no'];	
  $officeNo=$row['o_phoneNo'];
   $occu=$row['occupation'];
  $race=$row['race'];					  
  $religion=$row['religion']; 
  $address1=$row['address1'];	
  $address2=$row['address2'];
   $postcode=$row['postcode'];					  
  $city=$row['city']; 
  $province=$row['province'];	
  $note=$row['note'];
   $gambar=$row['name'];
   
echo " <table\n";
			  echo "<tr> <th>Name<br></th>
			  <th>Email<br><br></th>
			  <th>IC No <br><br></th>
			  <th>Menu<br><br></th></tr>\n";
			  
			  do{
				printf("<tr><td>%s </td><td>%s </td>
				<td>%s </td>
				<td>%s </td>
				</tr>\n",
					$row['customer_name'],   $row['email'],$row['ic_no'],
					   "<a class='delete' href='customerdelete.php?title=".$row['email']."'><img border='0' alt='W3Schools' src='delete.jpg' width='40' height='40'></a>
					   <a href='customeredit.php?title=".$row['email']."'><img border='0' alt='W3Schools' src='edit.jpg' width='40' height='40'></a>
					   <a href='customerview.php?title=".$row['email']."'><img border='0' alt='W3Schools' src='view.jpg' width='40' height='40'></a>");
			   $v++;
			  }while($row=mysqli_fetch_array($result));
			  
			   
			  echo "</table>\n";
			  }//tutup if

			else
			  echo "<center><b>Sorry, no records found!</b></center>";  
			  

			mysqli_close($con);
			?>
              </p>
        </blockquote>
    </div>
        
            <div align="center">
              </div> 
              <!-- /.our-causes -->
              
              
              
              
              
              
              
              
            </div>
