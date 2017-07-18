<?php 

	define("_TO_", "mebelotazima@mail.ru")

	$email = 	trim( $_POST['email'] );
	$name = 	trim( $_POST['name'] );
	$message = 	trim( $_POST['message'] );

	echo "<pre>";
	echo "email: ".$email;
	echo "name: ".$name;
	echo "message: ".$message;
	echo "</pre>";

	mail(_TO_, $subj, $message);

?>