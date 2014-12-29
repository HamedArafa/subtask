<?php
	function validateFiles($client,$correct)
	{	
		$clientFile=fopen($client,"r");
		$correctFile=fopen($correct,"r");
		while (feof($clientFile)==false && feof($correctFile)==false  )
		{
				$str1=fgets($clientFile);
				$str2=fgets($correctFile);
				echo "first ".  $str1 . "second " . $str2 . "<br>";
				if ($str1!=$str2){
						return false;
				}
		}
		if (feof($clientFile)==true&& feof($correctFile)==true){
				return true;
		}
		return false;
	}
	$ans=	validateFiles("test1.txt","test2.txt");
	if ($ans==false){
			echo "Files don't match";
	}
	else{
			echo "Files match";
	}
?>
