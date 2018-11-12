<?php  
	class User {
		var $username;
		var $password;
		function addUser(){
			echo "My name";
		}
	}
	$user = new User();
	$user->addUser();

	class Student extends User{

	}
	$student = new Student();
	$student->addUser();

	//tinh dong goi public, protected, private
?>