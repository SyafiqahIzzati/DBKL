<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Register| DBKL</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>

<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
    $("a.upload").click(function(e){
        if(!confirm('Are you sure to change Picture?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});
</script>
    </head>
    <body>
    <!-- NAVBAR
    ================================================== -->
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
                            <li><h1>MAJLIS PERBANDARAN KUALA LUMPUR</h1> </li>
                            
                       </ul> <!-- /.header-contact  -->
                      
                    </div>

                    <div class="col-sm-6 col-xs-12 text-right">

                        <ul class="list-unstyled list-inline header-social">

                            <li> <a href="#" target="_blank"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa-twitter"></i>  </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa-google"></i>  </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa-youtube"></i>  </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa fa-pinterest-p"></i>  </a> </li>

                       </ul> <!-- /.header-social  -->
                      
                    </div>


                  </div>
              </div>

            </div>

            <div class="navbar-main">
              
              <div class="container">


                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    
                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->




			
			<h1 class="page-title"><center>PLEASE REGISTER</center> 
			</h1>
		
			</p>
			
		</div>

	</div>

	<div class="main-container fadeIn animated">
	
	
	

		<div class="container">

			<div class="row">

				<div class="col-md-4 col-md-offset-1 col-contact">
	<?php
	if (isset($_GET['title'])){
	$id = $_GET['title'];

}	


  $getselect=mysql_query("SELECT * FROM customer WHERE email='$id'");
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
				

				

					<form action="customeredit2.php" method="post" class="contact-form ajax-form" enctype="multipart/form-data" >
						  <div class="form-group">

						Full Name*:
	                            <input type="text" name="Cname" class="form-control" placeholder="Full Name*"    value="<?php echo $nama; ?>" required>
	                       </div>				



							<div class="form-group"> 
							Email*:
	                            <input type="email" name="email" class="form-control" placeholder="Email*"  value="<?php echo $email; ?>" required readonly>
	                       </div>
						

							
										  <div class="form-group">

			Picture:
			<?php echo '<img width="140" height="140"  src="data:image/jpeg;base64,'.base64_encode( $ques['name'] ).'"/>';?>
  <input type="file" name="file" value="" />
	                       </div>	
								  <div class="form-group">
								  IC No.:
						
	                            <input type="text" name="icNo" class="form-control" placeholder="IC No. Example 123456xxXXXX"  value="<?php echo $ic; ?>"required>
	                       </div>		
									
									<div class="form-group">
Phone No:
						
	                            <input type="text" name="phoneNo" class="form-control" placeholder="Phone Number Example 0123456789"
 value="<?php echo $noPhone; ?>" required>
	                       </div>		
									
									<div class="form-group">

						Office Phone No: 
	                            <input type="text" name="offphoneNo" class="form-control" placeholder="Office Phone Number Example 0123456789"
								 value="<?php echo $officeNo; ?>">
	                       </div>	
	<div class="form-group">

						Occupation:
	                            <input type="text" name="occupation" class="form-control" placeholder="State Your Occupation"
								 value="<?php echo $occu; ?>">
	                       </div>								   
							
							<div class="form-group">Race:
	                            <input type="text" name="race" class="form-control" placeholder="State your race"
								 value="<?php echo $race; ?>">
	                       </div>		
							
								<div class="form-group">Religion:
	                            <input type="text" name="religion" class="form-control" placeholder="State your religion"
								 value="<?php echo $religion; ?>">
	                       </div>		
							
									<div class="form-group">Address1:
	                            <input type="text" name="add1" class="form-control" placeholder="Address"
								 value="<?php echo $address1; ?>">
	                       </div>	
										<div class="form-group">Address2:
	                            <input type="text" name="add2" class="form-control" placeholder="Address2"
								 value="<?php echo $address2; ?>">
	                       </div>	
											<div class="form-group">Poscode:
	                            <input type="text" name="poscode" class="form-control" placeholder="Poscode"
								 value="<?php echo $postcode; ?>">
	                       </div>	
														<div class="form-group">City:
	                            <input type="text" name="city" class="form-control" placeholder="City"
								 value="<?php echo $city; ?>">
	                       </div>	
							
							
															<div class="form-group">Province:
	                            <input type="text" name="province" class="form-control" placeholder="Province"
								 value="<?php echo $province; ?>">
	                       </div>	
							
								
									
						   <div>Note:
							      <textarea name="note" class="form-control" > <?php echo $note; ?></textarea>
							</div>
							
							
							
							
					

                       
                        <div class="form-group alerts">
                        
                        	<div class="alert alert-success" role="alert">
							  
							</div>

							<div class="alert alert-danger" role="alert">
							  
							</div>
							<?php } ?>
                        </div>	

                         <div class="form-group">
                            <button type="submit" class="btn btn-primary pull-right">Update Now</button>
                        </div>

                        <div class="clearfix"></div>

					</form>
					<form method="get" action="adminIndex.php">	
					  <button type="submit" class="btn btn-primary pull-right">Back/Cancel</button>
							</form>		

				</div>

				
				 <br>
				 <br>
				 <br>
					
				</div>

			</div> <!-- /.row -->


		</div>
		


	</div>

	

  <footer class="main-footer">

        <div class="footer-top">
            
        </div>


        <div class="footer-main">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-4">

                        <div class="footer-col">

                 

                            <div class="footer-content">
                                <p>
                                    <strong>Majlis Perbandaran Kuala Lumpur</strong> 
Hak Cipta Terpelihara © 2018 Dewan Bandaraya Kuala Lumpur
Paparan Terbaik Menggunakan Internet Explorer 9.0 / Mozilla Firefox 12.0 / Google Chrome 13.0 Ke Atas Dengan Resolusi 1024 x 768

                                </p> 

                                <p>
                                   
                                </p>

                            </div>
                            
                        </div>

                    </div>

                    


                    <div class="col-md-4">

                        <div class="footer-col">


                            <div class="footer-content">

                                <div class="footer-form" >
                                    
                                

                                </div>
                            </div>
                            
                        </div>

                    </div>
                    <div class="clearfix"></div>



                </div>
                
                
            </div>

            
        </div>

        <div class="footer-bottom">

            <div class="container text-right">
                © 2018 NURUL SYAFIQAH IZZATI. All Rights Reserved.
            </div>
        </div>
        
    </footer>




       
        
       
    </body>
</html>

