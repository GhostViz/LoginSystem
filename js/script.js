$("#regsub").click( function() {
 
	if( $("#user").val() == "" || $("#pass").val() == "" )
	  $("#error").html("Please enter username and password.\n");
	else
	  $.post( $("#myForm").attr("action"),
	         $("#myForm :input").serializeArray(),
			 function(info) {
 
			   $("#error").empty();
			   $("#error").html(info);
				clear();
			 });
 
});

$("#loginsub").click( function() {
 
  if( $("#user").val() == "" || $("#pass").val() == "" )
    $("#error").html("Please enter username and password.\n");
  else
    $.post( $("#myForm").attr("action"),
	        $("#myForm :input").serializeArray(),
			function(data) {
			  $("#error").html(data);
			});
});

function clear() {
 
	$("#myForm :input").each( function() {
	      $(this).val("");
	});
 
}