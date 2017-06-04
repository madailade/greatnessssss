<?php
/**
 * Created by PhpStorm.
 * User: Madalina
 * Date: 5/19/2015
 * Time: 1:43 AM
 */

$con = mysqli_connect("localhost", "root","") or die ("Conectare la server SQL esuata!");
mysqli_select_db($con, "esn") or die("Nu s-a putut selecta baza de date!");

?>


