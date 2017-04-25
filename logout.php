<?php 
session_start();
session_destroy();
//nset($_SESSION['authorized']);
header("Location: ./");
 ?>