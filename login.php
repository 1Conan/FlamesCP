<?php
session_start();

ob_start();

if (empty($_POST['username'])) {
    header('Location: index.php?error=1');
}

$username = $_POST['username'];
$password = $_POST['password'];
 
include_once 'config.php';
$conn = mysql_connect('localhost', 'root', $mysqlpass);
mysql_select_db('users', $conn);
 
$username = mysql_real_escape_string($username);
$query = "SELECT *
        FROM login
        WHERE username = '$username' and password = '$password';";
 
$result = mysql_query($query);

if(mysql_num_rows($result) == 0) // User not found. So, redirect to login_form again.
{
    header('Location: index.php?error=1');
}
 
$userData = mysql_fetch_array($result, MYSQL_ASSOC);

include('finduser.php');

if(mysql_num_rows($result) == 1) {

        
	session_regenerate_id();
	$_SESSION['logged_in']='true';
        $_SESSION['logged_in_as']=$username;
        $_SESSION['rank']=$status;
	session_write_close();
        header('Location: dashboard.php');
}
?>
