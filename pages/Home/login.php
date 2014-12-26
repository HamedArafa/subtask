



<?php

	session_start();
?>



<!DOCTYPE html>
<html>
 <head>
 	   <script>
		function myFunction() {
    	confirm("Hello! I am an alert box!");
		}
</script>
  </head>
	<body>

 	   <script>
		   myFunction();
		</script>
	</body>
</html>



  <?php
	$_SESSION["loggedin"]=true;
	header("Location: home.php");
?>