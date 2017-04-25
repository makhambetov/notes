<?php
$edit = true;

include "header.php";
if(!isset($_SESSION['authorized']))
	{
		header("Location: ./");
	}
$u_id = $_SESSION["user_id"];
include "lib/db_connect.php";
$res = mysqli_query($link, "SELECT * FROM notes_content WHERE u_id = '$u_id' && n_deleted = false");
$num_of_notes = mysqli_num_rows($res);
$elementIndex	 = 0;
while ($row =  mysqli_fetch_array($res)) 
{
	?>
	<div class="row note-wrapper">
    	<div class="note-content col-md-11 col-sm-11 col-xs-11" onclick="openNote(<?=$row['n_id']?>)">
        	<div class="note-header"><h4><?=$row['n_title']?></h4></div>
        	<div class="note-preview">
            <p><?=$row['n_content']?></p>
        	</div>
    	</div>
    	<div class="note-btns col-md-1 col-sm-1 col-xs-1">
        	<a class="delete_note" onclick="removeNote(<?=$row['n_id']?>, <?=$elementIndex?>)"><span class="glyphicon glyphicon-remove"></span></a>
    	</div>
	</div>
	<?php
	$elementIndex++;
}

?>
<div >
    
</div>
<?php

include "footer.php";
/*onclick="openNote(<?=$row['n_id']?>)"*/
?>

