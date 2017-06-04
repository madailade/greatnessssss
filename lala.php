<?php
/**
 * Created by PhpStorm.
 * User: Madalina
 * Date: 5/21/2015
 * Time: 11:01 PM
 */


include ("./inc/header.inc.php");
include ("./inc/connect.inc.php");


if(isset($_POST['email_login']) != " " && isset($_POST['parola_login']) !=" ")

{
    $parola = $_POST["parola_login"];
    $email = $_POST["email_login"];


    $sql = mysqli_query($con, "SELECT id FROM utilizatori WHERE 'email'='" . $email . "' AND 'parola'='" . $parola . "'  LIMIT 1");

    //verifiacm existenta
    $nrUtilizatori = mysqli_num_rows($sql);
    if ($nrUtilizatori < 1) {
        echo "Date incorecte!";
    } else {
        $_SESSION['email'] = $email;
        $_SESSION['parola'] = $parola;
        echo "S-a facut cacatul";
        header("location: home.php");
        exit();
    }
}
else {
    echo "Email sau parola incorect(a)!";
    exit();
}


