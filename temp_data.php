<?php
 
$dataPoints1 = array();
$dataPoints2 = array();
$dataPoints3 = array();
$dataPoints4 = array();
try{
    $link = new \PDO(   'mysql:host=localhost;dbname=embedded_db;charset=utf8mb4', 
                        'root', 
                        'Password@2001',
                        array(
                            \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            \PDO::ATTR_PERSISTENT => false
                        )
                    );
	
    $handle1 = $link->prepare("select * from temp_statistics where devicename = 'device-01'"); 
    $handle1->execute(); 
    $result1 = $handle1->fetchAll(\PDO::FETCH_OBJ);
    $handle2 = $link->prepare("select * from temp_statistics where devicename = 'device-02'"); 
    $handle2->execute(); 
    $result2 = $handle2->fetchAll(\PDO::FETCH_OBJ);
    $handle3 = $link->prepare("select * from temp_statistics where devicename = 'device-03'"); 
    $handle3->execute(); 
    $result3 = $handle3->fetchAll(\PDO::FETCH_OBJ);
    $handle4 = $link->prepare("select * from  temp_statistics where devicename = 'device-04'"); 
    $handle4->execute(); 
    $result4 = $handle4->fetchAll(\PDO::FETCH_OBJ);
    foreach($result1 as $row){
        array_push($dataPoints1, array("label"=> $row->added, "y"=> $row->temperature));
    }
    foreach($result2 as $row){
        array_push($dataPoints2, array("label"=> $row->added, "y"=> $row->temperature));
    }
    foreach($result3 as $row){
        array_push($dataPoints3, array("label"=> $row->added, "y"=> $row->temperature));
    }
    foreach($result4 as $row){
        array_push($dataPoints4, array("label"=> $row->added, "y"=> $row->temperature));
    }
	$link = null;
}
catch(\PDOException $ex){
    print($ex->getMessage());
}
	
?>