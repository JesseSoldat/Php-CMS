<?php 

function redirect($location) {
  header("Location:" .$location);
  exit;
}

function ifItIsMethod($method=null) {
  if($_SERVER['REQUEST_METHOD'] == strtoupper($method)) {
    return true;
  }

  return false;
}

function isLoggedIn() {
  if(isset($_SESSION['user_role'])) {
    return true;
  }

  return false;
}