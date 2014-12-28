<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<script type='text/javascript' src='../../bower_components/jquery/dist/jquery.js'></script>		
		<script type='text/javascript' src='../../bower_components/bootstrap/dist/js/bootstrap.js'></script>
		<link rel='stylesheet' href='../../bower_components/bootstrap/dist/css/bootstrap.min.css'>
		<link rel='stylesheet' href='../../globalstyling.css'>

	</head>
	<body>



	    <h1>Welcome to Subtask</h1>
		<!--about the site-->
		<div>
			About the site <br/>
			<span>
				Subtask is an online practice platform for competitive programmers and programmers in general.</br>
				Make an account, Then start practicing. </br>
				You will be introduced several programming tasks and you are required to find the solution and code it in time.</br>
				The more you solve the more rating you gain.</br></br>
			</span>
		</div>


	     <!--login form  OR welcome and take test-->
	     <div>
            
	        <?php
	        if(!isset($_SESSION["loggedin"])){
               ?>
	     		Log In 
		     	<form name="myform" id="myform" action="login.php" method="POST" >
				<div class="input-group subtask-text-input">
	 				<input type="text" class="form-control" placeholder="user name" aria-describedby="basic-addon1"
					id="name_txt" name="name_txt">
				</div>

				<div class="input-group subtask-text-input">
	 				<input type="password" class="form-control" placeholder="password" aria-describedby="basic-addon1"
					id="pass_txt" name="pass_txt">
				</div>

		     	<input type="submit" class="btn btn-primary" value="log in"  />
		     	</form>
               <?php
	        }
	        else{
	        	
	        ?>
                  welcome user</br></br>
                  <input type="button" class="btn btn-primary" value="Practice !" name="test_btn" id="test_btn" />
	        	<?php
	        }
	        ?>
          
	 
         </div>
	</body>
</html>
