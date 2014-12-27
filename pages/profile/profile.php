<?PHP
    session_start();
	$hostname = "localhost"; // usually is localhost, but if not sure, check with your hosting company, if you are with webune leave as localhost 
	$db_user = "root"; // change to your database password 
	$db_password = ""; // change to your database password 
	$database = "subtask"; // provide your database name 
	$db_table = "users"; // Your Table Name where you want to Store Your Image. 
	# STOP HERE 
	#################################################################### 
	# THIS CODE IS USED TO CONNECT TO THE MYSQL DATABASE 
	$db = mysql_connect($hostname, $db_user, $db_password); 
	mysql_select_db($database,$db);

	$current_user_name=$_SESSION["current_user_name"];
	

	$query = "SELECT * FROM users where user_name='{$current_user_name}' ";

	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_array($result))
	{    
         echo "<div>" . $row['first_name'] . "</div>";
         

         echo "<div>" ;  
	     echo "<img border=\"0\" src=\"http://localhost/NADA/subtask/pages/Register/".$row['image']."\" width=\"200\" alt=\"Your Name\" height=\"200\">";
	     echo "</div>";

	     echo "<div>";
	     echo "" . $row['quote'];
	     echo "</div>";


	     
	     echo "<div >";
	     echo "country: ".$row['country'] . "<br/>";
	     echo "member since: ".$row['member_since'] . "<br/>";
	     echo "score: ".$row['score'] . "<br/>";
	     echo "</div>";
	}
?>