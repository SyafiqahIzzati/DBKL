<?php
 session_start();
 if (!isset($_SESSION['adminID'])) {
  header("Location: index.php");
 } else if(isset($_SESSION['adminID'])!="") {
  header("Location: index.php");//nanti tukar kepada signin.php bila apply kpd system
 }
 
 if (isset($_GET['logout'])) {
  unset($_SESSION['adminID']);
  session_unset();
  session_destroy();
  header("Location: index.php");
  exit;
 }