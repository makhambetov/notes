<?php
session_start();
include "lib/db_connect.php";
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/signin.css" rel="stylesheet">
    <title>Notes</title>

    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</head>
<body>

<div class="container">
    <div class="row header">
            <div class="col-md-4 col-sm-4 col-xs-5">
                <div class="logo">
                    <a href="./"><img src="img/logo.png" class="img-responsive"></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-5">
                <div class="current_user">
    <?php 
        if(isset($_SESSION['authorized'])) 
            {
                //echo "Welcome ";
                ?><a class="user_link" href="user.php?id=<?=$_SESSION['user_id']?>"><?=ucfirst($_SESSION['username'])?></a> <span class="vert_del">|</span> <a class="user_link" href="logout.php">Log out</a>
                <?php     
            }
    ?>
</div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-2">
                <div class="menu" onclick="showDel()">
                    <?php if($edit) 
                    echo "<a href=\"#\" class=\"glyphicon glyphicon-edit\"></a>";?>
                </div>
            </div>
    </div>
    <div class="row content">
        <div class="center-block">
            <div class="col-md-12 col-xs-12">