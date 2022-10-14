<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once './utils/Database.php';
include_once './Classes/DeviceData.php';

$database = new Database();
$db = $database->getConnection();
 
$items = new DeviceData($db);

$items->id = (isset($_GET['id']) && $_GET['id']) ? $_GET['id'] : '0';

$result = $items->read();

if($result->num_rows > 0){    
    $itemRecords=array();
    $itemRecords["data"]=array(); 
	while ($item = $result->fetch_assoc()) { 	
        extract($item); 
        $itemDetails=array(
            "data_id" => $data_id,
            "device_name" => $device_name,
            "temperature" => $temperature,
			"received_on" => $received_on
        ); 
       array_push($itemRecords["data"], $itemDetails);
    }    
    http_response_code(200);     
    echo json_encode($itemRecords);
}else{
    http_response_code(404);     
    echo json_encode(
        array("message" => "No data found.")
    );
} 
?>