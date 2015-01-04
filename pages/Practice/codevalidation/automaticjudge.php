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
	//			echo "Compilation Error";
					$r= 2;
			}
			if ($r==-1){
				executeFile("clientexecutable.o");
				if ( validateFiles("codevalidation/out.out","codevalidation/correctoutput.out")==true){
		//				echo "Correct solution";
						$r= 0;
				}
				else{
						$r= 1;
				//		echo"wrong answer";
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
