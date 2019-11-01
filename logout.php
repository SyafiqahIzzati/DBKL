<?php
 session_start();
 if (!isset($_SESSION['customer'])) {
  header("Location: index.php");
 } else if(isset($_SESSION['customer'])!="") {
  header("Location: index.php");//nanti tukar kepada signin.php bila apply kpd system
 }
 
 if (isset($_GET['button'])) {
  unset($_SESSION['customer']);
  session_unset();
  session_destroy();
  header("Location:index.php");
  exit;
 }