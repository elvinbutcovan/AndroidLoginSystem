<?php

 $name = $_POST["name"];
 $email = $_POST["email"];
 $password = $_POST["password"];
 
 $con = mysqli_connect("localhost", "id20162069_loginlogoutlifestyleelvin", "{vcvR0cjaMdCc<(!", "id20162069_loginlogoutlifestyle");

 $sql = "INSERT INTO register (name,email,password) VALUES ('$name','$email','$password')";
 
 $result = mysqli_query($con, $sql);
 if($result){
     $response=array("success"=>"1","message"=>"Registration successfull");
/*	 echo("Registration successfull");*/
 }else{
     $response=array("success"=>"0","message"=>"Registration failed");
	 /*echo("Registration failed");*/
 }
 header('Content-type: application/json');
 echo json_encode($response); 
?>