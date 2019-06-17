<?php
$link = mysqli_connect("localhost","heman_bow","#Eman2075018","bowdb");

// check connection
if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_POST['send'])){
	$name = $_POST['yourname'];
	$email = $_POST['youremail'];
	$phone = $_POST['yourphone'];
	$msg = $_POST['msg'];
	$subject = "Rainbow enquiry";
	$to = "rainbowcbe641002@gmail.com";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers ="From: <$email> \r\n"; 


	$sql="Insert Into enquiry (name,email,phone,comment) values ('$name','$email','$phone','$msg')"; 

	$result = mysqli_query($link,$sql);

	if($result){
		// echo "New record created successfully";
	}
	else{
		echo "Error occured. Please recheck with your signal strength";
	}
	if(mail($to,$subject,$msg,$headers)){
		echo"Thankyou for your Response. We will get back to you."
	}
}

$link->close();
?>