<?php  
	class Users {
		var $name, $username, $password;
		function addUser() {
			echo "add user thanh cong<br>";
		}
		function editUser() {
			echo "edit user thanh cong<br>";
		}
		function deleteUser() {
			echo "delete user thanh cong<br>";
		}
		function viewUser() {
			echo "view user thanh cong<br>";
		}
		protected function changePassword() {
			echo "thay doi password<br>";
		}
		protected function forgotPassword() {
			echo "xoa password<br>";
		}
	}
	class Student extends Users {
		var $mssv = "1234";
		function addUser() {
			echo "add sinh vien: ".$this->mssv;
		}
		function editUser() {
			echo "sua sinh vien: ".$this->mssv;
		}
	}

	$user = new Users();
	$user->addUser();
	$user->editUser();
	$user->deleteUser();
	$user->viewUser();
	$student = new Student();
	$student->addUser();



?>