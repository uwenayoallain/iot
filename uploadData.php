<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
include_once './utils/Database.php';
include_once './Classes/DeviceData.php';
 
$database = new Database();
$db = $database->getConnection();
 
$items = new DeviceData($db);
 
$data = json_decode(file_get_contents("php://input"));

if(!empty($data->device_name) && !empty($data->temperature)){    

    $items->device_name = $data->device_name;
    $items->temperature = $data->temperature;
    # $items->received_on = date('Y-m-d H:i:s'); 
    
    if($items->create()){         
        http_response_code(201);         
        echo json_encode(array("message" => "Data uploaded successfully."));
    } else{         
        http_response_code(503);        
        echo json_encode(array("message" => "Unable to upload data."));
    }
}else{    
    http_response_code(400);    
    echo json_encode(array("message" => "Unable to upload data. Data is incomplete."));
}
?>