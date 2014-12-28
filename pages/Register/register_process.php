<?php
   $fname=$_POST["fname_txt"];
   $lname=$_POST["lname_txt"];
   $uname=$_POST["uname_txt"];
   $pass1=$_POST["pass1_txt"];
   $email=$_POST["email_txt"]; 
   $country=$_POST["country_hidden"];
   $quote=$_POST["quote"];
   //handle image uploading
    
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "subtask";


   // Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

    // image upload settings
    
    $uploadDir = 'uploads/'; 	
    $fileName = $_FILES['photo']['name'];
    $tmpName  = $_FILES['photo']['tmp_name'];
    $fileSize = $_FILES['photo']['size'];
    $fileType = $_FILES['photo']['type'];
    $filePath = $uploadDir.$fileName;
    $filePath= str_replace(' ','',$filePath);	
    $result = move_uploaded_file($tmpName, $filePath);

	if (!$result) {
		echo "Error uploading file";
		exit;
	}
	if(!get_magic_quotes_gpc())
	{
	    $fileName = addslashes($fileName);
            $filePath = addslashes($filePath);
	    $quote= addslashes($quote);
	}
	// finish image upload settings
	$sql = "INSERT INTO users(first_name,last_name,user_name,password,email,country,quote,score,member_since,image)
	      VALUES ('{$fname}','{$lname}','{$uname}','{$pass1}','{$email}','{$country}','{$quote}' ,0,CURRENT_TIMESTAMP, 
		'{$filePath}' )";


	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();


?>
