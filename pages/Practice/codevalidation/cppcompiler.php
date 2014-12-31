<?php
	function cppCompiler ($fileName)
	{
		shell_exec("g++ {$fileName} -o clientexecutable.o ");
		$directory=shell_exec("ls");
//		echo "cppCompiler()";
		
		if (strpos($directory,"clientexecutable.o")==false){
				return false;
		}
		return true;

	}	
//	echo "CPPCOMPILER FILE";

//	cppCompiler("clientcode.cpp");
?>
