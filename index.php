<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Phonebook Web Application</title>
	<!-- instructor-provided CSS and Image links; do not modify -->
	<link href="css/page.css" type="text/css" rel="stylesheet">	
	<script type="text/javascript" src="validator.js"></script>	
</head>
<body>
<?php include("header.html") ?>
<?php include("common.php");		
		if (isset($_POST["search"])) showResults($_POST["criteria"]);
		else showResults("");
		;?>
<?php include("footer.html") ?>




</body>
</html>
