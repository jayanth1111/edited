<?php
	

   if(isset($_POST['Signup'])){
   $firstname = $_POST['firstname'];
   $lastname  = $_POST['lastname'];
   $id        = $_POST['id'];
   $password  = $_POST['password'];
   $conf      = $_POST['conf'];}
  
 if(!empty($firstname)|| !empty($lastname)|| !empty($id)|| !empty($password)|| !empty($conf))
   {
	
   	$dbname="harsha";
   	$con=  new mysqli('localhost','root','','harsha');
    	if(mysqli_connect_error())
	{
      		die('connect error('. mysqli_connect_errno().')'. mysqli_connect_error());
    	}

    }
    else
    {
      echo "all are required";
      die();
    }
 $sql = "INSERT INTO harsha (first_name, last_name, email,password) VALUES ('$firstname','$lastname','$id','$password')";
        
	if ($con->query($sql) === TRUE) {
  		header("Location: Login&signup.html");
	} 
	else 
	{
  		echo "Error: " . $sql . "<br>" . $con->error;
	}

   	$con->close();
?>