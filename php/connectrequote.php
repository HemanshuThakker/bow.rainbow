<?php
$con = mysqli_connect("localhost","heman_bow","#Eman2075018","bowdb");

// check connection
if($con === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_POST['send'])){
	$name = $_POST['rname'];
	$email = $_POST['remail'];
	$phone = $_POST['rphone'];
	$des = $_POST['rdescription'];
	$qua = $_POST['rquantity'];
	$torecieve = "rainbowcbe641002@yahoo.com";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers ="From: <$email> \r\n";

	$sql="Insert Into rque(name,email,phone,description,quantity) values('$name','$email','$phone','$des','$qua')"; 

	$result = mysqli_query($con,$sql);

	if($result){
		echo "New record created successfully";
	}
	else{
		echo "error in sending the data";
	}
	if(mail($torecieve,$subject,$msg,$headers)){
		echo"Thankyou for your Response. We will get back to you.";
	}
}

$con->close();
?>