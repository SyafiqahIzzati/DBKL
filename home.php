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
    </head>

    <body>

<?php 
session_start();
if(!isset($_SESSION['customer']))
echo ("<script>alert('Please log in!');document.location.href='index.php';</script>");

$a = $_SESSION['customer'];
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
              
              <div class="container">

     <?php 




  $getselect=mysql_query("SELECT * FROM customer WHERE email='$a'");
  while($ques=mysql_fetch_array($getselect))
  {
  $nama=$ques['customer_name'];
  $email=$ques['email'];					  
  $ic=$ques['ic_no']; 
  $noPhone=$ques['phone_no'];	
  $officeNo=$ques['o_phoneNo'];
   $occu=$ques['occupation'];
  $race=$ques['race'];					  
  $religion=$ques['religion']; 
  $address1=$ques['address1'];	
  $address2=$ques['address2'];
   $postcode=$ques['postcode'];					  
  $city=$ques['city']; 
  $province=$ques['province'];	
  $note=$ques['note'];
   $gambar=$ques['name'];
?>          
                  
                 
                  
                </div>



        </nav>

          <!-- /. main-header --><br>
       &nbsp;&nbsp; 
<form method="get" action="logout.php">	   
          <input name="button" type="submit" class="btn-default" id="button" value="Log Out">
         </form> <br>
       
        <p><h1><b>&nbsp;&nbsp;Personal information:<b></h1> 
			<p><?php echo '&nbsp;&nbsp;&nbsp;<img width="140" height="140"  src="data:image/jpeg;base64,'.base64_encode( $ques['name'] ).'"/>';?></p>
			<p>&nbsp;&nbsp;&nbsp;Name:&nbsp;<?php echo $nama; ?></p>
			<p>&nbsp;&nbsp;&nbsp;Email:&nbsp;<?php echo $email; ?></p>
			<p>&nbsp;&nbsp;&nbsp;ICNo:&nbsp;<?php echo $ic; ?></p>
			<p>&nbsp;&nbsp;&nbsp;Phone Number:&nbsp;<?php echo $noPhone; ?></p>
			<p>&nbsp;&nbsp;&nbsp;Office Phone Number:&nbsp;<?php echo $officeNo; ?></p>
			<p>&nbsp;&nbsp;&nbsp;Occupation:&nbsp;<?php echo $occu; ?></p>
			<p>&nbsp;&nbsp;&nbsp;Race:&nbsp;<?php echo $race; ?></p>
			<p>&nbsp;&nbsp;&nbsp;Religion:&nbsp;<?php echo $religion; ?></p>
			<p>&nbsp;&nbsp;&nbsp;Address 1:&nbsp;<?php echo $address1; ?></p>
			<p>&nbsp;&nbsp;&nbsp;Address 2:&nbsp;<?php echo $address2; ?></p>
			<p>&nbsp;&nbsp;&nbsp;Poscode:&nbsp;<?php echo $postcode; ?></p>
			<p>&nbsp;&nbsp;&nbsp;City:&nbsp;<?php echo $city; ?></p>
			<p>&nbsp;&nbsp;&nbsp;Province:&nbsp;<?php echo $province; ?></p>
			<p>&nbsp;&nbsp;&nbsp;Note:&nbsp;<?php echo $note; ?></p>
			
	<?php  } ?>			<br><br>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			

        </div>
        
    </div> <!-- /.our-causes -->

    




   

