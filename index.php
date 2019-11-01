<?php 
 ob_start();
 session_start();

?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8" /> 
    <title>
      Login| DBKL
    </title>
	<style type="text/css">
<!--
a { text-decoration : none; color : #c2c2a3; }
-->
</style>
<meta charset="utf-8">    
<link rel="stylesheet" type="text/css" href="style.css" />
	 

</head>
<body>
 <header class="main-header">
        
    
        <nav class="navbar navbar-static-top">

            <div class="navbar-top">

              <div class="container">
                  <div class="row">

                    <div class="col-sm-6 col-xs-12">

                        <ul class="list-unstyled list-inline header-contact">
                        <center>    <li></li>
                          <li></li>
                          <li>
                            <h1>WELCOME TO DBKL</h1>
                          </li>
                        </center>
                            
                       </ul> <!-- /.header-contact  -->
                      
                    </div>

                    <div class="col-sm-6 col-xs-12 text-right">

                       
                      
                    </div>


                  </div>
              </div>

            </div>
<form action="validateUser.php" method="post">
  <h1>Customer Log in</h1>
  <div class="inset">
  <p>
    <label for="email">EMAIL ADDRESS</label>
    <input type="email" name="email" id="email">
  </p>
  <p>
    <label for="password">PASSWORD</label>
    <input type="password" name="password" id="password">
  </p>
 
  </div>
  <p class="p-container">
 Not register yet ?
    <a href="register.php" class="to_register"><u>Register</u></a>
   <input type="submit" name="go" id="go" value="Log in"></p>
</form>
<form  action="validateAdmin.php" method="post">
  <h1>Admin Log in</h1>
  <div class="inset">
  <p>
    <label for="email">ADMIN ID</label>
    <input type="text" name="adminID" id="email">
  </p>
  <p>
    <label for="password">PASSWORD</label>
    <input type="password" name="password" id="password">
  </p>
 
  </div>
  <p class="p-container">
 <input type="submit" name="go" id="go" value="Log in">
  </p>
</form>

</body>
</html>
