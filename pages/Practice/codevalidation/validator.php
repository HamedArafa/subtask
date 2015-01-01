<?php
	function validateFiles($client,$correct)
	{	
	//	echo $client ." ". $correct . "</br>";
		$clientFile=fopen($client,"r");
//		echo "client file size:" . filesize($client) ." "	;
//		echo "correct file size:" .filesize($correct);
		$correctFile=fopen($correct,"r");		
		while (feof($clientFile)==false && feof($correctFile)==false  )
		{
				$str1=fgets($clientFile);
				$str2=fgets($correctFile);
				echo "user output ".  $str1 . "correct output " . $str2 . "<br>";
				if ($str1!=$str2){
						return false;
				}
		}
		if (feof($clientFile)==true&& feof($correctFile)==true){
				return true;
		}
		return false;
	}
?>
