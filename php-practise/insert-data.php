<!DOCTYPE HTML>
<html>
<head>
<style>
#success-message{
	backgroud: #DEF1D8;
	color: green;
	padding: 10px;
	margin: 10px;
	display: none;
	position: absolute;
	right: 15px;
	top: 15px;
}
#error-message{
	backgroud: #EFDCDD;
	color: red;
	padding: 10px;
	margin: 10px;
	display: none;
	position: absolute;
	right: 15px;
	top: 15px;
}

</style>
</head>
<body>
<table id="main" border="0" cellspacing="0">
<tr>
<td id="header">
<h1>ADD RECCORDS WITH PHP & AJAX</h1>
</td>
</tr>
<tr>
<td id="table-form">
<form id="addForm">
First Name : <input type="text" id="fname">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Last Name : <input type="text" id="lname">
<input type="submit" id="save-button" value="save">
</form>
</td>
</tr>
<tr>
<td id="table-data">

</td>
</tr>
</table>
<div id="error-message"></div>
<div id="success-message"></div>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	function loadTable(){
			$.ajax({
			url:"ajax-load.php",
			type: "POST",
			success: function(data){
				$("#table-data").html(data);
			}
		});
	}
	loadTable();

$("#save-button").on("click", function(e){
	e.preventDefault();
	var fname = $("#fname").val();
	var lname = $("#lname").val();
	if(fname == "" || lname ==""){

		
	}else{
			$.ajax({
		url: "ajax-insert.php",
		type:  "POST",
		data: {first_name:fname, last_name:lname},
		success: function(data){
			if(data == 1){ 
			loadTable();
			$("#addForm").trigger("reset");
			$("#success-message").html("data inserted successfully.").slideDown();
		    $("#error-message").slideUp();
			}else{
		$("#error-message").html("Can't Save Record.").slideDown();
		$("#success-message").slideUp();
			}
		}
	});
	}

})
});
</script>
</body>
</html>