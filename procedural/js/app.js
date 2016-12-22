function hide() {
	setTimeout(function(){ 
    document.getElementById("hide").style.display="none";
}, 100);		
}

function confirmDelete(){
if(confirm("Are you sure you want to delete?")){
	return TRUE;
}else {
	return FALSE;
}
}