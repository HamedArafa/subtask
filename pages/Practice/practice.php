<html>
	<head>
		<script type='text/javascript' src='../../bower_components/jquery/dist/jquery.js'></script>		
		<script type='text/javascript' src='../../bower_components/bootstrap/dist/js/bootstrap.js'></script>
		<link rel='stylesheet' href='../../bower_components/bootstrap/dist/css/bootstrap.min.css'>
		<link rel='stylesheet' href='../../globalstyling.css'>
	</head>
	<body>
	<?php
		function readMyFile ($fileName)
		{
				$myFile = fopen($fileName,"r");
				return fread($myFile, filesize($fileName) );
		}
	
	?>

	<?php
		session_start();
		$conn= mysqli_connect("localhost","root","","subtask");
		if (mysqli_connect_errno()){
				echo "Database failure";
		}
		$currentUser=$_SESSION["current_user_name"];
		$query= " select * from users where user_name = '$currentUser' ";
		$queryResult= mysqli_query($conn,$query);
		if ($queryResult==false){
				echo " Error";
		} 
		$row= mysqli_fetch_array($queryResult);
		$currentProblem = $row[ 'prob_id' ];
		echo $currentProblem ;
		$queryResult=mysqli_query($conn,"select * from problems where prob_id= '$currentProblem' ");
		if ($queryResult==false){
				echo "Error";
		}
		$row= mysqli_fetch_array($queryResult);
		
		$problemDirectory= "../../" . $row['prob_dir'];

		$disc= readMyFile($problemDirectory . "/discription.txt" );
		$input=readMyFile($problemDirectory . "/input.txt");
		$output=readMyFile($problemDirectory . "/output.txt");
		$notes=readMyFile($problemDirectory . "/notes.txt");		
		echo $disc ;

	?>
		<div class= "problem-discription">

		</div>
		
		<div class="form-group">
			<textarea class="form-control subtask-input-code" rows="5" id="comment"></textarea>
		</div>
		<input type="button" class="btn btn-primary" value="submit" name="submit_btn" id="submit_btn" />

	</body>
</html>
