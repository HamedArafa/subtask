<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>

	</head>
	<body>
	    <h1>Welcome to Subtask</h1>
		<!--about the site-->
		<div>
			About the site <br/>
			<textarea rows="4" cols="50">
			At w3schools.com you will learn how to make a website.
			 We offer free tutorials in all web development technologies.
			</textarea>	
		</div>



	     <!--login form  OR welcome and take test-->
	     <div>
            
	        <?php
	        if(!isset($_SESSION["loggedin"])){
               ?>
	     		Log In 
		     	<form name="myform" id="myform" action="login.php" method="POST" >
			     	user name <input type="text"  name="name_txt" id="name_txt"/> <br/>
			     	password   <input type="password" name="pass_txt" id="pass_txt"/> <br/>
		     	<input type="submit" value="log in"  />
		     	</form>
               <?php
	        }
	        else{
	        	
	        	?>
                  welcome user
                  <input type="button" value="take test!" name="test_btn" id="test_btn" />

	        	<?php
	        }
	        ?>
          
	 
         </div>
	</body>
</html>