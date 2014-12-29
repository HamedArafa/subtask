<?php
	function executeFile ($fileName)
	{
			shell_exec("./{$fileName}");				
	}
	executeFile("clientExecutable.o");
?>
