<?php
/**
 * Created by PhpStorm.
 * User: Madalina
 * Date: 5/21/2015
 * Time: 11:01 PM
 */


include ("./inc/header.inc.php");

$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = "Email or Password is invalid";
    }
    else
    {
// Define $email    and $password
        $email=$_POST['email'];
        $password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
        $con = mysqli_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
        $email = stripslashes($email);
        $password = stripslashes($password);
        $email = mysqli_real_escape_string($email, $con);
        $password = mysqli_real_escape_string($password, $con);
// Selecting Database
        $db = mysqli_select_db("esn", $con);
// SQL query to fetch information of registerd users and finds user match.
        $query = mysqli_query("select * from utilizatori where parola='$password' AND email='$email'", $con);
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
            $_SESSION['login_email']=$email; // Initializing Session
            header("location: home.php");
            // Redirecting To Other Page
        } else {
            $error = "Email or Password is invalid";
        }
        mysqli_close($con); // Closing Connection
    }
}

if(isset($_SESSION['login_email'])){
    header("location: home.php");

}

?>
<div class="container">
    <div class="jumbotron">;
    <div class = "container">

    <div class="wrapper">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 ">
        <form action="index.php" method="POST" name="Login_Form" class="form-signin">
            <h3 class="form-signin-heading">Bine ai venit pe <img src="img/Picture1.png" width="81" height="43">! Conectează-te! </h3>
            <hr class="colorgraph"><br>

            <div class="form-group">
            <input type="text"
                   class="form-control input-sm"
                   name="login_email"
                   id="login_email"
                   placeholder="Email"
                   required=""
                   autofocus="" />
            </div>

            <div class="form-group">
            <input type="password"
                   class="form-control input-sm"
                   name="login_password"
                   id="login_password"
                   placeholder="Parola"
                   required=""/>
                </div>

            <input type="submit" name="submit" value="Conectare" class="btn btn-primary btn-block btn-lg"/>
        </form>

    </div>
    </div>
    </div>
    </div>
