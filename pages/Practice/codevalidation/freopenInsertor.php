<?php
	function freopenInsertor ($fileName)
	{
			$myFile = fopen($fileName,"r");
			$newFile=fopen("newCode.cpp","w");
			$flag =false;
			while ( feof($myFile)==false ){
					$ch=fgetc($myFile);
					fwrite($newFile,$ch);
					if ($ch=='{' && $flag==false){
							fwrite($newFile,'freopen("clientOutput.out","w",stdout); freopen("read.in","r",stdin);');
					
							$flag=true;
					}
			}
	}



?>
