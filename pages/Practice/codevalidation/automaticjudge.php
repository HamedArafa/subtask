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
			$r=-1;
			if (cppCompiler($fileName)==false){
				echo "Compilation Error";
					$r= 2;
					exit();
			}
			executeFile("clientexecutable.o");
			if (validateFiles("codevalidation/out.out","codevalidation/correctoutput.out")==true && $r==-1){
					echo "Correct solution";
					$r= 0;
			}
			else{
				if ($r==-1){
					echo "Wrong answer";
					$r= 1;
				}
			}
			return $r ; 
//			unlink("codevalidation/clientexecutable.o");
//			unlink("codevalidation/out.out");
//			shell_exec("rm clientexecutable.o");
	//		shell_exec("rm out.out");
	}
//	automaticJudge("clientcode.cpp");
?>
