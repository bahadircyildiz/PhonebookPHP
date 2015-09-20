<?php
	include("common.php");
	if (isset($_GET['add'])) {
	//Clicked button was add button
		addNumber();
	} elseif (isset($_POST['delete'])) {
	//Clicked button was delete button
		deleteNumber();
	} elseif (isset($_POST['update'])) {
	//Clicked button was update button
		updateNumber();
	}
	function addNumber(){
		$name			=	$_GET["name"];
		$surname		=	$_GET["surname"];
		$email			=	$_GET["email"];
		$phoneType		=	$_GET["phone-type"];
		$phoneNumber	=	$_GET["phonenumber"];
		$address		=	$_GET["address"];
		// Checks if user exist
		$file=fopen("phonebook.txt","r") or exit("Unable to open file!");
		while(!feof($file)){
			$line 	= fgets($file);
			$line	=	explode("\t",$line);
			//Last Index number is needed for addition
			$maxindex = 0; 
			$current = intval($line[0]);
			if($maxindex<$line[0]){
				$current = intval($line[0]);
				$maxindex =$current;
			
			}
		}
		fclose($file);
		
			$maxindex++;
			$smaxindex = (string) $maxindex; 
			// Save profile details
			$content= "\n".$smaxindex."\t".$name." ".$surname."\t".$email."\t".$phoneType."\t".$phoneNumber."\t".$address;
			$file="phonebook.txt";
			file_put_contents($file,$content,FILE_APPEND);
			taskComplete($name,$surname);
			}
	function deleteNumber(){		
		if(!empty($_POST['check'])) { //if is there any checked ones
			$file=fopen("phonebook.txt","r") or exit("Unable to open file!");
			$temp=fopen("temp.txt","r") or exit("Unable to open file!");
				while(!feof($file)){
					$line =fgets($file);
					$lineA	=	explode("\t",$line);
					if (!in_array($lineA[0],$_POST['check'])) file_put_contents("temp.txt",$line,FILE_APPEND); // deletes the checked ones from .txt
					}
			file_put_contents("phonebook.txt","");
			$data=fread($temp,filesize('temp.txt'));
			echo $data;
			file_put_contents("phonebook.txt",$data);
			file_put_contents("temp.txt","");			
			fclose($file);
			fclose($temp);
			taskComplete("our mighty","user");
			}
		else echo "You didn`t check any of them";
		}
	function updateNumber(){
				$file=fopen("phonebook.txt","r") or exit("Unable to open file!");
				while(!feof($file)){
					$line =fgets($file);
					$line =explode("\t",$line);
					if(in_array($line[0],$_POST['check'])){
						$fullname = explode(" ",$line[1]);
						$upname = $fullname[0];
						$upsurname = $fullname[1];
						$upemail = $line[2];
						$upchecked = $line[3];
						$upnumber = $line[4];
						$upaddress = $line[5];
						echo $upaddress;
						include("record.php");
					}
				} 
			fclose($file);
			}
?>