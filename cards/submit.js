$(document).ready(function(){
$("#submit").click(function(){
var name = $("#name").val();
var faction = $("#faction").val();
var game = 0; //default warmachine
if(faction > 7) {
	game = 1; //else set to hordes
}
var size = $('[name=size]:checked').val();

// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1='+ name + '&faction1=' + faction + '&game1='+ game + '&size1=' + size;
if(name==''||faction=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "ajaxsubmit.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
}
});
}
return false;
});
});