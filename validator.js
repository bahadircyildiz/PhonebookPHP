function validateForm(){

	var name=document.forms["form"]["name"].value;
	var surname=document.forms["form"]["surname"].value;
	var email=document.forms["form"]["email"].value;
	var phonenumber=document.forms["form"]["phonenumber"].value;
	var address=document.forms["form"]["address"].value;
	if (name==""){
		alert("Name must be filled out");
		return false;
		}
	else if (surname==""){
		alert("Surname must be filled out");
		return false;
		}
	else if (email==""){
		alert("Email must be filled out");
		return false;
		}
	else if (phonenumber==""){
		alert("Phonenumber must be filled out");
		return false;
		}
	else if (address==""){
		alert("Address must be filled out");
		return false;
		}
	checkName(name);
	checkSurname(surname);
	checkMail(email);
	checknumber(phonenumber);
	}
	function checkMail(email){

			var re = /\S+@\S+\.\S+/;
			if(re.test(email)==false){
			document.write("Wrong e-mail address format. Try again.");
			return false;
			}
			else return true;
	}
	function checkNumber(number){
		var phoneno1 = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;  
		var phoneno2 = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
		if((number.value.match(phoneno1) || number.value.match(phoneno2))  
			{  
		  return true;  
			}  
		  else  
			{  
			document.write("Wrong phone format. Try again");  
			return false;  
			}  
	}
	function checkName(name){
		var re= /^[A-z ]+$/;
		if( re.test(email)==false){
					document.write("Wrong name format. Try again.");
					return false;
					}
		else return true;
		}
	