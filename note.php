<?php 
include "lib/db_connect.php";
session_start();
$res = mysqli_query($link, "SELECT * FROM notes_content WHERE n_id='$_GET[id]'");
$row = mysqli_fetch_array($res);
echo "<br><br><br>";
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
    <div>
        <div class="container">
            <div class="row note_header">
                <div class="col-md-6 col-sm-6 col-xs-6"><a href="list.php">&lt Notes</a></div>
                <div class="col-md-6 col-sm-6 col-xs-6"></div>
            </div>
            <div class="row content">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="sticker">
                        <?=$row["n_content"]?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
include "footer.php"
     ?>
