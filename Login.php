<?php

  $email = $_POST["email"];
 $password = $_POST["password"];
 
 $con = mysqli_connect("localhost", "id20162069_loginlogoutlifestyleelvin", "{vcvR0cjaMdCc<(!", "id20162069_loginlogoutlifestyle");

 $sql = "SELECT * FROM register WHERE email = '$email' AND password = '$password'";
 $result = mysqli_query($con, $sql);
 if($result){
	 if (mysqli_num_rows($result)>= 1 ) {
	     $json_array['user_details'] = array();
			while($row = mysqli_fetch_assoc($result)){
				$json_array['user_details'][] = $row;
			}
		 $response = array("success" => "1", "user_details" => $json_array, "message"=>"You have been logged in successfully");
	 }else{
		 $response = array("success" => "0", "message"=>"Please enter valid email and password");
	 }
 }else{
	  $response = array("success" => "0", "message"=>"Server error");
 }
 
 header('Content-type: application/json');
 echo json_encode($response); 