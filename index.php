<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Local google search url generator</title>
	<link rel="stylesheet" href="css/reset.css" type="text/css">
	<link rel="stylesheet" href="css/main.css" type="text/css">
</head>
<body>

<div class="body-container">
<form>
	<div class="formfield query">
		<input type="text" id="query" placeholder="Type in google Query" />
	</div>
	<div class="formfield location">
		<input id="geocomplete" type="text" placeholder="Type in an address" size="90" />
		<input id="find" type="button" value="find" />

	</div>
</form>


<pre id="logger">Log:</pre>

</div>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/geocomplete.js"></script>
<script>
	$.log = function(message){
		var $logger = $("#logger");
		$logger.html($logger.html() + "\n * " + message );
	}
	$(function(){

		$("#geocomplete").geocomplete()
			.bind("geocode:result", function(event, result){
				$.log("Result: <a target='_blank' href='https://www.google.com/search?q="+ encodeURIComponent($('#query').val()).replace(/%20/g, '+') + "&near=" + encodeURIComponent(result.formatted_address).replace(/%20/g, '+') + "'>"+ "https://www.google.com/search?q="+ encodeURIComponent($('#query').val()).replace(/%20/g, '+') + "&near=" + encodeURIComponent(result.formatted_address).replace(/%20/g, '+') +"</a>");
			})
			.bind("geocode:error", function(event, status){
				$.log("ERROR: " + status);
			})
			.bind("geocode:multiple", function(event, results){
				$.log("Multiple: " + results.length + " results found");
			});

		$("#find").click(function(){
			$("#geocomplete").trigger("geocode");
		});


		$("#examples a").click(function(){
			$("#geocomplete").val($(this).text()).trigger("geocode");
			return false;
		});

	});

</script>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: nopassword
 * Date: 1/22/16
 * Time: 11:03
 */