<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>PHONEBOOK - RECORD</title>
	<link href="css/page.css" type="text/css" rel="stylesheet">	
	<script type="text/javascript" src="validator.js"></script>	
</head>
<body>
<?php include("header.html");?>
 <fieldset>
	<legend>Record Information</legend>
		<form id="form" action="action.php" method="<?php if (isset($_POST['update'])) echo "post"; else echo "get"; ?> " onsubmit=" return validateForm()">
			Name:<br/>		<input type="text" name="name" maxlength="16" value="<?php if (isset($_POST['update'])) echo $upname; ?>" /><br/>
			Surname:<br/>		<input type="text" name="surname" maxlength="16" value="<?php if (isset($_POST['update'])) echo $upsurname; ?>" /><br/>
			E-mail:<br/>		<input type="text" name="email" maxlength="32" onsubmit="checkMail(this) value="<?php if (isset($_POST['update'])) echo $upemail; ?>""/><br/>
			<fieldset>
			<legend>Phone Type:</legend> 		
					
					<input type="radio" value="home" name="phone-type" checked="checked"/><label>Home</label>
					<input type="radio" value="work" name="phone-type" /><label>Work</label>
					<input type="radio" value="cell" name="phone-type" /><label>Cell</label>
			</fieldset>
			Phone Number:<br/>		<input type="text" name="phonenumber" maxlength="16" onsubmit="checkNumber(this)" value="<?php if (isset($_POST['update'])) echo $upnumber; ?>" /><br/>			
			Address:<br/>	<textarea name="address" rows="4" cols="50" value="<?php if (isset($_POST['update'])) echo $upaddress; ?>"></textarea><br/>
			
			<input type="submit" name="add" value="<?php if(isset($_POST['update'])) echo "UPDATE"; else echo "ADD"; ?>"/>
			</form>
	</fieldset>

<?php include("footer.html"); ?>		