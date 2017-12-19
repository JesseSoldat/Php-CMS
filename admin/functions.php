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

function checkIfUserIsLoggedInAndRedirect($redirectLocation=null) {
  if(isLoggedIn()) {
    redirect($redirectLocation);
  }
}

function escape($string) {
  global $connection;

  return mysqli_real_escape_string($connection, trim($string));
}

function confirmQuery($result) {
  global $connection;

  if(!$result) {
    die("QUERY FAILED ." . mysqli_error($connection));
  }
}

function username_exists($user_name) {
  global $connection;

  $query = "SELECT user_name FROM users WHERE user_name = '$user_name' ";
  $result = mysqli_query($connection, $query);

  confirmQuery($result);

  if(mysqli_num_rows($result) > 0) {
    return true;
  } else {
    return false;
  }
}

function email_exists($user_email) {
  global $connection;

  $query = "SELECT user_email FROM users WHERE user_email = '$user_email' ";
  $result = mysqli_query($connection, $query);
  confirmQuery($result);
  
  if(mysqli_num_rows($result) > 0) {
    return true;
  } else {
    return false;
  }
}

function login_user($user_name, $user_password) {
  global $connection;

  $user_name = trim($user_name);
  $user_password = trim($user_password);
  $user_name = escape($user_name);
  $user_password = escape($user_password);

  $query = "SELECT * FROM users WHERE user_name = '${user_name}' ";
  $select_user_query = mysqli_query($connection, $query);
  confirmQuery($select_user_query);

  while($row = mysqli_fetch_array($select_user_query)) {
    $db_user_id = $row['user_id'];
    $db_user_name = $row['user_name'];
    $db_user_password = $row['user_password'];
    $db_user_firstname = $row['user_firstname'];
    $db_user_lastname = $row['user_lastname'];
    $db_user_role = $row['user_role'];

    if(true) {
      $_SESSION['user_name'] = $db_user_name;
      $_SESSION['firstname'] = $db_user_firstname;
      $_SESSION['lastname'] = $db_user_lastname;
      $_SESSION['user_role'] = $db_user_role;

      redirect("/my_cms/admin");

    } else {
      return false;
    }
  }

  return true;

}

function register_user($user_name, $user_email, $user_password) {
  global $connection;

  $user_name = trim($user_name);
  $user_email = trim($user_email);
  $user_password = trim($user_password);

  $user_name = escape($user_name);
  $user_email = escape($user_email);  
  $user_password = escape($user_password);

  $query = "INSERT INTO users (user_name, user_email, user_password, user_role) ";
  $query .= "VALUES('{$user_name}', '{$user_email}', '{$user_password}', 'subscriber' )";

  $register_user_query = mysqli_query($connection, $query);

  confirmQuery($register_user_query);
}