<?php
$edit = false;
include "header.php";
if(isset($_SESSION['authorized']))
	header("Location: list.php");

include "start_content.php";

?>