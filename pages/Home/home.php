<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
<!-- TRY  start
-->

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


<!-- TRY  end
-->


		<script type='text/javascript' src='../../bower_components/jquery/dist/jquery.js'></script>		
		<script type='text/javascript' src='../../bower_components/bootstrap/dist/js/bootstrap.js'></script>
		<link rel='stylesheet' href='../../bower_components/bootstrap/dist/css/bootstrap.min.css'>
		<link rel='stylesheet' href='../../globalstyling.css'>

	</head>
	<body style="background-image: url('monkey.png');   background-color: #00231F;
    background-repeat: no-repeat;background-size: 1400px 700px;   " >

      <?php
         if(isset($_SESSION["loggedin"])){
            ?>
             <input type="button" class="btn btn-default" value="log out" style="color:#02CEC0; float: right;" />
             <br/>
            <?php
         }
      ?>
  
	    <h1 style="color:#02CEC0;">Welcome to Subtask</h1>
		<!--about the site-->
		<div style="color:#FFFFFF;">
			<span   style="font-weight: bold; font-style: italic;  text-decoration: underline;"> About the site</span> <br/>
			<span >
				Subtask is an online practice platform for competitive</br>
				programmers and programmers in general.</br>
				Make an account, Then start practicing. </br>
				You will be introduced several programming </br>
				tasks and you are required to find the solution and</br> 
				code it in time.</br>
				The more you solve the more rating you gain.</br></br></br></br></br>
			</span>
		</div>


	     <!--login form  OR welcome and take test-->
	     <div>
            
            <?php
 			if(isset($_SESSION["home_alert_error"])){
 				unset($_SESSION["home_alert_error"]);
	        	?>
                <div style="color:red">incorrect user name or password</div>

	        	<?php
	    	}
            ?>


	        <?php
	        if(!isset($_SESSION["loggedin"])){
               ?>

			     <form role="form"   name="myform" id="myform" action="login.php" method="POST">

			     <div class="form-group">
			      <label style="color:#FFFFFF;">User name:</label>
			      <input type="text" class="form-control" id="email" placeholder="Enter username" style="width:400px"id="name_txt" name="name_txt">
			    </div>


			    <div class="form-group">
			      <label style="color:#FFFFFF;">Password:</label>
			      <input type="password" class="form-control" id="pwd" placeholder="Enter password" style="width:400px"id="pass_txt" name="pass_txt">
			    </div>

			  <!--  <div class="checkbox" >
			      <label style="color:#FFFFFF;"><input type="checkbox" name="remember" id="remember"> Remember me</label>
			    </div>
				-->
				<br/>
			    <button type="submit" class="btn btn-default">Log in</button>
			  </form> 

               <?php
	        }
	        else{
	        	
	        ?>
                 <span  style=" font-weight: 500; font-size:17px; color:white;"> welcome 
                 	<?php     echo"$_SESSION[current_user_name]"  ?> 
                 </span></br>
 
				<input type="button" class="btn btn-info" value="Take Test !" style="color:#000000;" />


	        	<?php
	        }
	        ?>
          


	 
         </div>
	</body>
</html>
