<?php 
include "lib/db_connect.php";
$n_id = $_GET["id"];
mysqli_query($link, "UPDATE notes_content SET n_deleted = true WHERE n_id = '$n_id'");

echo $n_id;
 ?>