<?php
 
$_001 = array();
$_002 = array();
$_003 = array();
$_004 = array();
try{
     $dsn = "mysql:host={$_ENV["HOST"]};dbname={$_ENV["DATABASE"]}";
  $options = array(
    PDO::MYSQL_ATTR_SSL_CA => "/etc/ssl/certs/ca-certificates.crt",
  );
  $link = new PDO($dsn, $_ENV["USERNAME"], $_ENV["PASSWORD"], $options);
	
    $handle1 = $link->prepare("select * from temperature where device_name = '001'"); 
    $handle1->execute(); 
    $result1 = $handle1->fetchAll(\PDO::FETCH_OBJ);
    $handle2 = $link->prepare("select * from temperature where device_name = '002'"); 
    $handle2->execute(); 
    $result2 = $handle2->fetchAll(\PDO::FETCH_OBJ);
    $handle3 = $link->prepare("select * from temperature where device_name = '003'"); 
    $handle3->execute(); 
    $result3 = $handle3->fetchAll(\PDO::FETCH_OBJ);
    $handle4 = $link->prepare("select * from temperature where device_name = '004'"); 
    $handle4->execute(); 
    $result4 = $handle4->fetchAll(\PDO::FETCH_OBJ);
    foreach($result1 as $row){
        array_push($_001, array("label"=> $row->added, "y"=> $row->temperature));
    }
    foreach($result2 as $row){
        array_push($_002, array("label"=> $row->added, "y"=> $row->temperature));
    }
    foreach($result3 as $row){
        array_push($_003, array("label"=> $row->added, "y"=> $row->temperature));
    }
    foreach($result4 as $row){
        array_push($_004, array("label"=> $row->added, "y"=> $row->temperature));
    }
	$link = null;
}
catch(\PDOException $ex){
    print($ex->getMessage());
}
	
?>