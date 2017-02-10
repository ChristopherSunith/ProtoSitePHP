<?php  

       $firstname = ($_POST["firstname"]);
       $lastname = ($_POST["lastname"]);

       $hostname = "Localhost";  
       $username = "chrisd2e_testfrm";  
       $password = "ChromitE1990";  
       $dbname="chrisd2e_testingfrm";
       $usertable="testfrm";

       $link = mysqli_connect("localhost" , $username , $password, $dbname);
  	
//Check connection

	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
}

//Attempt insert query execution
$sql = "INSERT INTO $usertable (first_name, last_name) VALUES ('$firstname','$lastname')";

if(mysqli_query($link, $sql)){
//echo "Records added successfully.";

}else{

//echo "Error: Could not"

}

//Close connection
header("Location:http://www.chrissunith.com/testing/");
mysqli_close($link);
?>   
