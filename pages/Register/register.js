var dom = document.getElementById("country");
var fName= document.getElementById("fname_txt");
var lName=document.getElementById("lname_txt");
var uName=document.getElementById ("uname_txt");
var email =document.getElementById("email_txt");
var pass1= document.getElementById("pass1_txt");
var pass2= document.getElementById("pass2_txt");
var quote=document.getElementById ("quote");
var browseBtn=document.getElementById("browse_btn");
console.log( "countries: " +dom+" firstname "+fName+" lastname "+lName+" username"+uName+" email"+email+" pass1"+pass1+" pass2"+pass2
+"dom "+dom+" quote "+quote+" "+country);
(function addCountriesToList(){
	(function readCountriesFile()
	{
		var reader=new XMLHttpRequest();
		reader.open("GET","countries.txt",false);
		reader.onreadystatechange=function ()
		{
			if (reader.readyState===4){
				if (reader.status===200||reader.status==0){
					var countryList=reader.responseText;
					var i=0;
					while (i<countryList.length){
						var cont="";
						while (countryList[i]!=="\n"){
							cont+=countryList[i++];
						}
						 var option = document.createElement("option");
				   		 option.text = cont;
				   		 option.value= cont;
					    dom.add(option);
						i++;
					}
				}
			}
		}
		reader.send(null);
	})();
})()
function validateFirstName()
{
	var value=fName.value;
	if (  (value.length<=2&& value.length!==0) || value.search(/\W/)!==-1||value.search(/\d/)!==-1 ){
		fName.style.borderColor="Red";
		return false;
	}
	fName.style.borderColor=null;
	if (value.length===0){
		return false;
	}
	return true;
}
function validateLastName ()
{
	value=lName.value;
	if ( (value.length<=2&&value.length!==0) || value.search(/\W/)!==-1||value.search(/\d/)!==-1 ){
		lName.style.borderColor="Red";
		return false;
	}
	lName.style.borderColor=null;
	if (value.length===0){
		console.log("false");
		return false;
	}
	return true;

}
function validateUserName ()
{
	
	value=uName.value;
	if (value.length<5 && value.length!==0){
		uName.style.borderColor="Red";
		return false;
	}
	uName.style.borderColor=null;
	if (value.length===0){
		return false;
	}
	return true;
}	
function validatePassword()
{
	var value1=pass1.value;
	var value2=pass2.value;
	var flag=true;
	if (value1.length<8 && value1.length!==0){
		pass1.style.borderColor="Red";
		flag=false;	
	}
	else{
		pass1.style.borderColor=null;
	}
	if (value2.length<8&& value2.length!==0){
		pass2.style.borderColor="Red";
		flag=false;
	}
	else{
		pass2.style.borderColor=null;
	}
	if (value1!==value2){
		pass2.style.borderColor="Red";
		flag=false;
	}
	if (value1.length===0){
		return false;
	}
	return flag;		
}
function validateEmail()
{
	var isValid=true;
	if (email.value.length===0){
		email.style.borderColor=null;
		return true;	
	}
	var domainIndex=email.value.indexOf('@');
	if (domainIndex===-1||domainIndex===0||domainIndex===email.value.length-1){
		isValid=false;
	}
	var domain = email.value.substring(domainIndex+1,email.value.length);
	var dotIndex=domain.indexOf('.');
	if(dotIndex==-1||dotIndex==0||dotIndex==domain.length-1){
		isValid=false;
	}
	if (isValid==false){
		email.style.borderColor="Red";
	}
	else{
		email.style.borderColor=null;
	}
	return isValid;
}
function submitValidation()
{
	var msg="";
	if (validateFirstName()===false)msg+="invalid: first name\n";
	if(validateLastName()===false)msg+="invalid: last name\n";
	if(validateUserName()===false)msg+="invalid: user name\n";
	if(validatePassword()===false)msg+="invalid: password\n";
	if(validateEmail()===false)msg+="invalid: email\n";
	if(browseBtn.value==="")msg+="please uplod photo\n";
	if(msg!="")
	{
		event.preventDefault();
		alert(msg)
		return false;
	}
	return true;
}
