<?php
include("connect.inc.php");
session_start();


?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Fishbone - Rețea Socială de Întreprindere</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">

</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Fishbone</a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Acasă</a></li>
                <li><a href="#">Despre</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li><a href="conectare.php"><span class="glyphicon glyphicon-log-in"></span> Conectare </a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="deconectare.php">Deconectare</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Ajutor</a></li>
                        <li class="divider"></li>
                    </ul>
                </li>

            </ul>

            <div class="col-sm-3 col-md-4 col-xs-3 pull-left">
                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" size="100" placeholder="Căutare" name="q">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</nav>