<?php 
	function showResults($keyword){
		$file = fopen("phonebook.txt", "r") or exit("Can't connect .txt");
		//Searches till the end of file
		echo '
		<form action="action.php" method="post">
		<table>
		<caption><strong> RECORDS ON THE PHONEBOOK </strong></caption>
				<tr>
					<th></th>
					<th>Index</th>
					<th>Name</th>
					<th>E-mail</th>
					<th>Type</th>
					<th>Phone Number</th>
					<th>Address</th>
				</tr>
			';	
		
		while(!feof($file)){
			//Get the line
			$line	=	fgets($file);
		
			//if line includes the keyword
			if($keyword!="" && stristr($line,$keyword) != false){
			
				//Explode the person's info to an array
				$line	=	explode("\t",$line);
				/*	So it means;
					$line[0] will be the index number
					$line[1] will be the name and surname
					$line[2] will be the e-mail address
					$line[3] will be the phone type
					$line[4] will be the phone number
					$line[5] will be the address					
				*/	
				//most specific thing for every account is their row numbers. That`s why it will be used while defining checkboxes.
				echo '<tr>
						<td><input type="checkbox" name="check[]" value="'.$line[0].'"></td> 
						<td>'.$line[0].'</td>
						<td>'.$line[1].'</td>
						<td>'.$line[2].'</td>
						<td>'.$line[3].'</td>
						<td>'.$line[4].'</td>
						<td>'.$line[5].'</td>
					</tr>';
				}
			else if($keyword==""){
			
				//Explode the person's info to an array
				$line	=	explode("\t",$line);
				echo '<tr>
						<td><input type="checkbox" name="check[]" value="'.$line[0].'"></td> 
						<td>'.$line[0].'</td>
						<td>'.$line[1].'</td>
						<td>'.$line[2].'</td>
						<td>'.$line[3].'</td>
						<td>'.$line[4].'</td>
						<td>'.$line[5].'</td>
					</tr>';
				};
			};
	echo '</table>
		<center><input type="submit" name="update" value="UPDATE" onsubmit="checkBoxes()" />
				<input type="submit" name="delete" value="DELETE" onsubmit="checkBoxes()"/>
		</center>
		</form>';
		fclose($file);	
	};
	function taskComplete($name,$surname){
		echo '
		<!DOCTYPE html>
		<html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			<title>Phonebook Web Application</title>
			<link href="css/page.css" type="text/css" rel="stylesheet">		
		</head>
		<body>
		';
		
		include("header.html");
		echo '
			<h3>Given task has been completed.</h3>
			<p>You can go on next tasks, '.$name.$surname.' ! </p>
		';
		include("footer.html");	
		
		echo '
		</body>
		</html>
		';

	}
?>