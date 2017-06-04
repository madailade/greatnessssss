<?php
/**
 * Created by PhpStorm.
 * User: Madalina
 * Date: 5/21/2015
 * Time: 11:01 PM
 */


include ("./inc/header.inc.php");

if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    }
    else
    {
// Define $username and $password
        $username=$_POST['username'];
        $password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
        $connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);
// Selecting Database
        $db = mysql_select_db("company", $connection);
// SQL query to fetch information of registerd users and finds user match.
        $query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);
        $rows = mysql_num_rows($query);
        if ($rows == 1) {
            $_SESSION['login_user']=$username; // Initializing Session
            header("location: profile.php"); // Redirecting To Other Page
        } else {
            $error = "Username or Password is invalid";
        }
        mysql_close($connection); // Closing Connection
    }
}




?>
<div class="container">
    <div class="jumbotron">;
    <div class = "container">

    <div class="wrapper">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 ">
        <form action="conectare.php" method="POST" name="Login_Form" class="form-signin">
            <h3 class="form-signin-heading">Bine ai venit pe <img src="img/Picture1.png" width="81" height="43">! Conectează-te! </h3>
            <hr class="colorgraph"><br>

            <div class="form-group">
            <input type="email"
                   class="form-control input-sm"
                   name="usename"
                   id="name"
                   placeholder="Email"
                   required=""
                   autofocus="" />
            </div>

            <div class="form-group">
            <input type="password"
                   class="form-control input-sm"
                   name="password"
                   id="password"
                   placeholder="Parola"
                   required=""/>
                </div>

            <input type="submit" name="submit" value="Conectare" class="btn btn-primary btn-block btn-lg"/>
            <span><?php echo $error; ?></span>
        </form>

    </div>
    </div>
    </div>
    </div>
