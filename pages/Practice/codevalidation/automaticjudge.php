<?php
	include "cppcompiler.php";
	include "freopenInsertor.php";
	include "executer.php";
	include "validator.php";
	
	// the function returns 2 for compilation error
	// 1 for wrong answers
	// 0 for correct solutions
	// time limit exceeded and runtime errors are not supported
	// this automatic judge uses system calls
		
	function automaticJudge($fileName)
	{
			if (cppCompiler($fileName)==false){
				echo "compilation Error";
				return 2;
			}
			executeFile("clientexecutable.o");
			if (validateFiles("out.out","correctoutput.out")==true){
					echo "correct solution";
					return 0;
			}
			else{
					echo "wrong answer";
					return 1;
			}
	}
		automaticJudge("clientcode.cpp");
?>
