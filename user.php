<?php 
$edit = false;
include "header.php";
if(isset($_GET["id"]) && isset($_SESSION['user_id']))
{
		
}
else{
	?>
	<script>
		window.location = "./";
	</script>
	<?php
}

?>