<?php

		session_start();

	echo $_SESSION["current_user_name"];

?>
<html>
	<head>
		<script type='text/javascript' src='../../bower_components/jquery/dist/jquery.js'></script>		
		<script type='text/javascript' src='../../bower_components/bootstrap/dist/js/bootstrap.js'></script>
		<link rel='stylesheet' href='../../bower_components/bootstrap/dist/css/bootstrap.min.css'>
		<link rel='stylesheet' href='../../globalstyling.css'>
	</head>
	<body style="background-color: #00231F;">
	<?php
		function readMyFile ($fileName)
		{
				$myFile = fopen($fileName,"r");
				return fread($myFile, filesize($fileName) );
		}
	
	?>

	<?php
		$conn= mysqli_connect("localhost","root","","subtask");
		if (mysqli_connect_errno()){
				echo "Database failure";
		}		

		//$_SESSION["current_user_name"]="nada"; //*******************************


    echo $_SESSION["current_user_name"];
		$currentUser=$_SESSION["current_user_name"];




	
		$query= " SELECT * FROM users WHERE user_name = '$currentUser' ";
		$queryResult= mysqli_query($conn,$query);
		if ($queryResult==false){
				echo " Error";
		} 
		$row= mysqli_fetch_array($queryResult);
		$currentProblem = $row[ 'prob_id' ];
		echo "current problem:" . $currentProblem ;

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
	
	    echo "
	    <h1 style='color:black;'>$currentProblemName</h1>
        <div class= 'problem-discription' >
              <br/>
        	  &nbsp;<span style=' font-weight:bold ;font-style:italic;'>$disc</span> <br/><br/>
              &nbsp;$input <br/><br/>
              &nbsp;$output <br/><br/>
              &nbsp;$notes <br/><br/>
        </div>

	    " ;
		
        
		?>
		<div class="form-group">
			<textarea class="form-control subtask-input-code" rows="5" id="comment">int main(){
	freopen("in.in","r",stdin);
	freopen("out.out","w",stdout);
	
	"type your code"
	return 0;
}
		</textarea>
		</div>


    <form action="http://127.0.0.1/subtask/pages/Practice/practice_next.php" method="post">
		<button type="submit" class="btn btn-primary" value="submit" name="submit_btn" id="submit_btn">submit</button>
    </form>


	</body>
</html>
