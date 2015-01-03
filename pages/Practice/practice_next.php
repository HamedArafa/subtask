<?php
		session_start();

		include "codevalidation/automaticjudge.php";

		$code = $_POST['code_txt'];
		$myFile =fopen("codevalidation/clientCode.cpp","w");
		fwrite($myFile,$code);

		automaticJudge("codevalidation/clientCode.cpp");
		$conn= mysqli_connect("localhost","root","","subtask");
		if (mysqli_connect_errno()){
				echo "Database failure";
		}
		$currentUser= $_SESSION["current_user_name"];
		
		$query= " SELECT * FROM users WHERE user_name = \"$currentUser\" ";
		$queryResult= mysqli_query($conn,$query);
		if ($queryResult==false){
				echo " Error";
		} 
		$row= mysqli_fetch_array($queryResult);
		$currentProblem = $row[ 'prob_id' ];

        $currentProblem++;
		echo "current problem: " . $currentProblem;
        $query= "UPDATE users SET prob_id=$currentProblem where user_name = \"$currentUser\" ";
        
		$queryResult= mysqli_query($conn,$query);
		if ($queryResult==false){
				echo " Error";
		}

		header("Location: practice.php");

?>
