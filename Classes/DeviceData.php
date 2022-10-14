<?php
class DeviceData {
    private $itemsTable = "received_data";      
    public $data_id;
    public $device_name;
    public $temperature;
    public $created; 
    private $conn;
	
    public function __construct($db){
        $this->conn = $db;
    }	
	
	function read(){	
		if($this->data_id) {
			$stmt = $this->conn->prepare("SELECT * FROM ".$this->itemsTable." WHERE data_id = ?");
			$stmt->bind_param("i", $this->data_id);
		} else {
			$stmt = $this->conn->prepare("SELECT * FROM ".$this->itemsTable);		
		}		
		$stmt->execute();			
		$result = $stmt->get_result();		
		return $result;	
	}
	
	function create(){
		$stmt = $this->conn->prepare("
			INSERT INTO ".$this->itemsTable."(`device_name`, temperature)
			VALUES(?,?)");
		
		$this->device_name = htmlspecialchars(strip_tags($this->device_name));
		$this->temperature = $this->temperature;
		# $this->received_on = htmlspecialchars(strip_tags($this->received_on));
		
		$stmt->bind_param("si", $this->device_name, $this->temperature);
		
		if($stmt->execute()){
			return true;
		}
	 
		return false;		 
	}
}
?>