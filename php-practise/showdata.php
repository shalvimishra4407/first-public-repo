<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<table id="main" border="0" cellspacing="0">
<tr>
<td id="header">
<h1> PHP WITH AJAX </h1>
</td>
</tr>
<td id="table-load">
<input type="button" id="load-button" value="load-data">
</td>
</tr>
<td id="table-data">
<tr>
<td id="table-data">

</td>
</tr>
</table>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#load-button").on("click", function(e){
		$.ajax({
			url:"ajax-load.php",
			type: "POST",
			success: function(data){
				$("#table-data").html(data);
			}
		});
	});
});
</script>
</body>
</html>