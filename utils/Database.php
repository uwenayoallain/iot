<?php
class Database{
	
	private $host  = 'remotemysql.com';
    private $user  = 'dD2j7IvSPj';
    private $password   = "Y4yno4UbHD";
    private $database  = "dD2j7IvSPj"; 
    
    public function getConnection(){		
		$conn = new mysqli($this->host, $this->user, $this->password, $this->database);
		if($conn->connect_error){
			die("Error failed to connect to MySQL: " . $conn->connect_error);
		} else {
			return $conn;
		}
    }
}
?>