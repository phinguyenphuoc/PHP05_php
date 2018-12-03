<?php 
	class connectDb{
		var $server = 'localhost';
		var $username = 'root';
		var $password = ''; 
		var $database = '18php05_cs';
		var $connect = '';
		function connect(){
			$this->connect = mysqli_connect($this->server, $this->username, $this->password, $this->database);		
			return $this->connect;
			
		}	
	}
	
?>