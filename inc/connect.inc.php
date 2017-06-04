<?php
/**
 * Created by PhpStorm.
 * User: Madalina
 * Date: 5/19/2015
 * Time: 1:43 AM
 */
//$con = mysqli_connect("localhost", "root","") or die ("Conectare la server SQL esuata!");

//mysqli_select_db($con,"esn") or die("Nu s-a putut selecta baza de date!");

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "");
// Selecting Database
$db = mysqli_select_db("company", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query("select username from login where username='$user_check'", $connection);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
    mysqli_close($connection); // Closing Connection
    header('Location: index.php'); // Redirecting To Home Page
}
?>

?>