<?php
	function cppCompiler ($fileName)
	{
		shell_exec("g++ {$fileName} -o clientExecutable.o ");
		$directory=shell_exec("ls");
		
		if (strpos($directory,"clientExecutable.o")==false){
				return false;
		}
		return true;
	}	
	cppCompiler("newCode.cpp");
?>
