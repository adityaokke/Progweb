<script src='code.jquery.com/jquery-1.9.1.js'></script>; 
<div id='add_cart'></div> 
<form id='form' action='#' method='post'> 
<select name='id' class='select'> ... </select> 
<input type='submit' class='add_cart' value='".$lang['add_cart']."'> 
</form> 
<script> 
$(document).ready(function(){ 
	$("form").submit(function(){ 
		alert("Submitted"); 
		$('#add_cart').load('/add_cart.php?action=add&id=".$item[$i]['id']."'); 
	});
}); 
</script>