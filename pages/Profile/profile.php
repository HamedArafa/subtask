<html>
	<head>
		<script type='text/javascript' src='../../bower_components/jquery/dist/jquery.js'></script>		
		<script type='text/javascript' src='../../bower_components/bootstrap/dist/js/bootstrap.js'></script>
		<link rel='stylesheet' href='../../bower_components/bootstrap/dist/css/bootstrap.min.css'>
		<link rel='stylesheet' href='../../globalstyling.css'>
	</head>
	<body style=" background-image: url('monkey.png'); background-color: #00231F;
			background-repeat: no-repeat;background-size: 1400px 700px;   ">
		<?PHP
		    session_start();
			$hostname = "localhost"; // usually is localhost, but if not sure, check with your hosting company, if you are with webune 			leave as localhost 
			$db_user = "root"; // change to your database password 
			$db_password = ""; // change to your database password 
			$database = "subtask"; // provide your database name 
			$db_table = "users"; // Your Table Name where you want to Store Your Image. 
			# STOP HERE 
			#################################################################### 
			# THIS CODE IS USED TO CONNECT TO THE MYSQL DATABASE 
			$db = mysql_connect($hostname, $db_user, $db_password); 
			mysql_select_db($database,$db);

			$current_user_name= $_SESSION["current_user_name"];
	

			$query = "SELECT * FROM users where user_name='{$current_user_name}' ";

			$result = mysql_query($query) or die(mysql_error());
			while($row = mysql_fetch_array($result))
			{    
	       		 echo "<div>" . $row['first_name'] . "</div>";
			 

       			 echo "<div>" ;  
			     echo "<img border=\"0\" src=\"../Register/".$row['image']."\" width=\"200\" alt=\"Your Name\" height=\"200\">";
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
	</body>

</html>

