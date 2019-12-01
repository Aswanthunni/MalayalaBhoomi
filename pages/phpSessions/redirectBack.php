<?php 
session_start();
if(!isset($_SESSION['userId']) && empty($_SESSION['userId'])) {
  header('Location: login.php');
  exit;
}
?>