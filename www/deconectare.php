<?php
/**
 * Created by PhpStorm.
 * User: Madalina
 * Date: 5/21/2015
 * Time: 10:28 PM
 */

session_start();
session_destroy();
header('location: index.php');
?>