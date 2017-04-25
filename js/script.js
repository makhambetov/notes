


var del = $(".delete_note");
del.hide();

var ajax = new XMLHttpRequest();


function showDel(){
	del.fadeToggle();
}

function removeNote(noteId, elementIndex){
	ajax.open("GET", "remove_note.php?id="+noteId, false)
	ajax.send(null);
	$(".note-wrapper:eq("+elementIndex+")").slideUp("fast");
}

function openNote(noteId){
	/*ajax.open("GET", "note.php?id="+noteId, false)
	ajax.send(null);*/

	window.location = "note.php?id="+noteId;
}