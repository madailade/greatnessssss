<?php
/**
 * Created by PhpStorm.
 * User: Madalina
 * Date: 5/21/2015
 * Time: 10:22 PM
 */

include ("./inc/header.inc.php");
include ("./inc/connect.inc.php");

echo "Hello, u retard!";
echo "<br /> Doriți să vă deconectați? <a href='deconectare.php'> Deconectare </a>";
?>

<html>
<head>
    <title>Your Home Page</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
    <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>

</div>
</body>
</html>