<?php
function update($currentProblem){
}


?>
<?php
		session_start();
		unlink("codevalidation/in.in");
		unlink("codevalidation/out.out");
		unlink("codevalidation/clientCode.cpp");
		unlink("codevalidation/clientexecutable.o");
		unlink("codevalidation/correctoutput.out");
		
		include "codevalidation/automaticjudge.php";
		$currentUser= $_SESSION["current_user_name"];
	
		$conn= mysqli_connect("localhost","root","","subtask");
		if (mysqli_connect_errno()){
				echo "Database failure";					// datbase connection
		}
		
		$query= " SELECT * FROM users WHERE user_name = \"$currentUser\" ";
		$queryResult= mysqli_query($conn,$query);						// query on users
		if ($queryResult==false){
				echo " Error";
		} 
		$row= mysqli_fetch_array($queryResult);
		$currentProblem = $row[ 'prob_id' ];
		
		$queryResult=mysqli_query($conn,"select * from problems where prob_id= '$currentProblem' ");
		if ($queryResult==false){
				echo "Error";
		}
		$row= mysqli_fetch_array($queryResult);
		$problemDirectory =$row['prob_dir'];
//		echo $problemDirectory."/in.in";
		copy ("../../".$problemDirectory."/in.in","codevalidation/in.in");
		copy("../../".$problemDirectory."/correctoutput.out","codevalidation/correctoutput.out");	// copy IO files into directory


		$code = $_POST['code_txt'];
		$myFile =fopen("codevalidation/clientCode.cpp","w");
		fwrite($myFile,$code);															// write the code into codevalidation
		$verdict= automaticJudge("codevalidation/clientCode.cpp");
	//	echo $verdict;
		if ($verdict==0){
				echo "correct soulution";
//			$currentProblem++;
//				update();
				$currentProblem++;
				$query= "UPDATE users SET prob_id=$currentProblem where user_name = \"$currentUser\" ";
				$queryResult= mysqli_query($conn,$query);
				if ($queryResult==false){
						echo " Error";
				}

		}
		else if( $verdict==1){
				echo "wrong answer";
		}
		else{
				echo "compilation error";
		}

//		echo "current problem: " . $currentProblem;

//		header("Location: practice.php");

?>
