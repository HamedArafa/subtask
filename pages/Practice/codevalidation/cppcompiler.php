<?php
	function cppCompiler ($fileName)
	{
		shell_exec("g++ {$fileName} -o codevalidation/clientexecutable.o");
		$directory=shell_exec("ls codevalidation");
//		echo "cppCompiler()";
		
		if (strpos($directory,"clientexecutable.o")==false){
				return false;
		}
		return true;

	}	
//	echo "CPPCOMPILER FILE";

//	cppCompiler("clientcode.cpp");
?>
