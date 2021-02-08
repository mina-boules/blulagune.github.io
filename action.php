<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$Street=$_POST['Street'];
		$city=$_POST['city'];
		$postcode=$_POST['postcode'];
		$country=$_POST['country'];
		$arrivet=$_POST['arrive'];
		$depart=$_POST['depart'];
		$adult=$_POST['adult'];
		$Street=$_POST['Street'];
		$msg=$_POST['msg'];

		$to='minanarmar59@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>
