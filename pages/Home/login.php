<?php

	session_start();


	$con=mysqli_connect("localhost","root","","subtask");
	if (mysqli_connect_errno()) {
 		 echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
 

 	$name=$_POST['name_txt'];

	$query="SELECT * FROM users WHERE user_name= '$name' ";
 
	$result=mysqli_query($con,$query);
	if($result === FALSE) {
    	die(mysql_error()); 

	}
 
	if($row=mysqli_fetch_array($result))
	{
		if($row["password"]==$_POST["pass_txt"])
		{
			$_SESSION["loggedin"]=true;
			$_SESSION["current_user_name"]=$row["user_name"];
			mysqli_close($con);            
	
		}
		else{   // WRONG PASSWORD
			echo "WRONG PASS";
            $_SESSION["home_alert_error"]=true;
		}
	}
	else{  // WRONG USER NAME
		 $_SESSION["home_alert_error"]=true;
	}
 
	mysqli_close($con);
 	

 	header("Location: home.php");
 


?>
